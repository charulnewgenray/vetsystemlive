@extends('admin.layouts.app')
@section('content')
    <h1 class="page-header">{{trans('general.Physicians')}}</h1>
    <table class="table table-striped table-bordered table-hover" id="physician-table">
        <thead>
        <tr>
            <th>{{trans('general.vet_id')}}</th>
            <th>{{trans('general.vet_name')}}</th>
            <th>{{trans('general.vet_city')}}</th>
            <th>{{trans('general.vet_clinic')}}</th>
            <th>{{trans('general.vet_phone')}}</th>
            <th>{{trans('general.View-More')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($physicians  as $physician)
            <tr class="odd gradeX">
                <td>{{$physician->vet_id}}</td>
                <td>{{$physician->vet_name}} &nbsp; {{$physician->last_name}}</td>
                <td>{{$physician->vet_city}}</td>
                <td>{{$physician->vet_clinic}}</td>
                <td>{{$physician->vet_phone}}</td>
                <td><a href="{{route('admin.veterinary.show',$physician->vet_id)}}">view more</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection