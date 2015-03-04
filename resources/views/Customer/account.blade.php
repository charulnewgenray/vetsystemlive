@extends('customer.layouts.app')

@section('content')
    <h1 class="page-header">Account Details</h1>
    <div class="portlet-body form">
        <form action="{{route('customer.customer.postAccount')}}" class="form-horizontal" method="post">
            <input type="hidden" name="_token" value="{{$token}}">
            <input type="hidden" name="customer_id" value="{{$customer->customer_id}}">
            <input type="hidden" name="user_id" value="{{$customer->user_id}}">
            <div class="form-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-md-4 control-label">First Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first_name" value="{{$customer->first_name}}" placeholder="First Name"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="email" value="{{$customer->email}}" placeholder="Email"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Primary Phone</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="primary_phone" value="{{$customer->primary_phone}}" placeholder="Primary Phone"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Address</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="address" value="{{$customer->address}}" placeholder="Address"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Postal Code</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="post_code" value="{{$customer->post_code}}" placeholder="Postal Code"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Change Password</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="password" value="" placeholder="new password"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Last Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" value="{{$customer->last_name}}" placeholder="Last Name"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Gender</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="gender" value="{{$customer->gender}}" placeholder="Gender"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Secondary Phone</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="secondary_phone" value="{{$customer->secondary_phone}}" placeholder="Secondary Phone"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">City</label>
                            <div class="col-md-6">
                                <input id="search-cities" name="city" value="{{$customer->city_code}}" type="text" placeholder="עיר"  class="form-control form-control-small ui-autocomplete-input">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Country</label>
                            <div class="col-md-6">
                                <select class="form-control" id="select-country" name="country_code">
                                    {{$customer->country_code}}
                                    @foreach($countries as $country)
                                        <option value="{{$country->country_code}}" @if($customer->country_code==$country->country_code) selected @endif >{{$country->country_label}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="form-actions">
                    <button  type="submit" class="btn green">Update</button>
                </div>
                </div>
            </form>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            var cities = [];
            @foreach($cities as $key => $value)
            //cities.push({label: "{{$value}}", value: "{{ $key }}"});
            cities.push("{{$value}}");
            @endforeach
            $( "#search-cities" ).autocomplete({
                source: cities
            });
        });
    </script>

@endsection
