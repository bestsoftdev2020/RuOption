<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Sentinel;

class SettingController extends Controller
{
    public function index() {
        $data = (object)[
            'euro_rate' => DB::table('settings')->where('name','euro_rate')->first()->value,
            'credit_card_tax' => DB::table('settings')->where('name','credit_card_tax')->first()->value,
            'government_fee' => DB::table('settings')->where('name','government_fee')->first()->value,
            'net_profit' => DB::table('settings')->where('name','net_profit')->first()->value,
            'company_cost' => DB::table('settings')->where('name','company_cost')->first()->value
        ];
        $lists = DB::select('select name from tag_list') ;
        $tag_info = array() ;
        foreach($lists as $list)
            array_push($tag_info,$list->name) ;
        $tag_info = implode(",",$tag_info) ;
        $data->tag_info = $tag_info ;
        if(Sentinel::check())
            return view('admin.setting', compact('data'));
        else
            return redirect('admin/signin')->with('error', 'You must be logged in!');
    }

    public function save(Request $request) {
        DB::update('update settings set value='.$request->get('euro_rate').' where name="euro_rate"') ;
        DB::update('update settings set value='.$request->get('credit_card_tax').' where name="credit_card_tax"') ;
        DB::update('update settings set value='.$request->get('government_fee').' where name="government_fee"') ;
        DB::update('update settings set value='.$request->get('net_profit').' where name="net_profit"') ;
        DB::update('update settings set value='.$request->get('company_cost').' where name="company_cost"') ;

        $origin_tag = $request->get('origin_tags') ;
        $current_tag = $request->get('tags') ;
        return redirect('admin/setting')->with('success', 'Settings was updated successfully!');
    }
}
