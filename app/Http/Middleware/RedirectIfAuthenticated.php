<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\RedirectResponse;

class RedirectIfAuthenticated {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if ($this->auth->check())
		{
			//return new RedirectResponse(url('/home'));
			if($this->auth->user()->hasRole('Admin'))
			return new RedirectResponse(url('/admin'));
		elseif($this->auth->user()->hasRole('Veterinarian'))
			return new RedirectResponse(url('/veterinary'));
		elseif($this->auth->user()->hasRole('Administrator'))
			return new RedirectResponse(url('/access/users'));
		elseif($this->auth->user()->hasRole('Customer'))
			return new RedirectResponse(url('/customer'));
		else return new RedirectResponse(url('/auth/logout'));
		}

		return $next($request);
	}

}
