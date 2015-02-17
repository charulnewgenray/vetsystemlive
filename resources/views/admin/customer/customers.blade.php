@extends('admin.layouts.app')
@section('content')
    <h1 class="page-header">{{trans('general.customers')}}</h1>
    <table class="table table-striped table-bordered table-hover" id="customer-table">
        <thead>
        <tr>
            <th>{{trans('general.Customer-Code')}}</th>
            <th>{{trans('general.Full-Name')}}</th>
            <th>{{trans('general.Email')}}</th>
            <th>{{trans('general.Phone')}}</th>
            <th>{{trans('general.Animal-Name')}}</th>
            <th>{{trans('general.View-More')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr class="odd gradeX">
                <td>{{$customer->customer_id}}</td>
                <td>{{$customer->first_name}} &nbsp; {{$customer->last_name}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->primary_phone}}</td>
                <td>{{$customer->city_code}}</td>
                <td><a href="/admin/customers/{{$customer->customer_id}}">view more</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection