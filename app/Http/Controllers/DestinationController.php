<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use File;
use App\Destination;
use Sentinel;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_time = time();                               // Current Timestamp
        $start_time = strtotime(date('Y-m-01 00:00:00'));     // First Day of Month Timestamp
        $datas = DB::select('SELECT t1.id, t1.name, t1.price_total, t1.price_12, (SELECT COUNT(t2.id) FROM `search_destination` AS t2 WHERE t1.id=t2.dest_id and time < '.$current_time.' ) as search_total, (SELECT COUNT(t2.id) FROM `search_destination` AS t2 WHERE t1.id=t2.dest_id and time < '.$current_time.' and time >= '.$start_time.' ) as search_month, (SELECT COUNT(t3.id) FROM `view_destination` AS t3 WHERE t1.id=t3.dest_id and time < '.$current_time.' ) as view_total, (SELECT COUNT(t3.id) FROM `view_destination` AS t3 WHERE t1.id=t3.dest_id and time < '.$current_time.' and time >= '.$start_time.' ) as view_month, (SELECT COUNT(t4.id) FROM `sold_destination` AS t4 WHERE t1.id=t4.dest_id and time < '.$current_time.') AS sold_total, (SELECT COUNT(t4.id) FROM `sold_destination` AS t4 WHERE t1.id=t4.dest_id and time < '.$current_time.' and time >= '.$start_time.') AS sold_month FROM `destinations` AS t1');
        if(Sentinel::check())
            return view('admin.destination.destinations', compact('datas'));
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
        $lists = DB::select('select name from countries order by display_order') ;
        $country = array() ;
        foreach($lists as $list)
            array_push($country,$list->name) ;
        $tag_info = DB::select("select name from tag_list") ;
        if(Sentinel::check())
            return view('admin.destination.destination_add',compact('country','tag_info'));
        else
            return redirect('admin/signin')->with('error', 'You must be logged in!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $destination = new Destination;
        $destination->name = $request->get('dest_name');
        $destination->price_total = $request->get('price_total') ;
        $destination->price_12 = $request->get('price_12') ;
        $destination->about_dest = $request->get('about_dest') ;
        $destination->about_weather = $request->get('about_weather') ;
        $destination->about_costofliving = $request->get('about_costofliving') ;
        $destination->attr_1_name = $request->get('attr_1_name') ;
        $destination->attr_1_about = $request->get('attr_1_about') ;
        $destination->attr_2_name = $request->get('attr_2_name') ;
        $destination->attr_2_about = $request->get('attr_2_about') ;
        $destination->attr_3_name = $request->get('attr_3_name') ;
        $destination->attr_3_about = $request->get('attr_3_about') ;
        $destination->attr_4_name = $request->get('attr_4_name') ;
        $destination->attr_4_about = $request->get('attr_4_about') ;
        $destination->attr_5_name = $request->get('attr_5_name') ;
        $destination->attr_5_about = $request->get('attr_5_about') ;
        $destination->country = $request->get('country') ;
        $continent = DB::select('select t1.name from continents as t1 left join countries as t2 on t1.code = t2.continent_code where t2.name="'.$request->get('country').'"') ;
        $destination->continent = $continent[0]->name ;
        $tag_info = $request->get('tag_list') ;
        if($tag_info)
            $destination->tags = implode(',',$tag_info) ;
        $destination->photo_urls = 1 ;
        $destination->save() ;
        for($i = 1; $i <=5 ; $i++) {
            if ($file = $request->file('dest_photo'.$i)) {
                $extension = $file->extension()?: 'png';
                $destinationPath = public_path() . '/uploads/files/destinations/'.$destination->id.'/';
                $safeName = $i . '.' . 'png';
                if (File::exists($destinationPath . $safeName)) {
                    File::delete($destinationPath . $safeName);
                }
                $file->move($destinationPath, $safeName);
            }
        }
        return Redirect::to('admin/destinations')->with('success', 'Destination info created successfully!');
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
        $current_time = time();                               // Current Timestamp
        $start_time = strtotime(date('Y-m-01 00:00:00'));     // First Day of Month Timestamp
        $data = DB::select('SELECT t1.*, (SELECT COUNT(t2.id) FROM search_destination AS t2 WHERE t1.id=t2.dest_id and time < '.$current_time.' ) as search_total, (SELECT COUNT(t2.id) FROM search_destination AS t2 WHERE t1.id=t2.dest_id and time < '.$current_time.' and time >= '.$start_time.' ) as search_month, (SELECT COUNT(t3.id) FROM view_destination AS t3 WHERE t1.id=t3.dest_id and time < '.$current_time.' ) as view_total, (SELECT COUNT(t3.id) FROM view_destination AS t3 WHERE t1.id=t3.dest_id and time < '.$current_time.' and time >= '.$start_time.' ) as view_month, (SELECT COUNT(t4.id) FROM sold_destination AS t4 WHERE t1.id=t4.dest_id and time < '.$current_time.') AS sold_total, (SELECT COUNT(t4.id) FROM sold_destination AS t4 WHERE t1.id=t4.dest_id and time < '.$current_time.' and time >= '.$start_time.') AS sold_month FROM destinations AS t1 where t1.id='.$id);
        $data = $data[0] ;
        $lists = DB::select('select name from countries order by display_order') ;
        $country = array() ;
        foreach($lists as $list)
            array_push($country,$list->name) ;

        $tag_info = DB::select("select name from tag_list") ;
        foreach($tag_info as $key=>$info) {
            if(strpos($data->tags, $info->name) !== false){
                $tag_info[$key]->flag = 1 ;
            }
            else {
                $tag_info[$key]->flag = 0 ;
            }
        }
        if(Sentinel::check())
            return view('admin.destination.destination_edit',compact('data','country','tag_info'));
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
    public function update(Request $request, $id)
    {
        $destination = Destination::find($id);
        $destination->update($request->except('dest_name','tags','_token','tag_list',"dest_photo1","dest_photo2","dest_photo3","dest_photo4","dest_photo5")) ;
        $destination->name = $request->get('dest_name');
        $continent = DB::select('select t1.name from continents as t1 left join countries as t2 on t1.code = t2.continent_code where t2.name="'.$request->get('country').'"') ;
        $destination->continent = $continent[0]->name ;
        $tag_info = $request->get('tag_list') ;
        if($tag_info)
            $destination->tags = implode(',',$tag_info) ;
        $destination->save() ;
        for($i = 1; $i <=5 ; $i++) {
            if ($file = $request->file('dest_photo'.$i)) {
                $extension = $file->extension()?: 'png';
                $destinationPath = public_path() . '/uploads/files/destinations/'.$id.'/';
                $safeName = $i . '.' . 'png';
                if (File::exists($destinationPath . $safeName)) {
                    File::delete($destinationPath . $safeName);
                }
                $file->move($destinationPath, $safeName);
            }
        }
        return Redirect::to('admin/destinations')->with('success', 'Destination info updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destination = Destination::find($id);
        $destination->delete();
        return Redirect::to('admin/destinations')->with('success', 'Destination info deleted successfully!');
    }
}
