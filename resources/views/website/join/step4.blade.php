@extends('website.layouts.app')

@section('content')
    @if(isset($status)))
        {{$status['message']}}
    @endif
    <section>
        <!-- Register -->
        <div class="container">
            <div class="register">
                <div class="join-heading"><h1 class="text-center">הצטרפות</h1></div>
                <div class="join-wapper">
                    <div class="join-steps clearfix">
                        <div class="join-step-icon">
                            {!! HTML::image('/website/images/step4.png', '', array('class' => 'img-responsive')) !!}
                            <div class="join-step-icon-text clearfix">
                                <span class="col-xs-3">מידע על בעל החיים</span>
                                <span class="col-xs-3">מסלולים ומחירים</span>
                                <span class="col-xs-3">פרטי תשלום</span>
                                <span class="col-xs-3">שאלון</span>
                            </div>
                        </div>
                    </div>	<!-- join-steps -->
                    <div class="join-steps-content">
                        <p class="text-center text30">
                            אנו מעונינים לשאול אותך עוד מספר שאלות על

                            <span style="font-weight:bold;">{{$session['step1']['pet_name']}}</span>

                        </p>
                        <div class="notification clearfix">
                            <div class="col-xs-1 text-center"><i class="fa fa-paw"></i></div>
                            <div class="col-xs-10 notification-content">לתשומת ליבך – התשובות לשאלות הבאות לא ישפיעו בשום אופן על מחיר השירות</div>
                            <div class="col-xs-1 text-center"><i class="fa fa-paw"></i></div>
                        </div>
                        {!! Form::open(array('route' => array('join.step5'),'method' => 'POST','class'=>'form-horizontal')) !!}
                            <input type="hidden" name="user_id" value="{{$session['user_id']}}">
                            <input type="hidden" name="client_id" value="{{$session['client_id']}}">
                            <input type="hidden" name="pet_id" value="{{$session['pet_id']}}">

                            <div class="custom-alert">
                                @foreach($healthDeclarations as $healthDeclaration)
                                <p>
                                    {{$healthDeclaration->label}}
                                </p>
                                @endforeach
                                <div class="input">
                                    <input type="checkbox" name="agreed" required>
                                    <label>מאשר</label>
                                </div>
                            </div>

                            <div class="registration-form" style="display: none;">
                                <div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-md fa-fw"></i></span>
                                            <input name="pet_clinicvisited" type="text" class="form-control" required placeholder="שמות המרפאות/רופאים שאצלם ביקרתי בשנתיים האחרונות" >
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="fa fa-barcode fa-fw"></i></span>

                                            <input name="pet_chipnumber" type="text" class="form-control" required placeholder=" מספר שבב" >

                                        </div>

                                    </div>

                                    <br/>
                                    <p class="text-blue text-bold">מין הבעל חיים</p>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-male fa-fw"></i></span>
                                        <span class="input-group-addon">
                                            <input type="radio" name="pet_gender" value="male" required>
                                        </span>
                                        <span class="input-group-addon">
                                            <i class="fa fa-female fa-fw"></i>
                                        </span>
                                        <span class="input-group-addon">
                                            <input type="radio" name="pet_gender" value="female" required>
                                        </span>
                                    </div><!-- /input-group -->

                                    <p style="text-align: right; font-weight: bold;">האם חיית המחמד מעוקרת / מסורס?</p>
                                    <div class="input-group">
                                        <span class="input-group-addon"> {{ "כן" }} </span>
                                        <span class="input-group-addon">
                                            <input type="radio" name="castrated" value="yes" required>
                                        </span>
                                        <span class="input-group-addon"> {{ "לא" }}</span>
                                            <span class="input-group-addon">
                                                <input type="radio" name="castrated" value="no" required>
                                            </span>
                                    </div>
                                    <div>
                                        <div class="error message">
                                            שדה חובה
                                        </div>
                                    </div>

                                    <h3 style="text-align: right;">
                                        אם לחיית המחמד שלך יש או היה בעבר אחת מהמחלות הבאות:
                                    </h3>

                                    <div class="q_table">
                                        <div class="col-xs-10 border pad_cell highlight">
                                            שאלה
                                        </div>
                                        <div  class="col-xs-1 border pad_cell highlight">
                                            כן
                                        </div>
                                        <div class="col-xs-1 border pad_cell highlight">
                                            לא
                                        </div>

                                    </div>
                                    <div class="q_table">
                                        <div>
                                              @foreach($healthQuestions as $healthQuestion)

                                                <div class="col-xs-10 border pad_cell">
                                                    {{ $healthQuestion->label }}
                                                </div>
                                                <div  class="col-xs-1 border pad_cell">
                                                    <input type="radio" value="yes" name="health_quest[{{$healthQuestion->id}}]" required />
                                                </div>
                                                <div class="col-xs-1 border pad_cell">
                                                    <input type="radio" value="no" name="health_quest[{{$healthQuestion->id}}]" required/>
                                                </div>

                                                <div class="col-xs-12">
                                                    <div class="error message">
                                                        שדה חובה
                                                    </div>
                                                </div>

                                            @endforeach
                                        </div>
                                    </div>

                                    <div ng-if="joinform.pets.type == 'cat'">

                                        <div>
                                            <div class="col-xs-10 border pad_cell highlight">
                                                שאלה
                                            </div>
                                            <div  class="col-xs-1 border pad_cell highlight">
                                                כן
                                            </div>
                                            <div class="col-xs-1 border pad_cell highlight">
                                                לא
                                            </div>

                                        </div>
                                        <div class="q_table">
                                            <div>
                                                @if($catQuestions != null)
                                                {!! Form::open(array('route' => array('join.step5'),'method' => 'POST','class'=>'form-horizontal')) !!}
                                                    @foreach($catQuestions as $catQuestion)
                                                    <div class="col-xs-10 border pad_cell">
                                                        {{ $catQuestion->label }}
                                                    </div>
                                                    <div  class="col-xs-1 border pad_cell">
                                                        <input type="radio" value="yes" name="cat_quest[{{$catQuestion->id}}]" required/>
                                                    </div>
                                                    <div class="col-xs-1 border pad_cell">
                                                        <input type="radio" value="no" name="cat_quest[{{$catQuestion->id}}]" required/>
                                                    </div>

                                                    <div class="col-xs-10">
                                                        <div class="error message">
                                                            שדה חובה
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    {!! Form::close()!!}
                                                 @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <p class="text-bold" style="">האם בשנה האחרונה ביקרת עם חיית המחמד שלך אצל וטרינר למעט לצורך ביצוע חיסונים , תילוע וניתוח עיקור/סירוס?</p>
                                    </div>

                                    <div class="input-group">
                                              <span class="input-group-addon"> {{ "כן" }} </span>
                                              <span class="input-group-addon">
                                                <input type="radio" name="visited_vet" value="yes" required>
                                              </span>
                                              <span class="input-group-addon"> {{ "לא" }} </span>
                                              <span class="input-group-addon">
                                                <input type="radio" name="visited_vet" value="no" required>
                                              </span>
                                    </div><!-- /input-group -->


                                    <div class="visited_vet_ans" style="display: none;">
                                        <br/>
                                        <p style="text-align: right; font-weight: bold;">?מה הייתה מטרת הביקור</p>
                                        @foreach($illnessQuestions as $illnessQuestion)
                                            <div class="input-group">
                                                <input dir="rtl" type="text" class="form-control illness_quest" name="illness_quest[{{$illnessQuestion->id}}]" required disabled placeholder="{{$illnessQuestion->label}}" />
                                                    <span class="input-group-addon">
                                                        <input type="checkbox" class="illnesscheckbox" />
                                                    </span>
                                            </div>
                                        @endforeach
                                    </div>
                                    <p style=" margin-top:10px; font-weight: bold; text-align: right; text-decoration: underline;">סמן וי בשאלות הבאות רק במידה והתשובה היא כן</p>
                                    @foreach($generalQuestions as $generalQuestion)
                                    <div class="input-group">
                                            <input dir="rtl" type="text" class="form-control general_quest" name="general_quest[{{$generalQuestion->id}}]" required disabled placeholder="{{$generalQuestion->label}}">
                                            <span class="input-group-addon">
                                                <input type="checkbox" class="generalcheckbox" >
                                            </span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <br>
                            <div class="step1-submit text-center">
                                <br>
                                <button class="button-style2" ng-click="saveJoin(join4.$valid,joinform,4)">המשך</button>
                            </div>
                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('page-scripts')
<script>
    $(document).ready(function(){
        $('.illnesscheckbox').on('change',function(){
            if($(this).prop('checked') == true){
                $(this).parents('.input-group').find('.illness_quest').prop('disabled',false);
            }
            else
            {
                $(this).parents('.input-group').find('.illness_quest').prop('disabled',true);
            }
        });

        $('.generalcheckbox').on('change',function(){
            if($(this).prop('checked') == true){
                $(this).parents('.input-group').find('.general_quest').prop('disabled',false);
            }
            else
            {
                $(this).parents('.input-group').find('.general_quest').prop('disabled',true);
            }
        });
        if($('input[name="visited_vet"]').prop('checked') == true){
            $('.visited_vet_ans').show();
        }
        $('input[name="visited_vet"]').on('change',function(){
            $('.visited_vet_ans').toggle();
        });
        if($('input[name="agreed"]').prop('checked') == true){
            $('.registration-form').show();
        }

        $('input[name="agreed"]').on('change',function(){
            $('.registration-form').toggle();
        });

    });
</script>
@endsection