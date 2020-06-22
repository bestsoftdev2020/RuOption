<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use File;
use App\Proposal;
use App\Proposalitem;
use App\Proposalpaid;
use Sentinel;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {                             // Current Timestamp
        $datas = DB::select('SELECT t1.*,sum(t3.price*t3.quantity) as total_sum, sum(t3.price_12) as price12_sum, t2.name as user_name FROM proposals AS t1 LEFT JOIN users as t2 on t1.user_id = t2.id left join proposal_items as t3 on t1.id=t3.proposal_id GROUP BY t1.id');
        foreach($datas as $key => $data) {
            $expire_date = strtotime($data->expire_date) ;
            $diff = $expire_date-time();
            if($diff < 0)
                $datas[$key]->expire_str = "Expired" ;
            else {
                $days=floor($diff/(60*60*24));
                if($days == 0) {
                    $hours=round(($diff-$days*60*60*24)/(60*60));
                    $datas[$key]->expire_str = $hours." hours left" ;
                }
                else
                    $datas[$key]->expire_str = $days." days left" ;
            }
        }
        if(Sentinel::check())
            return view('admin.proposal.proposal', compact('datas'));
        else
            return redirect('admin/signin')->with('error', 'You must be logged in!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lists = DB::select('SELECT id,name,email FROM users WHERE is_admin=0 ORDER BY id') ;
        $user_list = array() ;
        foreach($lists as $list) {
            array_push($user_list,$list->name.'('.$list->email.')_'.$list->id) ;
        }
        if(Sentinel::check())
            return view('admin.proposal.proposal_add',compact('user_list'));
    }

    public function store(Request $request)
    {
        $proposal = new Proposal ;
        $proposal->name = $request->get('proposal_name') ;
        $proposal->start_date =  $this->changeDateFormat($request->get('start_date')) ;
        $proposal->expire_date =  $this->changeDateFormat($request->get('expire_date')) ;
        $user_info = $request->get('user_name') ;
        $user_info = explode('_',$user_info) ;
        $proposal->user_id = $user_info[1] ;
        $proposal->status = $request->get('status') ;
        $proposal->save() ;
        return Redirect::to('admin/proposals')->with('success', 'Proposal info created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::select("SELECT * FROM proposals WHERE id=".$id) ;
        $data = $data[0] ;

        $lists = DB::select('SELECT id,name,email FROM users WHERE is_admin=0 ORDER BY id') ;
        $user_list = array() ;
        $current_user = '' ;
        foreach($lists as $list) {
            array_push($user_list,$list->name.'('.$list->email.')_'.$list->id) ;
            if($list->id == $data->user_id) 
                $current_user = $list->name.'('.$list->email.')_'.$list->id ;
        }

        $item_data = DB::select("SELECT * FROM proposal_items WHERE proposal_id=".$id) ;
        $item_ids = '' ;
        $total_ordered = 0 ;
        $total_cost = 0 ;
        $total_price12 = 0 ;
        foreach($item_data as $item) {
            if($item_ids == '')
                $item_ids .= $item->id ;
            else
                $item_ids .= ','.$item->id ;
            $total_ordered += $item->price*$item->quantity ;
            $total_cost += $item->cost ;
            $total_price12 += $item->price_12 ;
        }

        $gover_fee = DB::table('settings')->where('name','government_fee')->first()->value ;
        $gover_fee = $total_ordered/100*$gover_fee ;

        $paid_data = DB::select("SELECT t1.*,t2.method_name FROM payout_wallet as t1 LEFT JOIN payment_methods as t2 on t1.method_id=t2.id WHERE proposal_id=".$id) ;
        $paid_ids = '' ;
        $total_paid = 0 ;
        foreach($paid_data as $item) {
            if($paid_ids == '')
                $paid_ids .= $item->id ;
            else
                $paid_ids .= ','.$item->id ;
            $total_paid += $item->amount ;
        }
        if(Sentinel::check())
            return view('admin.proposal.proposal_edit',compact('data','user_list','current_user','item_data','item_ids', 'total_price12', 'paid_data', 'paid_ids', 'total_ordered', 'total_cost', 'gover_fee', 'total_paid'));
        else
            return redirect('admin/signin')->with('error', 'You must be logged in!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_document(Request $request, $id)
    {
        $item_list = DB::select('SELECT * FROM proposal_items WHERE proposal_id='.$id) ;
        foreach($item_list as $item) {
            $temp_item = Proposalitem::find($item->id) ;
            if ($file = $request->file($item->id.'_file')) {
                $extension = $file->extension()?: 'pdf';
                $proposalPath = public_path() . '/uploads/files/proposals/'.$id.'/';
                $safeName = $item->id.'.pdf';
                if (File::exists($proposalPath . $safeName)) {
                    File::delete($proposalPath . $safeName);
                }
                $file->move($proposalPath, $safeName);
                $temp_item->doc_url = $item->id.'.pdf' ;
            }
            $temp_item->cost = $request->get($item->id.'_cost') ;   
            $temp_item->save() ;
        }
        return Redirect::to('admin/proposals/'.$id.'/edit')->with('success', 'Proposal document info updated successfully!');
    }

    public function changeDateFormat($origin_date) {
        $arr = explode('/',$origin_date) ;
        $arr[0] = $arr[0] + $arr[2] ;
        $arr[2] = $arr[0] - $arr[2] ;
        $arr[0] = $arr[0] - $arr[2] ;
        return implode('-',$arr) ;
    }

    public function update_main(Request $request, $id)
    {
        $proposal = Proposal::find($id);
        $proposal->name = $request->get('proposal_name') ;
        $proposal->start_date =  $this->changeDateFormat($request->get('start_date')) ;
        $proposal->expire_date =  $this->changeDateFormat($request->get('expire_date')) ;
        $user_info = $request->get('user_name') ;
        $user_info = explode('_',$user_info) ;
        $proposal->user_id = $user_info[1] ;
        $proposal->status = $request->get('status') ;
        $proposal->save() ;
        return Redirect::to('admin/proposals/'.$id.'/edit')->with('success', 'Proposal main info updated successfully!');
    }

    public function update_item(Request $request, $id)
    {
        $item_ids = $request->get('item_ids') ;
        DB::delete('DELETE FROM proposal_items WHERE id NOT IN ('.$item_ids.') AND proposal_id='.$id) ;
        $item_ids = explode(',',$item_ids) ;
        foreach($item_ids as $item_id) {
            $proposalitem = Proposalitem::find($item_id);
            if($proposalitem == null)
                $proposalitem = new Proposalitem ;
            $proposalitem->proposal_id = $id ;
            $proposalitem->name = $request->get($item_id.'_name') ;
            $proposalitem->price = $request->get($item_id.'_price') ;
            $proposalitem->quantity = $request->get($item_id.'_quantity') ;
            $proposalitem->price_12 = $request->get($item_id.'_price12') ;
            $proposalitem->save() ;
        }
        return Redirect::to('admin/proposals/'.$id.'/edit')->with('success', 'Proposal item info updated successfully!');
    }

    public function update_paid(Request $request, $id)
    {
        $paid_ids = $request->get('paid_ids') ;
        DB::delete('DELETE FROM payout_wallet WHERE id NOT IN ('.$paid_ids.') AND proposal_id='.$id) ;
        $paid_ids = explode(',',$paid_ids) ;
        foreach($paid_ids as $paid_id) {
            $proposalpaid = Proposalpaid::find($paid_id);
            if($proposalpaid == null)
                $proposalpaid = new Proposalpaid ;
            $proposalpaid->proposal_id = $id ;
            $proposalpaid->amount = $request->get($paid_id.'_amount_paid') ;
            $proposalpaid->method_id = $request->get($paid_id.'_method_id') ;
            $proposalpaid->descr = $request->get($paid_id.'_descr_paid') ;
            $proposalpaid->transaction_date =  $this->changeDateFormat($request->get($paid_id.'_transaction')) ;
            $proposalpaid->save() ;
        }
        return Redirect::to('admin/proposals/'.$id.'/edit')->with('success', 'Proposal paid info updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proposal = proposal::find($id);
        $proposal->delete();
        return Redirect::to('admin/proposals')->with('success', 'proposal info deleted successfully!');
    }
}
