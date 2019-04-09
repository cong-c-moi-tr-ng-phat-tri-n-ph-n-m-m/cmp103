<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TinTuc;


class AdminController extends Controller
{
    //
    public function index(){
    	
    	$tintuc = TinTuc::latest()->take(10)->get();
    	return view('admin.home',[ 'tintuc' => $tintuc]);
    }
}
