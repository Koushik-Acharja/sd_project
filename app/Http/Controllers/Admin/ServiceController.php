<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use App\Overview;
use Image;

class ServiceController extends Controller
{
    public function allservice(){
        $data = Service::all();
        return view('backend.pages.service.all-service')->with(compact('data'));
    }
    public function servicestore(Request $request)
    {
        $obj = new Service();  
        $obj->service = $request->service_name;
        $obj->sort_order       = $request->sort_order;
        

        $originalImage= $request->file('demo_icon');

        $thumbnailImage = Image::make($request->file('demo_icon')->getRealPath());
        //$thumbnailImage = Image::make($originalImage);

        $thumbnailPath = public_path().'/icon/';
        $originalPath = public_path().'/thumbnail/';
        $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
        $thumbnailImage->resize(55,55);
        $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());

        
        
        $obj->demo_icon         = time().$originalImage->getClientOriginalName();


        if($obj->save()){
            return redirect('all-services')->with('success', 'Successfully Added');
        }else{
            return redirect('all-services')->with('error', 'Something went wrong. Plz Try again.');
        }
    }
    public function servicedelete($id)
    {
        $service = Service::find($id);
        if($service->delete()){
         return redirect('/all-services')->with('success', 'Successfully Deleted');;
      }
    }
    /*************************************************************************************************************************************************************************************************************************************************************************/


    public function eventoverview(){
        $data = Overview::all();
        return view('backend.pages.service.event-overview')->with(compact('data'));
    }
    public function eventoverviewadd(){
        return view('backend.pages.service.event-overview-add');
    }
    public function overviewstore(Request $request){
        //
        $obj = new Overview();
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
        $thumbnailImage->resize(370,300);
        $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName()); 

        
        $obj->demo_pic         = time().$originalImage->getClientOriginalName();
        
        //$obj->save();
        if($obj->save()){
        return redirect('event-overview')->with('success', 'Service has been successfully added');
        }else{
            echo $request->service_name;
        exit();
        }
    }
/*************************************************************************************************************************************************************************************************************************************************************************************/

    public function overviewedit($id){
    $overviewedit = Overview::find($id);
    return view('backend.pages.service.event-overview-edit')->with(compact('overviewedit'));
    }
    public function overviewupdate($id,Request $request){
        $obj = Overview::find($id);
        $obj->service          = $request->service_name;
        $obj->describe_service = $request->describe_service;
        $obj->sort_order       = $request->sort_order;

        if($request->demo_pic){
        $this->validate($request, [
            'demo_pic' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
         ]);
        $originalImage= $request->file('demo_pic');
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path().'/thumbnail/';
        $originalPath = public_path().'/images/';
        $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
        $thumbnailImage->resize(370,300);
        $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName()); 
        $obj->demo_pic         = time().$originalImage->getClientOriginalName();
        }

        //$obj->save();
        if($obj->save()){
        return redirect('event-overview')->with('success', 'Event Overview has been successfully updated');
        }else{
            echo $request->service_name;
        exit();
        }

    }
    public function overviewdelete($id){
        $overviewdelete = Overview::find($id);
        if($overviewdelete->delete()){
         return redirect('/event-overview')->with('success', 'Successfully Deleted');;
        }
    }
}
