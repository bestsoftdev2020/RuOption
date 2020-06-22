<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use File;
use App\Product;
use Sentinel;

class ProductController extends Controller
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
        $datas = DB::select('SELECT t1.id, t1.name, t1.price_total, t1.price_12, (SELECT COUNT(t2.id) FROM `search_product` AS t2 WHERE t1.id=t2.prod_id and time < '.$current_time.' ) as search_total, (SELECT COUNT(t2.id) FROM `search_product` AS t2 WHERE t1.id=t2.prod_id and time < '.$current_time.' and time >= '.$start_time.' ) as search_month, (SELECT COUNT(t3.id) FROM `view_product` AS t3 WHERE t1.id=t3.prod_id and time < '.$current_time.' ) as view_total, (SELECT COUNT(t3.id) FROM `view_product` AS t3 WHERE t1.id=t3.prod_id and time < '.$current_time.' and time >= '.$start_time.' ) as view_month, (SELECT COUNT(t4.id) FROM `sold_product` AS t4 WHERE t1.id=t4.prod_id and time < '.$current_time.') AS sold_total, (SELECT COUNT(t4.id) FROM `sold_product` AS t4 WHERE t1.id=t4.prod_id and time < '.$current_time.' and time >= '.$start_time.') AS sold_month FROM `products` AS t1');
        if(Sentinel::check())
            return view('admin.product.product', compact('datas'));
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
        $tag_info = DB::select("select name from tag_list") ;
        $products_tag = DB::select("select id,name from products") ;
        if(Sentinel::check())
            return view('admin.product.product_add',compact('tag_info','products_tag'));
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
        $product = new Product;
        $product->name = $request->get('product_name');
        $product->price_total = $request->get('price_total') ;
        $product->price_12 = $request->get('price_12') ;
        $product->about_product = $request->get('about_product') ;
        $product->city = $request->get('city') ;
        $product->country = $request->get('country') ;
        $continent = DB::select('select t1.name from continents as t1 left join countries as t2 on t1.code = t2.continent_code where t2.code="'.$request->get('country').'"') ;
        $product->continent = $continent[0]->name ;
        $tag_info = $request->get('tag_list') ;
        $product->tags = implode(',',$tag_info) ;
        $product_info = $request->get('product_list') ;
        $product->like_products = implode(',',$product_info) ;
        $product->photo_urls = 1 ;
        $product->save() ;
        for($i = 1; $i <=5 ; $i++) {
            if ($file = $request->file('product_photo'.$i)) {
                $extension = $file->extension()?: 'png';
                $productPath = public_path() . '/uploads/files/products/'.$product->id.'/';
                $safeName = $i . '.' . 'png';
                if (File::exists($productPath . $safeName)) {
                    File::delete($productPath . $safeName);
                }
                $file->move($productPath, $safeName);
            }
        }
        return Redirect::to('admin/products')->with('success', 'Product info created successfully!');
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
        $data = DB::select('SELECT t1.*, (SELECT COUNT(t2.id) FROM search_product AS t2 WHERE t1.id=t2.prod_id and time < '.$current_time.' ) as search_total, (SELECT COUNT(t2.id) FROM search_product AS t2 WHERE t1.id=t2.prod_id and time < '.$current_time.' and time >= '.$start_time.' ) as search_month, (SELECT COUNT(t3.id) FROM view_product AS t3 WHERE t1.id=t3.prod_id and time < '.$current_time.' ) as view_total, (SELECT COUNT(t3.id) FROM view_product AS t3 WHERE t1.id=t3.prod_id and time < '.$current_time.' and time >= '.$start_time.' ) as view_month, (SELECT COUNT(t4.id) FROM sold_product AS t4 WHERE t1.id=t4.prod_id and time < '.$current_time.') AS sold_total, (SELECT COUNT(t4.id) FROM sold_product AS t4 WHERE t1.id=t4.prod_id and time < '.$current_time.' and time >= '.$start_time.') AS sold_month FROM products AS t1 where t1.id='.$id);
        $data = $data[0] ;

        $tag_info = DB::select("select name from tag_list") ;
        foreach($tag_info as $key=>$info) {
            if(strpos($data->tags, $info->name) !== false){
                $tag_info[$key]->flag = 1 ;
            }
            else {
                $tag_info[$key]->flag = 0 ;
            }
        }
        $products_tag = DB::select("select id,name from products where id <> ".$id) ;
        $like_list = explode(',',$data->like_products) ; 
        foreach($products_tag as $key=>$product) {
            if(in_array($product->id, $like_list)){
                $products_tag[$key]->flag = 1 ;
            }
            else {
                $products_tag[$key]->flag = 0 ;
            }
        }
        if(Sentinel::check())
            return view('admin.product.product_edit',compact('data','tag_info','products_tag'));
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
        $product = Product::find($id);
        $product->update($request->except('product_name','tags','_token','tag_list','product_list',"product_photo1","product_photo2","product_photo3","product_photo4","product_photo5")) ;
        $product->name = $request->get('product_name');
        $continent = DB::select('select t1.name from continents as t1 left join countries as t2 on t1.code = t2.continent_code where t2.code="'.$request->get('country').'"') ;
        $product->continent = $continent[0]->name ;
        $tag_info = $request->get('tag_list') ;
        $product->tags = implode(',',$tag_info) ;
        $product_info = $request->get('product_list') ;
        $product->like_products = implode(',',$product_info) ;
        $product->save() ;
        for($i = 1; $i <=5 ; $i++) {
            if ($file = $request->file('product_photo'.$i)) {
                $extension = $file->extension()?: 'png';
                $productPath = public_path() . '/uploads/files/products/'.$id.'/';
                $safeName = $i . '.' . 'png';
                if (File::exists($productPath . $safeName)) {
                    File::delete($productPath . $safeName);
                }
                $file->move($productPath, $safeName);
            }
        }
        return Redirect::to('admin/products')->with('success', 'Product info updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return Redirect::to('admin/products')->with('success', 'Product info deleted successfully!');
    }
}
