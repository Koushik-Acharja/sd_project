<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bookevent;

class EventController extends Controller
{
    public function eventnewrequest(){
    	$obj = Bookevent::all();
      	return view('backend.pages.event.event-new-request')->with(compact('obj'));
    }
    public function eventinprogress(){
    	//
    }
    public function eventhistory(){
    	//
    }
}
