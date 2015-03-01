@extends('veterinary.layouts.app')
@section('content')
    <?php $petrecord = $records['pet'];?>
    <div class="treatment-page clearfix">
        <div class="row">
            <h3 class="page-title pull-right"> Pets Treatment </h3>
            <div class="page-toolbar pull-left">
                {!!link_to_route('veterinary.pet.petlogout','logout','',['class' => 'btn red'])!!}
            </div>
        </div><!-- row -->
        <div class="row">
            <div class="page-bar clearfix">
                <span class="col-sm-2"> {{$petrecord->pet_name}} </span>
            <span class="col-sm-2">
                <span>{{$petrecord->age_year}} years </span><span>{{$petrecord->age_month > 0 ? $petrecord->age_month .'&nbsp;months' : ''}}</span>
            </span>
            </div>
        </div><!-- row -->
        <div class="row">
            <div role="tabpanel" class="tabbable tabbable-custom boxless tabbable-reversed">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs content-nav" role="tablist">
                    <li role="presentation" >
                        <a href="#petInfo" aria-controls="petInfo" role="tab" data-toggle="tab">Pet Info</a></li>
                    <li role="presentation" >
                        <a href="#history" aria-controls="history" role="tab" data-toggle="tab">History</a>
                    </li>
                    <li role="presentation" class="active">
                        <a href="#treatment" aria-controls="treatment" role="tab" data-toggle="tab">Treatment</a>
                    </li>
                    <li role="presentation">
                        <a href="#claims" aria-controls="claims" role="tab" data-toggle="tab">Claims</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="petInfo">
                        <div class="portlet light bg-inverse clearfix">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-equalizer font-red-sunglo"></i>
                                    <span class="caption-subject font-red-sunglo bold uppercase">Pet</span>
                                    <span class="caption-helper">and owner information</span>
                                </div>
                            </div>
                            <div class="portlet-body form clearfix pets-info">
                                <!-- BEGIN FORM-->

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
                            </div>
                        </div>

                    </div> <!-- Tab petInfo -->
                    <div role="tabpanel" class="tab-pane" id="history">
                        <div class="portlet light bg-inverse clearfix">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-equalizer font-red-sunglo"></i>
                                    <span class="caption-helper">Balance</span>
                                    <span class="caption-subject font-red-sunglo bold uppercase">1740NIS</span>

                                </div>
                                <p class="form-control-static pull-left bold">
                                    {{$petrecord->pet_name}}, {{$records['breed']}}
                                    , {{$petrecord->age_year}} yrs old, brown, active
                                    since {{ date("d F Y",strtotime($petrecord->created_at))}}
                                </p>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal">
                                    <input type="hidden" name="_token" value="{{$token}}">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                        <select class="form-control" id="event">
                                                            @foreach($events as $event)
                                                                <option value="{{$event->event_id}}">{{$event->name}}</option>
                                                            @endforeach
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                    <h4>Visit History </h4>
                                                    <div id="visits">
                                                        @foreach($visits as $visit)
                                                            <div class="row">
                                                                <label class="col-xs-4 control-label"  dir="ltr">{{date('d F Y',strtotime($visit->created_at))}}</label>
                                                                <div class="col-xs-8">
                                                                    <p class="form-control-static">
                                                                        {{$visit->visit_description}}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                        <div class="row">
                                                            <label class="col-xs-3 control-label">Exclusions :</label>
                                                            <div class="col-xs-9">
                                                                <p class="form-control-static">{{$petrecord->exclusion}}</p>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div> <!-- co-sm-6 -->
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <h4>Last Vaccinations </h4>
                                                    @foreach($lastVaccinations as $lastVaccination)
                                                        <label class="col-xs-3 control-label">{{$lastVaccination->vaccine_name}}</label>
                                                        <div class="col-xs-9">
                                                            <p class="form-control-static">
                                                                {{date('Y-m-d',strtotime($lastVaccination->created_at))}}
                                                            </p>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div><!-- co-sm-6 -->
                                        </div><!-- row -->
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                    </div> <!-- Tab History -->
                    <div role="tabpanel" class="tab-pane active" id="treatment">
                        <div class="portlet light bg-inverse clearfix">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-equalizer font-red-sunglo"></i>
                                    <span class="caption-subject font-red-sunglo bold uppercase">Treatment</span>
                                    <span class="caption-helper">past events and treatments</span>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                @if(Session::get('claim_id'))
                                    <p>
                                        <h4 class="text-center">Claim ID : {{Session::get('claim_id')}}</h4>
                                        <p class="text-center">You claim has been submitted. </p>
                                        <p class="text-center">You can check the status of you claims in claim section.</p>
                                    </p>
                                @else
                                <form id="treatment-form" action="{{route('veterinary.pet.submitClaim',$petrecord->pet_id)}}"  class="form-horizontal" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{$token}}">
                                    <input type="hidden" name="pet_id" value="{{$petrecord->pet_id}}">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3">Is Emergency</label>
                                            <div class="col-xs-9">
                                                <div class="radio-list">
                                                    <label class="radio-inline"><div class="radio"><span>
                                                                <input type="radio" name="is_emergency" value="0" checked>
                                                            </span>No</div>

                                                    </label>
                                                    <label class="radio-inline"><div class="radio">
                                                            <span>
                                                                <input type="radio" name="is_emergency" value="1">
                                                            </span>
                                                            Yes
                                                        </div>

                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <div class="input-event">
                                                <select class="form-control" id="events-treatment" name="event">
                                                    @foreach($events as $event)
                                                        <option value="{{$event->event_id}}">{{$event->name}}</option>
                                                    @endforeach
                                                </select>
                                                <input type="hidden" name="is-new-event" value="0"/>
                                                <input class="form-control" type="text" placeholder="new-event" value="" name="new-event" id="new-event-box" style="display: none;">
                                                <span class="new-event help-block-error">Please enter Event name</span>
                                            </div>
                                            <div class="button-event">
                                                <div id="new-event-button" class="btn green">New Event</div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" name="visit_description" placeholder="Visit Description" required></textarea>
                                            <span class="visit_description help-block-error">Please enter description</span>
                                        </div>
                                        <div class="form-group" id="treatment-form-group">
                                            <div class="portlet box green-meadow">
                                                <div class="portlet-title">
                                                    <div class="caption"><i class="fa fa-medkit fa-lg"></i>Add Treatments</div>
                                                    <div class="tools"><a href="javascript:;" class="collapse"></a></div>
                                                </div>
                                                <div class="portlet-body">
                                                    <table class="table table-striped table-bordered table-hover" id="treatment_list">
                                                        <thead>
                                                        <tr>
                                                            <th>Code</th>
                                                            <th>Treatment Name</th>
                                                            <th>Price</th>
                                                            <th>Status</th>
                                                            <th class="table-checkbox">
                                                                <input type="checkbox" class="group-checkable" data-set="#treatment_list .checkboxes"/>
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                            @foreach($treatments as $key=>$treatment)
                                                                @if($treatment->plan_id)
                                                                    {{--*/ $status = "covered" /*--}}
                                                                @else
                                                                    {{--*/ $status = "not covered" /*--}}
                                                                @endif
                                                                <tr class="odd gradeX" id="treatment_id">
                                                                    <td class="treatment_id">
                                                                        {{$key+1}}
                                                                    </td>
                                                                    <td class="treatment_name">
                                                                        {{$treatment->treatment_name}}
                                                                    </td>
                                                                    <td class="treatment_price">
                                                                        {{$treatment->treatment_price}}
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <span class="label label-sm @if($status == 'covered') label-success @else label-danger @endif">{{$status}} </span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="checker">
																				<span>
																				<input class="checkboxes treatment"
                                                                                       type="checkbox"
                                                                                       data-id="{{$treatment->treatment_id}}"
                                                                                       name="treatment[{{$treatment->treatment_id}}]"
                                                                                       value="{{$status}}">
																				</span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div id="add-treatments"></div>
                                                    <span class="treatment-error help-block-error">Please add a treatment</span>
                                                </div>
                                            </div>

                                            <h4 class="treatment-title">Covered Treatments</h4>
                                            <div class="treatment-covered"> NULL </div>

                                            <h4 class="treatment-title">Not Covered Treatments</h4>
                                            <div class="treatment-notcovered"> NULL </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-body">
                                            <div id="examination-form-group">
                                                <div class="form-group">
                                                    <h4>Examinations</h4>
                                                    <select class="form-control" id="search-select">
                                                        @foreach($examinations as $examination)
                                                            <option value="{{$examination->exam_id}}">{{$examination->exam_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="clearfix">
                                                    <div id="examination-box">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                               </form>
                                <div class="form-group">
                                    <!-- File Upload -->
                                    <h4>Add Attachments</h4>
                                    <form id="fileupload" action="/lib/php" method="POST" enctype="multipart/form-data">
                                        <div class="row fileupload-buttonbar">
                                            <div class="col-lg-7">
                                                            <span class="btn btn-success fileinput-button">
                                                                <i class="fa fa-plus"></i>
                                                                <span>Add files...</span>
                                                                <input type="file" name="files[]" multiple>
                                                            </span>
                                                <button type="submit" class="btn btn-primary start">
                                                    <i class="fa fa-upload"></i>
                                                    <span>Start upload</span>
                                                </button>
                                                <span class="fileupload-process"></span>
                                            </div>

                                            <div class="col-lg-5 fileupload-progress fade">
                                                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                                </div>
                                                <div class="progress-extended">&nbsp;</div>
                                            </div>
                                        </div>
                                        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
                                    </form>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="pull-left">
                                            <button id="treatment-submit-btn" type="submit" class="btn green">Submit For Claim</button>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div> <!-- Tab Treatment -->
                </div><!-- tab-content -->


            </div><!-- tabbable-custom -->
        </div><!--row -->


    </div><!-- Treatment Page-->


@endsection
@section('page-scripts')
    <script src="/js/vendor/jquery.ui.widget.js"></script>
    <script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
    <script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
    <script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="/js/vendor/jquery.iframe-transport.js"></script>
    <script src="/js/vendor/jquery.fileupload.js"></script>
    <script src="/js/vendor/jquery.fileupload-process.js"></script>
    <script src="/js/vendor/jquery.fileupload-image.js"></script>
    <script src="/js/vendor/jquery.fileupload-audio.js"></script>
    <script src="/js/vendor/jquery.fileupload-video.js"></script>
    <script src="/js/vendor/jquery.fileupload-validate.js"></script>
    <script src="/js/vendor/jquery.fileupload-ui.js"></script>
    <script src="/js/vendor/main.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            /* HISTORY TAB*/
            $('#event').change(function () {
                var url = '{{route('veterinary.event.show',$petrecord->pet_id)}}';
                var data = {
                    id: '{{$petrecord->pet_id}}',
                    event_id: $(this).val(),
                    _token: '{{$token}}'
                };
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
        /* Treatment Tab*/
            var click = 0;
            $('#new-event-button').click(function () {
                if (click == 0) {
                    $('#events-treatment').hide('slow');
                    $('#new-event-box').show('slow');
                    $('#new-event-button').text('Get Events');
                    $("#treatment-form :input[name='is-new-event']").val(1);
                    click = 1;
                } else {
                    $('#events-treatment').show('slow');
                    $('#new-event-box').hide('slow');
                    $('#new-event-button').text('New Event');
                    $("#treatment-form :input[name='is-new-event']").val(0);
                    click = 0;
                }
            });

          /*Examination */
            $('#search-select').searchableSelect();
            var examIds = '{{count($examinations)}}';
            $('#examination-form-group .searchable-select-item').on('click', function () {
                var exam_id = $(this).data('value');
                var exam_text = $(this).text();
                var examinationHtml = '' +
                        '<div class="examination-boxes-' + exam_id + '">' +
                        '   <div class="row">' +
                        '       <label class="col-sm-6 control-label">' + exam_text + '</label>' +
                        '        <div class="col-sm-6">' +
                        '       <input type="text" class="form-control examination" name="examination['+exam_id+']" value="" placeholder="' + exam_text + '" required/>' +
                        '           <span class="examination-remove btn btn-danger fa fa-trash-o"> </span>' +
                        '           <span class="help-block-error"> Please enter value </span>' +
                        '       </div>' +
                        '   </div>' +
                        '</div>';

             $('#examination-box').append(examinationHtml);

            });
            $('body').on('click','.examination-remove',function(){
                $(this).closest('.row').remove();
            });

            /* Treatment List*/

            $('#add-treatments').html('<a id="add-treatments" class="btn red""> <i class="fa fa-check icon-white"></i> Add </a>');
            $('#add-treatments').on('click',function(){
                var coveredhtml = '',notcoveredhtml = '';

                $('#treatment_list').find('input.treatment:checked').each(function (){
                    var treatment_id = $(this).data('id');
                    var status = $(this).val();
                    console.log($(this).val());
                    if(status == 'covered')
                        coveredhtml += '<div class="row"><div class="col-xs-8">'+$(this).closest('tr').find('td.treatment_name').text()+'</div><div class="col-xs-4">'+$(this).closest('tr').find('td.treatment_price').text()+'</div></div>';
                    else{
                        notcoveredhtml += '<div class="row"><div class="col-xs-8">'+$(this).closest('tr').find('td.treatment_name').text()+'</div><div class="col-xs-4">'+$(this).closest('tr').find('td.treatment_price').text()+'</div></div>';
                    }
                });
                $('.treatment-covered').html(coveredhtml);
                $('.treatment-notcovered').html(notcoveredhtml);

                $('#treatment-form-group .tools a').removeClass('collapse').addClass('expand');
                $('#treatment-form-group .portlet-body').hide();
            });
           /* Submit Treatment Form*/
            $('#treatment-submit-btn').on('click',function(event){
                $(".help-block-error").hide();
                var html = '';
                $('.fileattached-list').each(function(i,l){
                    i++;
                    var title = $(this).find('input[name="title"]'); title.prop('name','files['+i+'][title]');
                    var name = $(this).find('input[name="name"]'); name.prop('name','files['+i+'][name]');
                    $('#treatment-form').append(title);
                    $('#treatment-form').append(name);
                });
                var flag = validateForm();
                if(!flag)
                    event.preventDefault();
                else
                    $('#treatment-form').submit();
            });

            function validateForm(){
                var flag = false;
                if($('input[name="is-new-event"]').val() == 1){
                    if($('#new-event-box').val() == '' || $('#new-event-box').val() == null){
                        $('.new-event.help-block-error').show(function(){
                            scrollError($(this).parent().offset().top)
                        });
                        return false;
                    }
                }
                if($('textarea[name="visit_description"]').val() == 0){
                    $('.visit_description.help-block-error').show(function(){
                        scrollError($(this).parent().offset().top)
                    });
                    return false;
                }
                if ($("input.treatment:checked").length > 0)
                    flag = true;
                else{
                    $('.treatment-error').show(function(){
                        scrollError($(this).parent().offset().top)
                    });
                    return false
                }

                $('.examination').each(function(index, elem){
                    if($(elem).val() == ''){
                        $(elem).next().next().show(function(){
                            scrollError($(this).parent().offset().top)
                        });
                        return false;
                    }

                })
                return flag;
            }
            function scrollError(elem){
                $('html, body').animate({
                    scrollTop: elem - 50
                }, 500);
            }
        });
    </script>

    <!-- The template to display files available for upload -->
    <script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td class="title"><label> Title: <input name="filename[]" required></label><input type=hidden name="petid" value="{{$petrecord->pet_id}}"></td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="fa fa-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="fa fa-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
    <!-- The template to display files available for download -->
    <script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="title">{%=file.title%}</span>
            <div class="fileattached-list">
                <input type="hidden" name="title" value="{%=file.title%}">
                <input type="hidden" name="name" value="{%=file.name%}">
            </div>
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}&petid={%={{$petrecord->pet_id}}%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="fa fa-trash"></i>
                    <span>Delete</span>
                </button>
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="fa fa-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>

@endsection