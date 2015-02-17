@extends('admin.layouts.app')
@section('content')
    @foreach($settings as $setting)
        <pre>
        {{  print_r($setting) }}
        </pre>

    @endforeach
@endsection
