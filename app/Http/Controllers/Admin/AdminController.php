<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\user;

class AdminController extends Controller
{
    public function home(){
    	
    	return view('backend.pages.home');
    }
}
