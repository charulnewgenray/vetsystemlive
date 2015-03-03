@extends('customer.layouts.app')

@section('content')
    <h1 class="page-header">Personal Details</h1>
    <div class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
            <div class="col-sm-6">
                <label class="col-md-6 control-label">Customer Code</label>
                <div class="col-md-6">
                    <p class="form-control-static">
                        {{$customer->customer_id}}
                    </p>
                </div>
                <label class="col-md-6 control-label">Full Name</label>
                <div class="col-md-6">
                    <p class="form-control-static">
                        {{$customer->first_name}} &nbsp; {{$customer->last_name}}
                    </p>
                </div>
                <label class="col-md-6 control-label">Email</label>
                <div class="col-md-6">
                    <p class="form-control-static">
                        {{$customer->email}}
                    </p>
                </div>
                <label class="col-md-6 control-label">Gender</label>
                <div class="col-md-6">
                    <p class="form-control-static">
                        {{$customer->gender}}
                    </p>
                </div>
                <label class="col-md-6 control-label">Primary Phone</label>
                <div class="col-md-6">
                    <p class="form-control-static">
                        {{$customer->primary_phone}}
                    </p>
                </div>
            </div>
            <div class="col-sm-6">

                <label class="col-md-6 control-label">Secondary Phone</label>
                <div class="col-md-6">
                    <p class="form-control-static">
                        {{$customer->secondary_phone}}
                    </p>
                </div>
                <label class="col-md-6 control-label">Address</label>
                <div class="col-md-6">
                    <p class="form-control-static">
                        {{$customer->address}}
                    </p>
                </div>
                <label class="col-md-6 control-label">City</label>
                <div class="col-md-6">
                    <p class="form-control-static">
                        {{$cityName->city}}
                    </p>
                </div>
                <label class="col-md-6 control-label">Postal Code</label>
                <div class="col-md-6">
                    <p class="form-control-static">
                        {{$customer->post_code}}
                    </p>
                </div>
                <label class="col-md-6 control-label">Country</label>
                <div class="col-md-6">
                    <p class="form-control-static">
                        {{$countryName->country_label}}
                    </p>
                </div>
            </div>
        </div>

    </div>

@endsection
