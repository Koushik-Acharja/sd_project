<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Service;
use App\Overview;
use App\Slide;
use DB;
use Session;
/*use session_start();*/
class BasicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function about()
    {
        return view('dashboard.pages.about');
    }
    public function logout(Request $request){
      //Session::end();
      //session_end();
      //Auth::logout();
      Session::flush();
      //Session::forget('userid');
      return redirect('welcome');
    }
    public function welcome(){
      $slide = Slide::orderBy('sort_order', 'ASC')->get();
      $service = Service::orderBy('sort_order', 'ASC')->get();
      $overview = Overview::orderBy('sort_order', 'ASC')->get();
      return view('welcome')->with(compact('service','overview','slide'));
      //return view('welcome');
   }
    
    public function login(){
      return view('try');
   }
   public function eventlog(){
    if(Session::has('role')){
      return redirect('admin');
    }
    else{
      return redirect('user');
    }
   }
   public function trytest(Request $req,$id){
    //$obj = EventRequirement::all();
    echo $radio = $req->get('$id', 0);
   }
   public function loginStore(Request $request){
      $email    = $request->email;
      $password = $request->password;
      $user = User::where('email','=',$email)
                     ->where('password','=',$password)
                     ->first();
      if($user->role==0){
        //Session::get('exception','Email and password not matched');
        Session::put('userid',$user->id);
        Session::put('role',$user->role);
        return redirect('admin');
      }
      else {
        Session::put('userid',$user->id);
        return redirect('user');
      }
   }
   

   ////////////////////////////////////////////////////////////////

   public function signup(){
      //$obj = users::all();
      //return view('try2',['data'=>$obj]);
      return view('try2');
   }

   public function signupStore(Request $req)
   {
      
      $password        = $req->password;
      $confirmpassword = $req->confirmpassword;
      if($password == $confirmpassword){
        $name = $req->name;
        $email = $req->email;
        $phone = $req->phone;
        $address = $req->address;
        $obj = new User();
        $obj->name      = $name;
        $obj->email     = $email;
        $obj->password  = $password;
        $obj->phone     = $phone;
        $obj->address   = $address;
        $obj->role      = "1";

        if($obj->save()){
           echo 'Successfully Inserted';
           return redirect('welcome');
       }
      }
      else {
        // redirect to previous page and show the error message
        // see how to pass data using 'with' in laravel
      }

      
    
 }

 


}

