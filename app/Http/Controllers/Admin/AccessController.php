<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AccessController extends Controller
{
    public function alladmin(){
    	$alladmin = User::where('role','=',0)->get();
    	return view('backend.pages.access.alladmin')->with(compact('alladmin'));
    }
    public function alluser(){
    	$alluser = User::where('role','=',1)->get();
    	return view('backend.pages.access.alluser')->with(compact('alluser'));
    }
    public function alladminadd()
    {
    	return view('backend.pages.access.add');
    }
    public function alladminstore(Request $req)
    {
        $name           = $req->name;
        $email          = $req->email;
        $password       = $req->password;
        $phone          = $req->phone;
        $address        = $req->address;

        $obj = new User();
        $obj->name      = $name;
        $obj->email     = $email;
        $obj->password  = $password;
        $obj->phone     = $phone;
        $obj->address   = $address;
        $obj->role      = "0";

        if($obj->save()){
           return redirect('alladmin')->with('success', 'Successfully Added');
       }
    }
    public function alladminrewrite($id){
    	$alladminrewrite = User::find($id);
    	return view('backend.pages.access.edit')->with(compact('alladminrewrite'));
    }
    public function alladminupdates(Request $request, $id){
    	$obj = User::find($id);
    	$obj->name      = $request->name;
        $obj->email     = $request->email;
        $obj->password  = $request->password;
        $obj->phone     = $request->phone;
        $obj->address   = $request->address;
    	if($obj->save())
    	{
    		return redirect()->to('/alladmin')->with('success', 'Successfully Updated');
    	}
    }
    public function alladmindeletes($id){
    	$alladmindeletes = User::find($id);
    	if($alladmindeletes->delete()){
         return redirect('/alladmin')->with('success', 'Successfully Deleted');;
      }
    }

    public function alluserdeletes($id){
    	$alluserdeletes = User::find($id);
    	if($alluserdeletes->delete()){
         return redirect('/.alluser')->with('success', 'Successfully Deleted');;
      }
    }
}
