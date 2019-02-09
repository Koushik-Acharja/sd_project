<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use Image;

class ServiceController extends Controller
{
    public function eventservice(){
    	$data = Service::all();
    	return view('backend.pages.gallery.event-service')->with(compact('data'));
    }
    public function eventserviceadd(){
    	return view('backend.pages.gallery.event-service-add');
    }
    public function servicestore(Request $request){
    	//
    	$obj = new Service();
        $obj->service          = $request->service_name;
        $obj->describe_service = $request->describe_service;
    	$obj->sort_order       = $request->sort_order;
    	$this->validate($request, [
            'demo_pic' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
         ]);
    	$originalImage= $request->file('demo_pic');
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path().'/thumbnail/';
        $originalPath = public_path().'/images/';
        $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
        $thumbnailImage->resize(400,300);
        $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName()); 

        
        $obj->demo_pic         = time().$originalImage->getClientOriginalName();
        

        $obj->save();
        	/*{
        return redirect('event-service')->with('success', 'Service has been successfully added');
    	}else{
    		echo $request->service_name;
    	exit();
    	}
    	*/
    }
}
