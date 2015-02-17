<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')
</head>
<body>

	@if(Auth::user())
			<div id="wrapper">
				@include('admin.layouts.header')
				<div id="page-wrapper">
					@yield('content')
				</div>
			</div>
	@endif

	@include('layouts.footer')
	<!-- Scripts -->
	@include('layouts.differedscripts')

</body>
</html>
