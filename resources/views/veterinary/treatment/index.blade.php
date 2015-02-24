@extends('veterinary.layouts.app')

@section('content')
	<!-- Begin Login -->
	<div class="login-content">
		{!! Form::open(array('route' => array('veterinary.pet.petlogin'),'method' => 'POST',"autocomplete" => "off")) !!}
		<h3 class="form-title">{{trans('vetgeneral.Enter-Pet-Identification-Code')}}</h3>
		<br>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">{{trans('vetgeneral.Magnetic-Code')}}</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="{{trans('vetgeneral.Magnetic-Code')}}" name="magnetic-code">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">{{trans('vetgeneral.Chip')}}</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="{{trans('vetgeneral.Chip')}}" name="chip">
			</div>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn blue pull-right">
				{{trans('vetgeneral.Enter')}} <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
		{!! Form::close()!!}
		<img src="{{url('images/veterinary/petcare-login.jpg')}}">
	</div>
@endsection
