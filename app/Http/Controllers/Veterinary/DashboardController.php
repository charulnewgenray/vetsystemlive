<?php namespace App\Http\Controllers\Veterinary;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller {

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(){
        return view('veterinary.home');
    }

}
