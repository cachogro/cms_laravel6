<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User, App\Http\Models\Product;

class DashboardController extends Controller
{
    //
    public function __Construct(){
    	$this->middleware('auth');

    	$this->middleware('isadmin');
    }

    public function getDashboard(){
    	
    	return view('admin.dashboard');
    }
}

