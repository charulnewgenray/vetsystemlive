@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class= "col-md-12">
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-green-haze"></i>
                        <span class="caption-subject font-green-haze bold uppercase">Physician</span>
                        <span class="caption-helper">add a new phsician</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    {!! Form::open(array('route' => array('admin.veterinary.store'),'method' => 'PUT','class'=>'form-horizontal')) !!}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                    {!! Form::label('vet_firstname', 'First Name', array('class' => 'control-label col-md-3')); !!}
                                <div class="col-md-9">
                                    {!! Form::text("vet_firstname",'',array('class' => 'form-control')) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                    {!! Form::label('vet_lastname', 'Last Name', array('class' => 'control-label col-md-3')); !!}
                                <div class="col-md-9">
                                    {!! Form::text("vet_lastname",'',array('class' => 'form-control')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('vet_email', 'Email', array('class' => 'control-label col-md-3')); !!}
                                <div class="col-md-9">
                                    {!! Form::email("vet_email",'',array('class' => 'form-control')) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('vet_dob', 'DOB', array('class' => 'control-label col-md-3')); !!}
                                <div class="col-md-9">
                                    {!! Form::input('date',"vet_dob",'',array('class' => 'form-control')) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('vet_gender', 'Gender', array('class' => 'control-label col-md-3')); !!}
                                <div class="col-md-9">
                                    <div class="radio-list">
                                        <label class="radio-inline">
                                            <div class="radio">
                                                <span>
                                                    {!! Form::radio("vet_gender",'Male') !!}
                                                </span>
                                                Male
                                            </div>

                                        </label>
                                        <label class="radio-inline">
                                            <div class="radio">
                                                <span>
                                                    {!! Form::radio("vet_gender",'Female') !!}
                                                </span>
                                                Female
                                            </div>
                                        </label>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('vet_phone', 'Phone', array('class' => 'control-label col-md-3')); !!}
                                <div class="col-md-9">
                                    {!! Form::text('vet_phone','',array('class' => 'form-control')) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('vet_mobile', 'Mobile', array('class' => 'control-label col-md-3')); !!}
                                <div class="col-md-9">
                                    {!! Form::text('vet_mobile','',array('class' => 'form-control')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('working_hours', 'Working hours', array('class' => 'control-label col-md-3')); !!}
                                <div class="col-md-9">
                                    {!! Form::text("working_hours",'',array('class' => 'form-control')) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('working_days', 'working days', array('class' => 'control-label col-md-3')); !!}
                                <div class="col-md-9">
                                    {!! Form::text("working_days",'',array('class' => 'form-control')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h3 class="form-section">Address</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('vet_address_1', 'Address 1', array('class' => 'control-label col-md-3')); !!}
                                <div class="col-md-9">
                                    {!! Form::text("vet_address_1",'',array('class' => 'form-control')) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('vet_address_2', 'Address 2', array('class' => 'control-label col-md-3')); !!}
                                <div class="col-md-9">
                                    {!! Form::text("vet_address_2",'',array('class' => 'form-control')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('vet_city', 'City', array('class' => 'control-label col-md-3')); !!}
                                <div class="col-md-9">
                                    {!! Form::select("vet_city",$cities,'',array('class' => 'form-control')) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('vet_country', 'Country', array('class' => 'control-label col-md-3')); !!}
                                <div class="col-md-9">
                                    {!! Form::select("vet_country",$countries,'',array('class' => 'form-control')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                     {!! Form::label('vet_clinic', 'Clinic', array('class' => 'control-label col-md-3')); !!}
                                <div class="col-md-9">
                                    {!! Form::text("vet_clinic",'',array('class' => 'form-control')) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('vet_postcode', 'Post Code', array('class' => 'control-label col-md-3')); !!}
                                <div class="col-md-9">
                                    {!! Form::text("vet_postcode",'',array('class' => 'form-control')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">Submit</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </div>
                    {!!Form::hidden('enabled','1')!!}
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
@endsection
