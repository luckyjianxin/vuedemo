<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashborarController extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware('web');
    }
    
    public function dashboard()
    {
    	return view('layouts.master');
    }

}
