@extends('website.layouts.app')

@section('content')
    <section>

            <div class="join-wapper">
                <div class="join-steps-content">
                    <h1
                            class="text-center">אנא מלא פרטים לקבלת הצעת מחיר</h1>
                    <div class="registration-form">
                        {!! Form::open(array('route' => array('join.step2'),'method' => 'POST','class'=>'form-horizontal')) !!}
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-paw"></i></div>
                                    <input class="form-control" required name="pet_name" type="text" value="@if(isset($session['pet_name'])){{$session['pet_name']}}@endif" placeholder="שם בעל החיים"   >
                                </div>
                                    <div class="error">{{ $errors->first('pet_name') }}</div>
                            </div>

                            <div class="form-group clearfix">
                                <div class="col-xs-6">
                                    {!! HTML::image('/website/images/register-img-cat.png', 'register cat', array('class' => 'img-responsive')) !!}
                                </div>
                                <div class="col-xs-6">
                                    {!! HTML::image('/website/images/register-img-dog.png', 'register dog', array('class' => 'img-responsive')) !!}
                                </div>
                            </div>
                            <div class="form-group inline-group text-center clearfix field-grey">
                                <div class="col-xs-3 no-gutters form-control">
                                    <label>חתול</label>
                                </div>
                                <div class="col-xs-3 no-gutters form-control">
                                    <input type="radio" value="cat" name="pet_type" required @if(isset($session['pet_type'])) @if($session['pet_type'] == 'cat') checked @endif @endif>
                                </div>
                                <div class="col-xs-3 no-gutters form-control">
                                    <label>כלב</label>
                                </div>
                                <div class="col-xs-3 no-gutters form-control">
                                    <input type="radio"  value="dog" name="pet_type" required @if(isset($session['pet_type'])) @if($session['pet_type'] == 'dog') checked @endif @endif>
                                </div>
                            </div>
                            <div class="error">{{ $errors->first('pet_type') }}</div>
                            @if(!isset($session['pet_type']))
                                    <div class="form-group pettype" id="pettype-select">
                                        <div class="selectContainer">
                                            <div>
                                                <select disabled class="form-control" >
                                                    <option value="">בחר סוג חיית מחמד כדי לבחור גזע</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                            @endif

                            <div class="form-group pettype" id="pettype-dog" @if(isset($session['pet_type'])) @if($session['pet_type'] == 'dog') style="display: block" @endif @endif>
                                <div class="selectContainer">
                                    <div class="">
                                        <select class="form-control pettype-select" name="dog_breed"  @if(isset($session['pet_type'])) @if($session['pet_type'] == 'dog') required @endif @endif>
                                            <option value="">Please Select</option>
                                            @foreach($dogbreeds as $key => $value)
                                                <option value="{{$key}}" @if(isset($session['dog_breed'])) @if($session['dog_breed'] == $key) selected @endif @endif>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pettype" id="pettype-cat" @if(isset($session['pet_type'])) @if($session['pet_type'] == 'cat') style="display: block" @endif @endif >
                                <div class="selectContainer">
                                    <div >
                                        <select class="form-control pettype-select" name="cat_breed" @if(isset($session['pet_type'])) @if($session['pet_type'] == 'cat') required @endif @endif>
                                            <option value="">Please Select</option>
                                            @foreach($catbreeds as $key => $value)
                                                <option value="{{$key}}" @if(isset($session['cat_breed'])) @if($session['cat_breed'] == $key) selected @endif @endif>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="animals clearfix " style="display: none">
                                <div class="col-xs-3 no-gutters">
                                    {!! HTML::image('/website/images/dog4.jpg', 'huge dog', array('class' => 'img-responsive')) !!}
                                </div>
                                <div class="col-xs-3 no-gutters">
                                    {!! HTML::image('/website/images/dog3.jpg', 'great dog', array('class' => 'img-responsive')) !!}
                                </div>
                                <div class="col-xs-3 no-gutters">
                                    {!! HTML::image('/website/images/dog2.jpg', 'medium dog', array('class' => 'img-responsive')) !!}
                                </div>
                                <div class="col-xs-3 no-gutters">
                                    {!! HTML::image('/website/images/dog1.jpg', 'small dog', array('class' => 'img-responsive')) !!}
                                </div>

                            </div>
                            <div class="form-group inline-group text-center clearfix field-grey animals-size" style="display: none">
                                <div class="col-xs-3 no-gutters form-control">
                                    <input type="radio" name="pet_size"  value="4">
                                    <label>ענק</label>
                                </div>
                                <div class="col-xs-3 no-gutters form-control">
                                    <input type="radio" name="pet_size"  value="3">
                                    <label>גדול</label>
                                </div>
                                <div class="col-xs-3 no-gutters form-control">
                                    <input type="radio" name="pet_size"  value="2">
                                    <label>בינוני</label>
                                </div>
                                <div class="col-xs-3 no-gutters form-control">
                                    <input type="radio" name="pet_size" value="1">
                                    <label>קטן</label>
                                </div>
                            </div>


                            <div class="form-group clearfix">
                                <div class="col-lg-6 col-md-6 col-xs-6 no-gutters">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-tachometer"></i></div>
                                        <input type="number" required max="7" min="0" name="pet_age_year" value="@if(isset($session['pet_age_year'])){{$session['pet_age_year']}}@endif" class="form-control no-left-radius" placeholder="גיל בשנים" >
                                    </div>
                                    <div class="error">{{ $errors->first('pet_age_year') }}</div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-6 no-gutters">
                                    <div class="input-group">
                                        <div class="input-group-addon no-right-radius"><i class="fa fa-tachometer"></i></div>
                                        <input type="number" required max="11" min="0" name="pet_age_month" value="@if(isset($session['pet_age_month'])){{$session['pet_age_month']}}@endif" class="form-control" placeholder="חודשים">
                                    </div>
                                    <div class="error">{{ $errors->first('pet_age_month') }}</div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-male"></i></div>
                                    <input type="text" required name="client_firstname" value="@if(isset($session['client_firstname'])){{$session['client_firstname']}}@endif" class="form-control" placeholder="שם" >
                                </div>
                                <div class="error">{{ $errors->first('client_firstname') }}</div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-users"></i></div>
                                    <input type="text" required value="@if(isset($session['client_lastname'])){{$session['client_lastname']}}@endif" class="form-control" name="client_lastname" placeholder="שם משפחה" >
                                </div>
                                <div class="error">{{ $errors->first('client_lastname') }}</div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    נא להזין מספר טלפון או כתובת אימייל: </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-at"></i></div>
                                    <input type="email" id=email required name="client_email" value="@if(isset($session['client_email'])){{$session['client_email']}}@endif" class="form-control" placeholder="דואר אלקטרוני" >
                                </div>
                                <div class="error">{{ $errors->first('client_email') }}</div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input type="text" name="client_phone" value="@if(isset($session['client_phone'])){{$session['client_phone']}}@endif" class="form-control" placeholder="טלפון"  >
                                </div>
                                <div class="error">{{ $errors->first('client_phone') }}</div>
                            </div>

                            <div class="step1-submit text-center">
                                <input type="submit" class="button-style2" value="להמשיך "></button>
                            </div>
                          {!! Form::hidden('client_address','')!!}
                          {!! Form::hidden('client_city','')!!}
                          {!! Form::hidden('client_mobile','')!!}
                          {!! Form::hidden('client_zip','')!!}
                        {!! Form::close()!!}
                    </div>
                </div>
            </div>

    </section>


    <div id="balloon2" class="balloonstyle"
         style="color:white;background-color:#25A0D6;font-family:arial;font-size:16px;font-weight:bold;width:400px;"
            >
        וטרינר מומחה שהוסמך בארץ או בחו"ל, או וטרינר שסיים את התמחותו במוסד מוכר ועומד לפני מבחני הסמכה
    </div>
@endsection

@section('page-scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('input[name="pet_type"]').on('change',function(){
                var pettype = $(this).val();
                $('#pettype-select').hide();
                $('.pettype-select').prop('required',false);
                if(pettype == 'dog'){
                    $('#pettype-dog').show().find('select').show().prop('required','required');
                    $('#pettype-cat').hide();
                }
                else if(pettype == 'cat'){
                    $('#pettype-cat').show().find('select').show().prop('required','required');
                    $('#pettype-dog').hide();
                }
            });
            $('#pettype-dog .pettype-select').on('change',function(){
                var dogbreed = $(this).val();
                var mixeddogid = {{$mixeddog_id}};
                if(dogbreed == mixeddogid){
                    $('.animals,.animals-size').show();
                    $('input[name="pet_size"]').prop('required','required');
                }
                else {
                    $('.animals,.animals-size').hide();
                    $('input[name="pet_size"]').prop('required',false);
                }
            });
        });
    </script>
@endsection
