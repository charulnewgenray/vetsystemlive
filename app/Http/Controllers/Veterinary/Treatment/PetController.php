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
        $records = Pets::PetData($id);
        return view('veterinary.treatment.show',compact('records'));
    }

}
