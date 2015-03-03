<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
    @include('customer.layouts.head')
</head>
<body>
@if(Auth::user())
    <div id="wrapper">
        @include('customer.layouts.header')
        <div id="page-wrapper">
            @include('customer.layouts.messages')
            @yield('content')
            @include('layouts.footer')
        </div>

    </div>
    @endif

            <!-- Scripts -->
    @include('layouts.differedscripts')
    @yield('page-scripts')

</body>
</html>
