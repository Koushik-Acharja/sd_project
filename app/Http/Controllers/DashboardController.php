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

      return view('dashboard.pages.dashboard')->with(compact('rule','requirecheckbox','requireradio','eventtype','eventguest'));
   }
   public function eventStore(Request $request)
   {

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
      $eventrequirement->title = implode(",", $request->required);
      $eventrequirement->save();

      $fromtable = CheckBox::select('title')->get();
      echo "$fromtable";
      echo "<br>";

      $describe = $request->describe;
      echo "$describe";
      echo "<br>";

      if ($request->get('customRadioInline2', 0)) {
        $typeofcatering = $request->typeofcatering;
        $specialrequirement = $request->specialrequirement;
        $timeoffood = $request->timeoffood;
        $caterednumber = $request->caterednumber;

        echo "$typeofcatering";
        echo "<br>";
        echo "$specialrequirement";
        echo "<br>";
        echo "$timeoffood";
        echo "<br>";
        echo "$caterednumber";
        echo "<br>";
      }else{
        echo "NoNoNo";
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
