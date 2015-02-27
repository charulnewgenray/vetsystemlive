<?php namespace App\Http\Controllers\Veterinary\Treatment;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\Veterinary\Pets;
use App\Models\Veterinary\Events;
use App\Models\Veterinary\Examinations;
use App\Models\Veterinary\Visits;
use App\Models\Veterinary\Treatments;
use Illuminate\Support\Facades\DB;

class PetController extends Controller {

	public function index(){
        if(Session::get('treatment.petid')){
            return redirect()->route('veterinary.pet.show', ['id' => Session::get('treatment.petid')]);
        }
        else{
            return view('veterinary.treatment.index');
        }
    }

    public function petlogin(){
        $v = Validator::make(Input::all(),[
            'magnetic-code' => 'required|min:3',
            'chip' => 'required|min:3'
        ]);
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors());
        }
        else{
            $petid = Pets::PetId(Input::get('chip'));
            if(!is_object($petid))
                {
                    Session::put('treatment.pet', Input::get('chip'));
                    Session::put('treatment.petid',$petid);
                    return redirect()->route('veterinary.pet.show', ['id' => $petid]);
                }
            else{
                return redirect()->back()->withErrors("Request Pet not found please recheck your credentials");
            }
        }
    }

    public function petlogout(){
        Session::forget('treatment');
        return redirect()->route('veterinary.pet.index');
    }

    public function show($id){
        $token = Session::get('_token');
        $records = Pets::PetData($id);
        $events = Events::where('pet_id','=',$id)->get();
        $firstEvent = Events::where('pet_id','=',$id)->first();

        $visits = Visits::where('event_id','=',$firstEvent->event_id)->get();
        /* get pet plan on the basis of pet id */
        $petPlan = DB::table('pet_plan')->select('plan_id')->where('pet_id','=',$id)->first();
        /* get vaccination ids on the basis of plan id */
        $vaccineIds = DB::table('vaccinations')->select('vaccine_id')->where('plan_id','=',$petPlan->plan_id)->get();
        $vaccineIdsArr = array();
        foreach($vaccineIds as $vaccineId){
            $vaccineIdsArr[] = $vaccineId->vaccine_id;
        }
        $lastVaccinations = DB::table('last_vaccinations')->whereIn('vaccine_id',$vaccineIdsArr)->get();
        $examinations = Examinations::all();
        $treatments = Treatments::all();
        return view('veterinary.treatment.show',compact('records','events','lastVaccinations','visits','token','examinations','treatments'));
    }





}
