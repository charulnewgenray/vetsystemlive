@extends('admin.layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1>{{ trans('general.Dashboard') }}</h1>
			<div class="panel panel-default">
				<div class="panel-body">
					You are logged in!
					your role is
					{{ trans('general.user') }}
				</div>
			</div>
		</div>
	</div>
@endsection
