<!DOCTYPE html>
<html lang="en">
<head>
	@include('website.layouts.head')
</head>
<body>
	@include('website.layouts.header')
	@yield('content')
	@include('website.layouts.footer')
	<!-- Scripts -->
	@include('website.layouts.differedscripts')
	@yield('page-scripts')
</body>
</html>
