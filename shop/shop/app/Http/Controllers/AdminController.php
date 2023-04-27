<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin_layout');
    }
    public function dashboard(){
        return view('admin_layout');
    }
    public function show_dashboard(){
        return view('admin_layout');
    }
    public function all_product(){
        return view('all_product');
    }

}
