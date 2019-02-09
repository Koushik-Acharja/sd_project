<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Bookevent;
use App\Rule;
use App\EventRequirement;
use App\EventType;
use App\EventGuest;
use App\CheckBox;
use App\User;

class DashboardController extends Controller
{
  public function createanevent(){
    $rule = Rule::orderBy('sort_order', 'ASC')->get();
      $requirecheckbox = EventRequirement::all();
      //$requireradio = EventRequirement::where('type','=','RadioButton')->get();
      $eventtype = EventType::all();
      $eventguest = EventGuest::all();
    return view('dashboard.include.dashboard-create-an-event')->with(compact('rule','requirecheckbox','requireradio','eventtype','eventguest'));
  }
  public function draft()
  {
    $userid = session()->get('userid');
    $obj = Bookevent::where('customer_id','=',$userid)
                        ->where('booking_status','=','pending')
                       ->get();
    return view('dashboard.pages.dashboard-draft')->with(compact('obj'));
  }
  /*
    public function try(){
    $requireradio = EventRequirement::where('type','=','RadioButton')->get();
    return view('extend')->with(compact('requireradio'));
   }
   */
    public function eventdraft(){
      return view('dashboard.pages.dashboard-event-draft');
    }
    public function deleteevent($id){
      $obj = Bookevent::find($id);
      if($obj->delete()){
        return redirect('draft')->with('success', 'Event-Form successfully deleted');
      }
    }
    public function booked($id){
      $obj = Bookevent::find($id);
      $obj->booking_status = 'booked';
      if($obj->save()){
      return redirect('my-event')->with('success', 'Event is successfully booked');
      }
    }
    public function myevent(){
      $userid = session()->get('userid');
    $obj = Bookevent::where('customer_id','=',$userid)
                       ->where('booking_status','=','booked')
                       ->get();
      return view('dashboard.pages.dashboard-my-event')->with(compact('obj'));
    }
    public function myprofile(){
      $userid = session()->get('userid');
      $info = User::where('id','=',$userid)
                    ->first();
      return view('dashboard.pages.profile')->with(compact('info'));
   }
   public function editprofile(){
    $userid = session()->get('userid');
      $info = User::where('id','=',$userid)
                    ->first();
    return view('dashboard.pages.edit-profile')->with(compact('info'));
   }
   public function updateinfo(Request $request,$id){
        //$userid = session()->get('userid');
        //$obj = User::where('id','=',$userid)->first();
        $obj = User::find($id);

        $obj->name      = $request->val_username;
        $obj->email     = $request->val_email;
        $obj->password  = $request->val_password;
        $obj->about     = $request->val_about;
        $obj->phone     = $request->val_phone;
        $obj->address   = $request->val_address;

        if($obj->save()){
          return redirect('myprofile')->with('success', 'Profile successfully updated');
        }
      }
   public function calender(){
    return view('dashboard.pages.calender');
   }
   public function dashboard(){
      $rule = Rule::orderBy('sort_order', 'ASC')->get();
      //$requirecheckbox = EventRequirement::where('type','=','CheckBox')->get();
      //$requireradio = EventRequirement::where('type','=','RadioButton')->get();
      $eventtype = EventType::all();
      $eventguest = EventGuest::all();

      return view('dashboard.pages.dashboard');
   }
   public function eventStore(Request $request)
   {
    /*
      echo 'Successfully Inserted';
      echo "<br>";
      $title = $request->title;
      echo "$title";
      echo "<br>";
      $description = $request->description;
      echo "$description";
      echo "<br>";
      //$dateinit = \Carbon\Carbon::parse($request->dateini);
      $dateini = \Carbon\Carbon::parse($request->date);
      echo $dateini->format('d/m/Y');
      echo "<br>";
      $hour = $request->hour;
      echo "$hour";
      echo "<br>";
      $minute = $request->min;
      echo "$minute";
      echo "<br>";
      $location = $request->location;
      echo "$location";
      echo "<br>";
      $sponsors = $request->sponsors;
      echo "$sponsors";
      echo "<br>";

      $guesttype = $request->get('event-guest');
      echo "$guesttype";
      echo "<br>";

      $eventtype = $request->get('event-type');
      echo "$eventtype";
      echo "<br>";

      $eventrequirement = new CheckBox;
      $eventrequirement->title = implode(", ", $request->required);
      $eventrequirement->save();

      $fromtable = CheckBox::select('title')->get();
      echo "$fromtable";
      echo "<br>";

      $describe = $request->describe;
      echo "$describe";
      echo "<br>";

      $radio = $request->get('customRadioInline2', 0);
      //$radio = Input::get('customRadioInline2');
      if ($radio == 'no') {
        echo "NoNoNo";
      }else{
        echo 'Yes';
      }
      
      
*/
      if(Session::has('userid')){
          $userid = session()->get('userid');
        }
      $title            = $request->title;
      $description      = $request->description;
      $dateini          = \Carbon\Carbon::parse($request->date);
      //$dateini->format('d / m / Y');
      $hour             = $request->hour;
      $minute           = $request->min;
      $location         = $request->location;
      $sponsors         = $request->sponsors;
      $guesttype        = $request->get('event-guest');
      $eventtype        = $request->get('event-type');
      $eventrequirement = implode(", ", $request->required);
      $describe         = $request->describe;

      $obj = new Bookevent;
      $obj->customer_id          = $userid;
      $obj->title                = $title;
      $obj->description          = $description;
      $obj->day                  = $dateini->format('d / m / Y');
      $obj->hour                 = $hour;
      $obj->min                  = $minute;
      $obj->location             = $location;
      $obj->sponsors             = $sponsors;
      $obj->guest                = $guesttype;
      $obj->event_type           = $eventtype;
      $obj->special_requirements = $eventrequirement;
      $obj->describe             = $describe;

      $abc = $request->get('customRadioInline2', 0);
      if ($abc == 'no') {
        $cateringinfo       = 'No';
      }else{
        $cateringinfo       = 'Yes';
        $typeofcatering     = $request->typeofcatering;
        $specialrequirement = $request->specialrequirement;
        $timeoffood         = $request->timeoffood;
        $caterednumber      = $request->caterednumber;

        $obj->type_of_catering = $typeofcatering;
        $obj->special_catering = $specialrequirement;
        $obj->time_of_food     = $timeoffood;
        $obj->catered_numbers  = $caterednumber;
      }

      $obj->catering_info  = $cateringinfo;
      $obj->booking_status = 'pending';

      if($obj->save()){
        echo 'Successfully Inserted';
        return redirect('draft');
      }   
 }
 
 /*
  BasicController(){
  $rule = Rule::orderBy('sort_order', 'ASC')->get();
      $requirecheckbox = EventRequirement::where('type','=','CheckBox')->get();
      $requireradio = EventRequirement::where('type','=','RadioButton')->get();
      $eventtype = EventType::all();
      $eventguest = EventGuest::all();

      return view('dashboard-create-an-event')->with(compact('rule','requirecheckbox','requireradio','eventtype','eventguest'));
 }

  public function date(){
    return view('dashboard.pages.date');
  }
*/
}
