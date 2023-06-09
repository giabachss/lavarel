<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryProduct extends Controller
{
    ///////FOR ADMIN//
    public function add_category_product(){
        return view('add_category_product');
    }
    public function all_category_product(){
       $all_category_product = DB::table('tbl_category_product')->get();
       $manager_category_product=view('all_category_product')->with('all_category_product',$all_category_product);
       return view('admin_layout')->with('all_category_product',$manager_category_product);

    }
    public function save_category_product(Request $request)
    {
        $data=array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_status'] = $request->category_product_status;

        DB::table('tbl_category_product')->insert($data);
        return Redirect::to('all-category-product');
    }
    public function edit_category_product($category_product_id){
        $edit_category_product = DB::table('tbl_category_product')->where('category_id',$category_product_id)->get();
        $manager_category_product=view('edit_category_product')->with('edit_category_product',$edit_category_product);
        return view('admin_layout')->with('edit_category_product',$manager_category_product);
    }
    public function update_category_product(Request $request,$category_product_id){
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->update($data);
        return Redirect::to('all-category-product');
    }
    public function delete_category_product($category_product_id){
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->delete();
        return Redirect::to('all-category-product');
    }

    ////FOR USER//
    public function show_category_home($category_id){

        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $category_by_id = DB::table('tbl_product')->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')
        ->where('tbl_product.category_id',$category_id)->get();
        return view('show_category')->with('category',$cate_product)->with('category_by_id',$category_by_id);
    }
}
