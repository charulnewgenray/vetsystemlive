@extends('veterinary.layouts.app')
@section('content')
    <div class="clearfix">
        <h3 class="page-title pull-right">
            Pets Treatment
        </h3>
        <div class="page-toolbar pull-left">
            {!!link_to_route('veterinary.pet.petlogout','logout','',['class' => 'btn red'])!!}
        </div>
    </div>

    <div class="page-bar clearfix">

            <span class="col-sm-2">
                {{$petrecord->pet_name}}
            </span>
            <span class="col-sm-2">
                <span>{{$petrecord->age_year}} years </span><span>{{$petrecord->age_month > 0 ? $petrecord->age_month .'&nbsp;months' : ''}}</span>
            </span>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div role="tabpanel" class="tabbable tabbable-custom boxless tabbable-reversed">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs content-nav" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Pet Info</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">History</a></li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Treatment</a></li>
                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Claims</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="portlet light bg-inverse">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-equalizer font-red-sunglo"></i>
                                    <span class="caption-subject font-red-sunglo bold uppercase">Pet</span>
                                    <span class="caption-helper">and owner information</span>
                                </div>
                            </div>
                            <div class="portlet-body form clearfix pets-info">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal">
                                    <div class="col-sm-6">
                                        <div class="form-body">
                                            <div class="form-group first">
                                                <label class="col-md-4 control-label">Pet Name</label>
                                                <div class="col-xs-6">
                                                    <p class="form-control-static">
                                                        {{$petrecord->pet_name}}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-4 control-label">Magentic_code</label>
                                                <div class="col-xs-6">
                                                    <p class="form-control-static">
                                                        {{$petrecord->magentic_code}}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-4 control-label">Chip</label>
                                                <div class="col-xs-6">
                                                    <p class="form-control-static">
                                                        {{$petrecord->chip}}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-4 control-label">Pet Type</label>
                                                <div class="col-xs-6">
                                                    <p class="form-control-static">
                                                        {{$petrecord->pet_type}}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-4 control-label">Age</label>
                                                <div class="col-xs-6">
                                                    <p class="form-control-static">
                                                        <span>{{$petrecord->age_year}} years </span><span>{{$petrecord->age_month > 0 ? $petrecord->age_month .'&nbsp;months' : ''}}</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-4 control-label">Breed</label>
                                                <div class="col-xs-6">
                                                    <p class="form-control-static">
                                                        {{$petrecord->breed_id}}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-4 control-label">Chip</label>
                                                <div class="col-xs-6">
                                                    <p class="form-control-static">
                                                        {{$petrecord->chip}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-body">
                                            <div class="form-group first">
                                                <label class="col-xs-4 control-label">Customer Name</label>
                                                <div class="col-xs-6">
                                                    <p class="form-control-static">
                                                        {{$petrecord->first_name}} {{$petrecord->last_name}}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group first">
                                                <label class="col-xs-4 control-label">Address</label>
                                                <div class="col-xs-6">
                                                    <p class="form-control-static">
                                                        {{$petrecord->address}}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group first">
                                                <label class="col-xs-4 control-label">City</label>
                                                <div class="col-xs-6">
                                                    <p class="form-control-static">
                                                        {{$petrecord->city_code}}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group first">
                                                <label class="col-xs-4 control-label">Post Code</label>
                                                <div class="col-xs-6">
                                                    <p class="form-control-static">
                                                        {{$petrecord->post_code}}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group first">
                                                <label class="col-xs-4 control-label">Primary phone</label>
                                                <div class="col-xs-6">
                                                    <p class="form-control-static">
                                                        {{$petrecord->primary_phone}}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group first">
                                                <label class="col-xs-4 control-label">Email</label>
                                                <div class="col-xs-6">
                                                    <p class="form-control-static">
                                                        {{$petrecord->email}}
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
