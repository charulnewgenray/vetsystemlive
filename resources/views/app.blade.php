<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.head')
</head>
<body>
	<div class="container">
			@yield('content')
	</div>
	@include('layouts.footer')
	@include('layouts.differedscripts')
</body>
</html>
