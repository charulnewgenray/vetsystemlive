@extends('admin.layouts.app')
@section('content')
    <div class="clearfix">
        <h3 class="page-title">
           Physician - {{$physician->vet_name}}
        </h3>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-12">
            <div role="tabpanel" class="tabbable tabbable-custom boxless tabbable-reversed">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs content-nav" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Personal Details</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">History</a></li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Treatment</a></li>
                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Claims</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="portlet light bg-inverse">
                            <div class="portlet-body form clearfix pets-info">
                                <!-- BEGIN FORM-->
                                <form class="form-horizontal" role="form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">First Name</label>
                                            <div class="col-md-8">
                                                <p class="form-control-static">
                                                    {{$physician->vet_firstname}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Last Name</label>
                                            <div class="col-md-8">
                                                <p class="form-control-static">
                                                    {{$physician->vet_lastname}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Email</label>
                                                <div class="col-md-8">
                                                    <p class="form-control-static">
                                                        {{$physician->vet_email}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">DOB</label>
                                                <div class="col-md-8">
                                                    <p class="form-control-static">
                                                        {{$physician->vet_dob}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Mobile</label>
                                                <div class="col-md-8">
                                                    <p class="form-control-static">
                                                        {{$physician->vet_mobile}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Gender</label>
                                                <div class="col-md-8">
                                                    <p class="form-control-static">
                                                        {{$physician->vet_gender}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Address 1</label>
                                                <div class="col-md-8">
                                                    <p class="form-control-static">
                                                        {{$physician->vet_address_1}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Address Line 2</label>
                                                <div class="col-md-8">
                                                    <p class="form-control-static">
                                                        {{$physician->vet_address_2}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">City</label>
                                                <div class="col-md-8">
                                                    <p class="form-control-static">
                                                        {{$physician->vet_city}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Country</label>
                                                <div class="col-md-8">
                                                    <p class="form-control-static">
                                                        {{$physician->vet_country}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Clinic</label>
                                                <div class="col-md-8">
                                                    <p class="form-control-static">
                                                        {{$physician->vet_clinic}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Phone</label>
                                                <div class="col-md-8">
                                                    <p class="form-control-static">
                                                        {{$physician->vet_phone}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">working days</label>
                                                <div class="col-md-8">
                                                    <p class="form-control-static">
                                                        {{$physician->working_days}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">working hours</label>
                                                <div class="col-md-8">
                                                    <p class="form-control-static">
                                                        {{$physician->working_hours}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>

                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <div class="portlet light bg-inverse">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-equalizer font-red-sunglo"></i>
                                    <span class="caption-subject font-red-sunglo bold uppercase">Treatment</span>
                                    <span class="caption-helper">Enter current treatments</span>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal">
                                    <div class="form-body">
                                        <div class="form-group last">
                                            <label class="col-md-3 control-label">Static Control</label>
                                            <div class="col-md-4">
                                                <p class="form-control-static">
                                                    email@example.com
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-4">
                                                <button type="submit" class="btn green">Submit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="messages">
                        <div class="portlet light bg-inverse">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-equalizer font-red-sunglo"></i>
                                    <span class="caption-subject font-red-sunglo bold uppercase">History</span>
                                    <span class="caption-helper">past events and treatments</span>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal">
                                    <div class="form-body">
                                        <div class="form-group last">
                                            <label class="col-md-3 control-label">Static Control</label>
                                            <div class="col-md-4">
                                                <p class="form-control-static">
                                                    email@example.com
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-4">
                                                <button type="submit" class="btn green">Submit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>

                    </div>
                    <div role="tabpanel" class="tab-pane" id="settings">
                        <div class="portlet light bg-inverse">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-equalizer font-red-sunglo"></i>
                                    <span class="caption-subject font-red-sunglo bold uppercase">History</span>
                                    <span class="caption-helper">past events and treatments</span>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal">
                                    <div class="form-body">
                                        <div class="form-group last">
                                            <label class="col-md-3 control-label">Static Control</label>
                                            <div class="col-md-4">
                                                <p class="form-control-static">
                                                    email@example.com
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-4">
                                                <button type="submit" class="btn green">Submit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
