<?php namespace App\Http\Middleware;

use App\Http\Requests\Request;
use Closure;
use Illuminate\Support\Facades\Session;

class PetsAuthenticate {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{	$petid = Session::get('treatment.petid');
		if($petid && $petid ==  $request->route()->parameter('id')){
			return $next($request);
		}else{
			return redirect()->route('veterinary.pet.index');
		}
	}

}
