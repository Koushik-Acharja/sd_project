<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
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
}
