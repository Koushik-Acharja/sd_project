<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bookevent;

class EventController extends Controller
{
    public function eventnewrequest(){
    	$obj = Bookevent::where('booking_status','=','pending')->get();
      	return view('backend.pages.event.event-new-request')->with(compact('obj'));
    }
    public function deleteeventbyadmin($id){
      $obj = Bookevent::find($id);
      if($obj->delete()){
        return redirect('event-new-request')->with('success', 'Event-Form successfully deleted');
      }
    }
    public function payamount(Request $request, $id){
      $obj = Bookevent::find($id);

      $obj->total_amount   = $request->totalamount;
      $obj->after_discount = $request->afterdiscount;

      if($obj->save()){
         return redirect('event-new-request')->with('success', 'Payamount sent successfully');
      }
    }
    public function eventinprogress(){
    	$obj = Bookevent::where('booking_status','=','booked')->get();
        if($obj){
        return view('backend.pages.event.event-in-progress')->with(compact('obj'));
        }else{
            return view('backend.pages.event.event-in-progress');
        }
    }
    
    public function accomplished($id){
        $obj = Bookevent::find($id);
        $obj->booking_status   = 'accomplished';

        if($obj->save()){
            return view('backend.pages.event.event-in-progress')->with('success', 'Event-Form moved to history');
        }
    }

    public function eventhistory(){
        $obj = Bookevent::where('booking_status','=','accomplished')->get();
        return view('backend.pages.event.event-history')->with(compact('obj'));
    }
}
