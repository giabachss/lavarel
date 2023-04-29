<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
session_start();


class HomeController extends Controller
{
    public function index(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        // $all_product = DB::table('tbl_product')
        // ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        // ->orderBy('tbl_product.product_id') -> get();

        $all_product = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->get();
        return view('home')->with('category',$cate_product)->with('all_product',$all_product);
    }
}
