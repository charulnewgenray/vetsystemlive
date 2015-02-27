@extends('website.layouts.app')

@section('content')

    <section>
        <!-- Register -->
        <div class="container">
            <div class="register">
                <div class="join-heading"><h1 class="text-center">הצטרפות</h1></div>
                <div class="join-wapper">
                    <div class="join-steps clearfix">
                        <div class="join-step-icon">
                            {!! HTML::image('/website/images/step3.png', 'Step 3', array('class' => 'img-responsive')) !!}
                            <div class="join-step-icon-text clearfix">
                                <span class="col-xs-3">מידע על בעל החיים</span>
                                <span class="col-xs-3">מסלולים ומחירים</span>
                                <span class="col-xs-3">פרטי תשלום</span>
                                <span class="col-xs-3">שאלון</span>
                            </div>
                        </div>
                    </div>	<!-- join-steps -->
                    <div class="join-steps-content">
                        <h1 class="text-center">אנא בחר מסלול הצתרפות</h1>
                        <div class="registration-form">
                            {!! Form::open(array('route' => array('join.step4'),'method' => 'POST','class'=>'form-horizontal')) !!}
                                <div class="control-group">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-male"></i></div>
                                            <input class="form-control" type="text" name="client_firstname" value="@if(isset($session['step1']['client_firstname'])){{$session['step1']['client_firstname']}}@endif" required  placeholder=" שם פרטי" >
                                        </div>
                                        <div class="error">{{ $errors->first('client_firstname') }}</div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-users"></i></div>
                                            <input class="form-control" type="text" name="client_lastname" value="@if(isset($session['step1']['client_lastname'])){{$session['step1']['client_lastname']}}@endif" placeholder="שם משפחה"  required >
                                        </div>
                                        <div class="error">{{ $errors->first('client_lastname') }}</div>
                                    </div>

                                    <div class="form-group inline-group text-center clearfix field-grey">
                                        <div class="col-xs-3 no-gutters form-control">
                                            <label>זכר</label>
                                        </div>
                                        <div class="col-xs-3 no-gutters form-control">
                                            <input type="radio" value="Male" name="client_gender" required @if(isset($session['step3']['client_gender']) && isset($session['step3']['client_gender']) == 'male')) checked @endif>
                                        </div>
                                        <div class="col-xs-3 no-gutters form-control">
                                            <label>נקבה</label>
                                        </div>
                                        <div class="col-xs-3 no-gutters form-control">
                                            <input type="radio"  value="Female" name="client_gender" required @if(isset($session['step3']['client_gender']) && isset($session['step3']['client_gender']) == 'Female')) checked @endif>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input id="cities" name="client_city" value="@if(isset($session['step3']['client_city'])){{$session['step3']['client_city']}}@endif" type="text" placeholder="עיר"  class="form-control form-control-small ui-autocomplete-input">
                                    </div>
                                    <div class="error">{{ $errors->first('client_city') }}</div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                            <input type="text" name="client_address"  value="@if(isset($session['step3']['client_address'])){{$session['step3']['client_address']}}@endif" class="form-control" placeholder="כתובת, דוגמא : אבן גבירול 53, קומה 2 דירה 3" required>
                                        </div>
                                        <div class="error message">{{ $errors->first('client_address') }}</div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
                                            <input type="number" name="client_zip" value="@if(isset($session['step3']['client_zip'])){{$session['step3']['client_zip']}}@endif" class="form-control" placeholder="מיקוד" min="0" >
                                        </div>
                                        <div class="error message">{{ $errors->first('client_zip') }}</div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-mobile-phone"></i></div>
                                            <input type="text" name="client_mobile"  value="@if(isset($session['step3']['client_mobile'])){{$session['step3']['client_mobile']}}@endif" class="form-control" placeholder="סלולרי , לדוגמא : 0523111488" required  >
                                        </div>

                                        <div class="error message">{{ $errors->first('client_mobile') }}</div>

                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-at"></i></div>
                                            <input type="email" name="email" value="@if(isset($session['step3']['client_email'])){{$session['step3']['client_email']}} @else {{$session['step1']['client_email']}} @endif" class="form-control" placeholder="דוא״ל , לדוגמא : info@marpet.co.il" required>
                                        </div>
                                        <div class="error">{{ $errors->first('email')}}</div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                            <input class="form-control" type="password" name="client_password"  placeholder="סיסמא" required>
                                        </div>
                                        <div class="error">{{ $errors->first('client_password')}}</div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                            <input class="form-control" type="text" name="client_phone" value="@if(isset($session['step1']['client_phone'])){{$session['step1']['client_phone']}}@endif" placeholder="טלפון , לדוגמא : 03-8381392" required ng-minlength="7" ng-maxlength="12">
                                        </div>
                                        <div class="error">{{ $errors->first('client_phone')}}</div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-barcode"></i></div>
                                            <input class="form-control" type="text"  name="redirectCode"  placeholder="קוד מפנה">
                                        </div>
                                    </div>

                                    <p class="text-blue text18">תשלום בכרטיס</p>
                                    <div class="form-group inline-group text-center clearfix field-grey">
                                        <div class="col-xs-2 no-gutters form-control">
                                            <i class="fa fa-cc-mastercard"></i>
                                        </div>
                                        <div class="col-xs-2 no-gutters form-control">
                                            <input type="radio" name="client_cardtype" value="mastercard">
                                        </div>
                                        <div class="col-xs-2 no-gutters form-control">
                                            <i class="fa fa-cc-amex"></i>
                                        </div>
                                        <div class="col-xs-2 no-gutters form-control">
                                            <input type="radio" name="client_cardtype" value="amex">
                                        </div>
                                        <div class="col-xs-2 no-gutters form-control">
                                            <i class="fa fa-cc-visa"></i>
                                        </div>
                                        <div class="col-xs-2 no-gutters form-control">
                                            <input type="radio" name="client_cardtype" value="visa">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                            <input type="number" name="client_creditcard" class="form-control"  required placeholder=" מספר כרטיס" >
                                        </div>
                                        <div class="error message"></div>
                                    </div>


                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                            <input class="form-control" type="text" name="client_cvv" placeholder=" ספרות בגב הכרטיס , CVV"  required>
                                        </div>

                                        <div class="error"></div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input class="form-control" type="text" name="client_exp" placeholder="תוקף כרטיס , לדוגמא 14/18" required>
                                        </div>

                                        <div class="error"></div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-file-o"></i></div>
                                            <input class="form-control" type="text" name="client_ssn" value="@if(isset($session['step3']['client_ssn'])){{$session['step3']['client_ssn']}}@endif" placeholder="מספר זהות , לדוגמא : 20838108" required>
                                        </div>
                                        <div class="error message"></div>
                                    </div>

                                    <div class="step3-submit text-center">
                                        <button type="submit" class="button-style2">המשך</button>
                                    </div>
                                </div>
                            {!! Form::close()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('page-scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            var cities = [];
            @foreach($cities as $key => $value)
                //cities.push({label: "{{$value}}", value: "{{ $key }}"});
                  cities.push("{{$value}}");
            @endforeach
            $( "#cities" ).autocomplete({
                source: cities
            });
        });
    </script>
@endsection