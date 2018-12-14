<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bookevent;
use App\Rule;
use App\EventRequirement;
use App\EventType;
use App\EventGuest;
use App\CheckBox;

class DashboardController extends Controller
{
  public function createanevent(){
    $rule = Rule::orderBy('sort_order', 'ASC')->get();
      $requirecheckbox = EventRequirement::all();
      $requireradio = EventRequirement::where('type','=','RadioButton')->get();
      $eventtype = EventType::all();
      $eventguest = EventGuest::all();
    return view('dashboard.include.dashboard-create-an-event')->with(compact('rule','requirecheckbox','requireradio','eventtype','eventguest'));
  }
  public function draft()
  {
    $obj = Bookevent::all();
      return view('dashboard.pages.dashboard-draft')->with(compact('obj'));
  }
    public function try(){
    $requireradio = EventRequirement::where('type','=','RadioButton')->get();
    return view('extend')->with(compact('requireradio'));
   }
    public function eventdraft(){
      return view('dashboard.pages.dashboard-event-draft');
    }
    public function myprofile(){
      return view('dashboard.pages.profile');
   }
   public function editprofile(){
    return view('dashboard.pages.edit-profile');
   }
   public function calender(){
    return view('dashboard.pages.calender');
   }
   public function dashboard(){
      $rule = Rule::orderBy('sort_order', 'ASC')->get();
      $requirecheckbox = EventRequirement::where('type','=','CheckBox')->get();
      $requireradio = EventRequirement::where('type','=','RadioButton')->get();
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

      $radio = $request->get('Radio2', 0);
      if ($radio) {
        echo 'Yes';
      }else{
        echo "NoNoNo";
      }
      */
      

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

      if ($request->get('customRadioInline2', 0)) {
        $cateringinfo       = 'Yes';
        $typeofcatering     = $request->typeofcatering;
        $specialrequirement = $request->specialrequirement;
        $timeoffood         = $request->timeoffood;
        $caterednumber      = $request->caterednumber;

        $obj->type_of_catering = $typeofcatering;
        $obj->special_catering = $specialrequirement;
        $obj->time_of_food     = $timeoffood;
        $obj->catered_numbers  = $caterednumber;
      }else{
        $cateringinfo       = 'No';
      }

      $obj->catering_info = $cateringinfo;

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
*/
  public function date(){
    return view('dashboard.pages.date');
  }

}
