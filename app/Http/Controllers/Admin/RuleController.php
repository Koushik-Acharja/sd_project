<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rule;

class RuleController extends Controller
{
    public function index()
    {
        $rules = Rule::orderBy('sort_order', 'ASC')->get();

    	return view('backend.pages.rule.list',['data'=>$rules]);
    }
    public function add()
    {
    	return view('backend.pages.rule.add');
    }
    public function store(Request $request)
    {
    	$obj = new Rule();
    	$obj->describe = $request->describe;
    	$obj->status = ($request->status === 'on') ? true:false;
    	$obj->sort_order = $request->sort_order;
    	if($obj->save())
    	{
    		return redirect()->to('/rules')->with('success', 'Successfully Added');
    	}
    }
    public function deletes($id){
    	$rules = Rule::find($id);
    	if($rules->delete()){
         return redirect('/rules')->with('success', 'Successfully Deleted');;
      }
    }
    public function rewrite($id){
    	$uprule = Rule::find($id);
    	return view('backend.pages.rule.edit')->with(compact('uprule'));
    	
    }
    public function updates(Request $req, $id){
    	$rules = Rule::find($id);
        
    	$rules->describe = $req->describe;
    	$rules->status = ($req->status === 'on') ? true:false;
    	$rules->sort_order = $req->sort_order;
    	if($rules->save())
    	{
    		return redirect()->to('/rules')->with('success', 'Successfully Updated');
    	}
    }
}
