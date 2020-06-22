<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Sentinel;

class TagsController extends Controller
{
    public function index() {
        $lists = DB::select('select name from tag_list') ;
        $tag_info = array() ;
        foreach($lists as $list)
            array_push($tag_info,$list->name) ;
        $tag_info = implode(",",$tag_info) ;
        if(Sentinel::check())
            return view('admin.tags', compact('tag_info'));
        else
            return redirect('admin/signin')->with('error', 'You must be logged in!');
    }

    public function save(Request $request) {
        $origin_tag = $request->get('origin_tags') ;
        $current_tag = $request->get('tags') ;
        $origin_array = explode(',', $origin_tag) ;
        $current_array = explode(',', $current_tag) ;
        $delete_array = array_diff($origin_array,$current_array) ;
        $add_array = array_diff($current_array,$origin_array) ;
        foreach($delete_array as $item) 
            DB::delete('delete from tag_list where name="'.$item.'"') ;
        foreach($add_array as $item) 
            DB::delete('insert into tag_list (name) value ("'.$item.'")') ;
        return redirect('admin/tags')->with('success', 'Tags was updated successfully!');
    }
}
