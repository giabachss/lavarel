<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;
session_start();

class ProductController extends Controller
{
    public function add_product(){
        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        return view('add_product')->with('cate_product',$cate_product);
    }
    public function all_product(){
       $all_product = DB::table('tbl_product')
       ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
       ->orderBy('tbl_product.product_id') -> get();
       $manager_product=view('all_product')->with('all_product',$all_product);
       return view('admin_layout')->with('all_category_product',$manager_product);

    }
    public function save_product(Request $request)
    {
        $data=array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['category_id'] = $request->product_cate;
        $data['product_status'] = $request->product_status;
        $data['product_image'] = $request->product_image;
        $get_image= $request-> file('product_image');

        if($get_image){
        $get_name_image = $get_image->getClientOriginalName();
        $new_image = rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move('public/uploads/product',$new_image);
        $data['product_image'] = $new_image;
        DB::table('tbl_product')->insert($data);
        return Redirect::to('all_product');
        }
        $data['product_image'] = '';
        DB::table('tbl_product')->insert($data);
        return Redirect::to('all_product');
    }
    public function edit_product($product_id){
        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $edit_product = DB::table('tbl_product')->where('product_id',$product_id)->get();
        $manager_product=view('edit_product')->with('edit_product',$edit_product)->with('cate_product',$cate_product);
        return view('admin_layout')->with('edit_product',$manager_product);
    }
    public function update_product(Request $request,$product_id){
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['category_id'] = $request->product_cate;
        $data['product_status'] = $request->product_status;
        $data['product_image'] = $request->product_image;
        $get_image= $request-> file('product_image');
        if($get_image){
        $get_name_image = $get_image->getClientOriginalName();
        $new_image = rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move('public/uploads/product',$new_image);
        $data['product_image'] = $new_image;
        }
        DB::table('tbl_product')->where('product_id',$product_id)->update($data);
        return Redirect::to('all_product');
    }
    public function delete_product($product_id){
        DB::table('tbl_product')->where('product_id',$product_id)->delete();
        return Redirect::to('all_product');
    }

 
    public function removeCart($id2)
    {
        DB::table('cart')->where('cart_id',$id2)->delete();
        return Redirect::to('cart');
    }

       public function addToCart($id)
    {

    DB::table('tbl_product')->orderBy('product_id')->where('product_id',$id)->chunk('1000', function($rows) {
    foreach($rows as $row) {
    //convert object to array
    DB::table('cart')->insert(json_decode(json_encode($row), true));
    }
    });
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $all_product = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->get();
        return view('home')->with('category',$cate_product)->with('all_product',$all_product);

    }

        public function cart()
    {
        // $post = DB::table('cart')->orderby('cart_id','desc')->get();
        // return view('cart', ['cart' => $post]);

        $post = DB::table('cart')->orderby('cart_id','desc')->get();
        return view('cart', ['post' => $post]);
    }
    
}
