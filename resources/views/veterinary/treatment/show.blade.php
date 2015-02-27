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
                <span>{{$petrecord->age_year}}
                    years </span><span>{{$petrecord->age_month > 0 ? $petrecord->age_month .'&nbsp;months' : ''}}</span>
            </span>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div role="tabpanel" class="tabbable tabbable-custom boxless tabbable-reversed">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs content-nav" role="tablist">
                    <li role="presentation" class="active"><a href="#petInfo" aria-controls="petInfo" role="tab"
                                                              data-toggle="tab">Pet Info</a></li>
                    <li role="presentation"><a href="#history" aria-controls="history" role="tab" data-toggle="tab">History</a>
                    </li>
                    <li role="presentation"><a href="#treatment" aria-controls="treatment" role="tab" data-toggle="tab">Treatment</a>
                    </li>
                    <li role="presentation"><a href="#claims" aria-controls="claims" role="tab"
                                               data-toggle="tab">Claims</a></li>
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
                                                        <span>{{$petrecord->age_year}}
                                                            years </span><span>{{$petrecord->age_month > 0 ? $petrecord->age_month .'&nbsp;months' : ''}}</span>
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
                                                <div class="col-xs-8">
                                                    <p class="form-control-static">
                                                        {{$petrecord->pet_name}}, {{$records['breed']}}
                                                        , {{$petrecord->age_year}} yrs old, brown, activated
                                                        from {{$petrecord->created_at}}
                                                    </p>
                                                </div>

                                                <div class="col-xs-4">
                                                    <div class="col-xs-12">
                                                        <h4>Last Vaccinations:</h4>
                                                    </div>
                                                    <div class="col-xs-12">
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
                                <form id="treatment-form" action="{{route('veterinary.treatment.post')}}"
                                      class="form-horizontal" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{$token}}">

                                    <div class="col-sm-8">
                                        <div class="form-body">
                                            <div class="form-group first">
                                                <div class="col-md-9">
                                                    <select class="form-control" id="events-treatment" name="event">
                                                        @foreach($events as $event)
                                                            <option value="{{$event->event_id}}">{{$event->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <input class="form-control" type="text" placeholder="new-event"
                                                           value="" name="new-event" id="new-event-box"
                                                           style="display: none;">
                                                    <input type="hidden" name="new-event-hidden" value="0"/>
                                                </div>
                                                <div class="col-md-3">
                                                    <div id="new-event-button" class="btn green">New Event</div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <h4>Visit Description</h4>
                                                </div>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" rows="3"
                                                              name="visit_description"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">File Label</label>

                                                <div class="col-md-2">
                                                    <input name="file-label" type="text" class="form-control">
                                                </div>
                                                <div class="col-md-5">
                                                    <input name="attached-treatment" type="file" class="filestyle"
                                                           data-buttonName="btn-primary">
                                                </div>
                                            </div>

                                            <div class="form-group" id="treatment-form-group">
                                                <div class="col-md-12">
                                                    <h4>Treatments</h4>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="portlet box red">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="fa fa-cogs"></i>Treatments List
                                                            </div>
                                                            <div class="tools">
                                                                <a class="collapse" href="javascript:;"
                                                                   data-original-title="" title="">
                                                                </a>
                                                                <a class="config" data-toggle="modal"
                                                                   href="#portlet-config" data-original-title=""
                                                                   title="">
                                                                </a>
                                                                <a class="reload" href="javascript:;"
                                                                   data-original-title="" title="">
                                                                </a>
                                                                <a class="remove" href="javascript:;"
                                                                   data-original-title="" title="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body" style="display: block;">
                                                            <div class="table-scrollable">
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Name</th>
																		<th>Price</th>
                                                                        <th>Status</th>
																		<th class="table-checkbox sorting_disabled" rowspan="1" colspan="1" style="width: 24px;" aria-label=" ">
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    @foreach($treatments as $key=>$treatment)
																		<tr>
																			<td>{{$key+1}}</td>
																			<td>{{$treatment->treatment_name}}</td>
																			<td>{{$treatment->treatment_price}}</td>
																			@if($treatment->plan_id)
																				<td><span class="label label-sm label-success">Covered </span>
																				</td>
																				<td><div class="checker">
																				<span>
																				<input class="checkboxes" type="checkbox" name="covered-treatment[]" value="1">
																				</span>
																				</div></td>
																			
																			@else
																				<td><span class="label label-sm label-danger">Not Covered </span>
																				</td>
																				<td><div class="checker">
																				<span>
																				<input class="checkboxes" name="not-covered-treatment[]" type="checkbox" value="1">
																				</span>
																				</div></td>
																			@endif
																			
																		</tr>
																	@endforeach
																	
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
											
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-body">
                                            <div class="form-group first" id="examination-form-group">
                                                <div class="col-md-12">
                                                    <h4>Examinations</h4>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <select class="form-control" id="search-select"
                                                                name="examination-id">
                                                            @foreach($examinations as $examination)
                                                                <option value="{{$examination->exam_id}}">{{$examination->exam_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div id="examination-box">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<div class="col-sm-12">
										<div class="form-actions">
											<div class="row">
												<div class="col-md-offset-0 col-md-4">
													<button type="submit" class="btn green">Submit</button>
													<button type="button" class="btn default">Cancel</button>
												</div>
											</div>
										</div>
									</div>
									

                            </form>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- send ajax request for particular event -->
                        <script>
                            $("document").ready(function () {
                                $('#event').change(function () {
                                    var url = '{{route('veterinary.event.show',$petrecord->pet_id)}}';
                                    var data = {
                                        id: '{{$petrecord->pet_id}}',
                                        event_id: $(this).val(),
                                        _token: '{{$token}}'
                                    }
                                    $('#event option:selected').each(function () {
                                        $.ajax({
                                            type: "POST",
                                            url: url,
                                            dataType: 'json',
                                            data: data,
                                            success: function (data) {
                                                $('#visits').html(data['visits']);
                                            }
                                        });
                                    });
                                });
                                var click = 0;
                                $('#new-event-button').click(function () {
                                    if (click == 0) {
                                        $('#events-treatment').hide('slow');
                                        $('#new-event-box').show('slow');
                                        $('#new-event-button').text('Get Events');
                                        $("#treatment-form :input[name='new-event-hidden']").val(1);
                                        click = 1;
                                    } else {
                                        $('#events-treatment').show('slow');
                                        $('#new-event-box').hide('slow');
                                        $('#new-event-button').text('New Event');
                                        $("#treatment-form :input[name='new-event-hidden']").val(0);
                                        click = 0;
                                    }
                                });
                                $('#search-select').searchableSelect();
                                var examIds = '{{count($examinations)}}';
                                $('#examination-form-group .searchable-select-item').on('click',function () {
                                    var exam_id = $(this).attr('data-value');
                                    var exam_text = $(this).text();
                                    var examinationHtml = '<div class="examination-boxes-' + exam_id + '"><input type=hidden class="input" name="exam_id[]" value="' + exam_id + '" /><label class="col-md-4 control-label">' + exam_text + '</label><input type="text" class="col-md-6 form-control" name="examination-value[]" value="" placeholder="examination-value-' + exam_id + '"/><div class="col-md-2 examination-box-remove"><div class="btn btn-danger fa fa-trash-o"></div></div></div>';
									
									var findClass = 'examination-boxes-'+ exam_id;
									var myVar = $("#examination-box").find('.examination-boxes-'+ exam_id).attr('class');
									if(myVar == findClass){
										
									}else{
										$('#examination-box').append(examinationHtml);
									}
									

                                });
                                $('.examination-box-remove').on('click', function () {
                                    $(this).remove();
								});
								$('.collapse').click(function(){
									$('.portlet .portlet-body').toggle();
								});
							});
                        </script>

                        <!-- end -->
    <pre style="direction: ltr;">

        <!--{{ print_r($treatments) }}-->

    </pre>
@endsection
