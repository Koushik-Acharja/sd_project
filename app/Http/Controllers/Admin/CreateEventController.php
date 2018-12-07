<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EventRequirement;
use App\EventType;
use App\EventGuest;

class CreateEventController extends Controller
{
    public function index()
    {
        $requirements = EventRequirement::orderBy('sort_order', 'ASC')->get();

    	return view('backend.pages.create-event-form.list',['requirements'=>$requirements]);
    }
    public function add()
    {
    	return view('backend.pages.create-event-form.add');
    }
    public function store(Request $request)
    {
    	$obj = new EventRequirement();
    	$obj->option = $request->option;
    	$obj->sort_order = $request->sort_order;
    	$obj->type = $request->type;
    	if($obj->save())
    	{
    		return redirect()->to('/requirements')->with('success', 'Successfully Added');
    	}
    }
    public function deletes($id){
    	$rules = EventRequirement::find($id);
    	if($rules->delete()){
         return redirect('/requirements')->with('success', 'Successfully Deleted');;
      }
    }
    public function rewrite($id){
    	$uprequirement = EventRequirement::find($id);
    	return view('backend.pages.create-event-form.edit')->with(compact('uprequirement'));
    }
    public function updates(Request $request, $id){
    	$requirements = EventRequirement::find($id);
    	$requirements->option = $request->option;
    	$requirements->sort_order = $request->sort_order;
    	$requirements->type = $request->type;
    	if($requirements->save())
    	{
    		return redirect()->to('/requirements')->with('success', 'Successfully Updated');
    	}
    }
    public function eventtype(){
        $eventtype = EventType::all();
        return view('backend.pages.create-event-form.eventtypelist')->with(compact('eventtype'));
    }
    public function eventtype_store(Request $request)
    {
        $obj = new EventType();
        $obj->event_catagory = $request->eventtype;
        if($obj->save())
        {
            return redirect()->to('/eventtype')->with('success', 'Successfully Added');
        }
    }
    public function eventtype_delete($id){
        $eventtype = EventType::find($id);
        if($eventtype->delete()){
         return redirect('/eventtype')->with('success', 'Successfully Deleted');;
      }
    }

    public function eventguestmenu(){
        $eventguestmenu = EventGuest::all();
        return view('backend.pages.create-event-form.eventguestmenu')->with(compact('eventguestmenu'));
    }
    public function eventguestmenu_store(Request $request)
    {
        $obj = new EventGuest();
        $obj->event_guest_menu = $request->eventguestmenu;
        if($obj->save())
        {
            return redirect()->to('/eventguestmenu')->with('success', 'Successfully Added');
        }
    }
    public function eventguestmenu_delete($id){
        $eventguestmenu = EventGuest::find($id);
        if($eventguestmenu->delete()){
         return redirect('/eventguestmenu')->with('success', 'Successfully Deleted');;
      }
    }
}
