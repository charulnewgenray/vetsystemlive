@extends('veterinary.layouts.app')
@section('content')
    <?php $petrecord = $records['pet'];
    ?>
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
                    <li role="presentation" class="active"><a href="#petInfo" aria-controls="petInfo" role="tab" data-toggle="tab">Pet Info</a></li>
                    <li role="presentation"><a href="#history" aria-controls="history" role="tab" data-toggle="tab">History</a></li>
                    <li role="presentation"><a href="#treatment" aria-controls="treatment" role="tab" data-toggle="tab">Treatment</a></li>
                    <li role="presentation"><a href="#claims" aria-controls="claims" role="tab" data-toggle="tab">Claims</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="petInfo">
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
                                                        {{$records['breed']}}
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
                    <div role="tabpanel" class="tab-pane" id="history">
                        <div class="portlet light bg-inverse">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-equalizer font-red-sunglo"></i>
                                    <span class="caption-subject font-red-sunglo bold uppercase">Event</span>
                                    <span class="caption-helper">History</span>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal">
                                    <input type="hidden" name="_token" value="{{$token}}">
                                    <div class="form-body">
                                        <div class="form-group last">
                                            <div class="col-xs-12">
                                                <p class="form-control-static">
                                                    {{$petrecord->pet_name}}, {{$records['breed']}}, {{$petrecord->age_year}} yrs old, brown, activated from {{$petrecord->created_at}}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="form-group first">
                                            <div class="col-xs-6">
                                                <select class="form-control" id="event">
                                                    @foreach($events as $event)
                                                        <option value="{{$event->event_id}}">{{$event->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group first">
                                            <div class="col-xs-6">
                                                <label class="col-xs-2 control-label">Balance</label>
                                                <div class="col-xs-10">
                                                    <p class="form-control-static">
                                                        1740NIS
                                                    </p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group first">
                                            <div class="col-xs-6">
                                                <div class="col-xs-12">
                                                    <h4>Visits:</h4>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div id="visits">
                                                        @foreach($visits as $visit)
                                                            <label class="col-xs-4 control-label">Visit {{date('Y-m-d',strtotime($visit->created_at))}}</label>
                                                            <div class="col-xs-8">
                                                                <p class="form-control-static">
                                                                    {{$visit->visit_description}}
                                                                </p>
                                                            </div>
                                                            <br/>
                                                        @endforeach
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-xs-6">
                                                <div class="col-xs-12">
                                                    <h4>Last Vaccinations:</h4>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div id="last_vaccinations">
                                                        @foreach($lastVaccinations as $lastVaccination)
                                                            <label class="col-xs-3 control-label">{{$lastVaccination->vaccine_name}}</label>
                                                            <div class="col-xs-9">
                                                                <p class="form-control-static">
                                                                    {{date('Y-m-d',strtotime($lastVaccination->created_at))}}
                                                                </p>
                                                            </div>
                                                            <br/>
                                                        @endforeach
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="form-group first">
                                            <div class="col-xs-12">
                                                <label class="col-xs-1 control-label">Exclusions:</label>
                                                <div class="col-xs-11">
                                                    <p class="form-control-static">
                                                        {{$petrecord->exclusion}}
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                       <!-- add more than one fields  -->
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
                    <div role="tabpanel" class="tab-pane" id="treatment">
                        <div class="portlet light bg-inverse">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-equalizer font-red-sunglo"></i>
                                    <span class="caption-subject font-red-sunglo bold uppercase">Treatment</span>
                                    <span class="caption-helper">past events and treatments</span>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="{{route('veterinary.treatment.post')}}" class="form-horizontal" method="post">
                                    <input type="hidden" name="_token" value="{{$token}}">
                                    <div class="form-body">
                                        <div class="form-group first">
                                            <div class="col-xs-6">
                                                <select class="form-control" id="event" name="event">
                                                    @foreach($events as $event)
                                                        <option value="{{$event->event_id}}">{{$event->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group first">
                                            <div class="col-xs-6">
                                                <div class="col-xs-12">
                                                    <h4>Visit Description</h4>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="3" name="visit_description"></textarea>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-xs-6">
                                                <div class="col-xs-12">
                                                   <h4>Examinations</h4>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div>
                                                        <!--<label class="col-xs-3 control-label">{{$lastVaccination->vaccine_name}}</label>-->
                                                        <div class="col-xs-9">
                                                            <div class="form-group">
                                                                <select class="form-control" id="search-select" name="examination-id">
                                                                    @foreach($examinations as $examination)
                                                                        <option value="{{$examination->exam_id}}">{{$examination->exam_name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="examination-value" value="" placeholder="examination-value"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="form-group first">
                                            <div class="col-xs-12">
                                                <h4>Covered Treatments:</h4>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-1 col-xs-10">
                                                @foreach($treatments as $treatment)
                                                    @if($treatment->plan_id == 1)
                                                        <div class="checkbox">
                                                            <label>
                                                                <input name="covered-treatment[]" type="checkbox" value="{{$treatment->treatment_id}}"> {{$treatment->treatment_name}}
                                                            </label>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="form-group first">
                                            <div class="col-xs-12">
                                                <h4>Not Covered Treatments:</h4>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-1 col-xs-10">
                                                @foreach($treatments as $treatment)
                                                    @if($treatment->plan_id == 0)
                                                        <div class="checkbox">
                                                            <label>
                                                                <input name="not-covered-treatment[]" type="checkbox" value="{{$treatment->treatment_id}}"> {{$treatment->treatment_name}}
                                                            </label>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-1 col-xs-10">
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="emergency" type="checkbox" value="1"> Is it an Emergency
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- add more than one fields  -->
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
                    <div role="tabpanel" class="tab-pane" id="claims">
                        <div class="portlet light bg-inverse">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-equalizer font-red-sunglo"></i>
                                    <span class="caption-subject font-red-sunglo bold uppercase">Claims</span>
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
    <!-- send ajax request for particular event -->
    <script>
        $("document").ready(function(){
            $('#event').change(function(){
               var url = '{{route('veterinary.event.show',$petrecord->pet_id)}}';
                var data = {id:'{{$petrecord->pet_id}}',event_id:$(this).val(),_token:'{{$token}}'}
                $('#event option:selected').each(function(){
                    $.ajax({
                        type:"POST",
                        url:url,
                        dataType:'json',
                        data:data,
                        success: function (data) {
                            $('#visits').html(data['visits']);
                            $('#last_vaccinations').html(data['last_vaccinations']);
                        }
                    });
                });
            });
            $(function(){$('#search-select').searchableSelect();});
        });
    </script>

    <!-- end -->
    <pre style="direction: ltr;">

        <!--{{ print_r($treatments) }}-->

    </pre>
@endsection
