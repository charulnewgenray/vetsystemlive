@extends('website.layouts.app')

@section('content')
    <section >
        <!-- Register -->
        <div class="container">
            <div class="register">
                <div class="join-heading"><h1 class="text-center">הצטרפות</h1></div>
                <div class="join-wapper">
                    <div class="join-steps clearfix">
                        <div class="join-step-icon">
                            {!! HTML::image('/website/images/step2.png', '', array('class' => 'img-responsive')) !!}
                            <div class="join-step-icon-text clearfix">
                                <span class="col-xs-3">מידע על בעל החיים</span>
                                <span class="col-xs-3">מסלולים ומחירים</span>
                                <span class="col-xs-3">פרטי תשלום</span>
                                <span class="col-xs-3">שאלון</span>
                            </div>
                        </div>
                    </div>	<!-- join-steps -->
                    <div id="join-step2-content" class="join-steps-content">
                        <h1 class="text-center">אנא בחר מסלול הצתרפות</h1>
                        <div class="registration-form">

                            {!! Form::open(array('route' => array('join.step3'),'method' => 'POST','class'=>'form-horizontal')) !!}
                            <div class="control-group">
                                <div class="step2-top">
                                    <div class="step2-table-wrapper">
                                        <div class="step2-table step2-table1 clearfix">
                                            <ul class="list-inline table1 clearfix">
                                                <li class="first" >
                                                    <div class="table-heading"></div>
                                                    <div class="table-row"></div>
                                                    <div class="table-row"></div>
                                                    <div class="table-row"></div>
                                                    <div class="table-row"></div>
                                                    <div class="table-row">	</div>
                                                    <div class="table-row"></div>
                                                    <div class="table-row"></div>
                                                </li>
                                                <li class="second">
                                                    <div class="table-heading"></div>
                                                    <div class="table-row"></div>
                                                    <div class="table-row"></div>
                                                    <div class="table-row"></div>
                                                    <div class="table-row"></div>
                                                    <div class="table-row"></div>
                                                    <div class="table-row"></div>
                                                    <div class="table-row"></div>
                                                </li>
                                                <li class="third">
                                                    <div class="table-heading"></div>
                                                    <div class="table-row"></div>
                                                    <div class="table-row"></div>
                                                    <div class="table-row"></div>
                                                    <div class="table-row"></div>
                                                    <div class="table-row"></div>
                                                    <div class="table-row"></div>
                                                    <div class="table-row"></div>
                                                </li>
                                                <li class="last">
                                                    <div class="table-heading"></div>
                                                    <div class="table-row">מחלות</div>
                                                    <div class="table-row">תאונות</div>
                                                    <div class="table-row">שירותי חירום ו אשפוז</div>
                                                    <div class="table-row">ניתוחים</div>
                                                    <div class="table-row">תקרות</div>
                                                    <div class="table-row">חיסונים</div>
                                                    <div class="table-row">ניקוי שיניים</div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="step2-table step2-table2">
                                            <ul class="list-inline table2">
                                                <li class="first @if(isset($session['step2']['selected_package']) && $session['step2']['selected_package'] == 'premium_plus')active @endif" data-package="premium_plus" data-price="{{$prices['premium_plus']['price']}}"  >
                                                    <div class="table-heading">עלות אצל הוטרינר</div>
                                                    <div class="table-row">{!! HTML::image('/website/images/icon5.png', '', array('class' => 'img-responsive')) !!}</div>
                                                    <div class="table-row">{!! HTML::image('/website/images/icon5.png', '', array('class' => 'img-responsive')) !!}</div>
                                                    <div class="table-row">{!! HTML::image('/website/images/icon5.png', '', array('class' => 'img-responsive')) !!}</div>
                                                    <div class="table-row">{!! HTML::image('/website/images/icon5.png', '', array('class' => 'img-responsive')) !!}</div>
                                                    <div class="table-row">תקרת אירוע רפואי 5,000 תקרה שנתית 10,000</div>
                                                    <div class="table-row">{!! HTML::image('/website/images/icon5.png', '', array('class' => 'img-responsive')) !!}</div>
                                                    <div class="table-row">{!! HTML::image('/website/images/icon5.png', '', array('class' => 'img-responsive')) !!}</div>
                                                    <div class="table-row totalprice">&#8362;{{$prices['premium_plus']['price']}}</div>
                                                    <div class="planhover">{!! HTML::image('/website/images/registerplanhover.png', '', array('class' => 'img-responsive')) !!}</div>
                                                </li>
                                                <li class="second @if(isset($session['step2']['selected_package']) && $session['step2']['selected_package'] == 'premium')active @endif" data-package="premium" data-price="{{$prices['premium']['price']}}">
                                                    <div class="table-heading">עלות אצל הוטרינר</div>
                                                    <div class="table-row">{!! HTML::image('/website/images/icon5.png', '', array('class' => 'img-responsive')) !!}</div>
                                                    <div class="table-row">{!! HTML::image('/website/images/icon5.png', '', array('class' => 'img-responsive')) !!}</div>
                                                    <div class="table-row">{!! HTML::image('/website/images/icon5.png', '', array('class' => 'img-responsive')) !!}</div>
                                                    <div class="table-row">{!! HTML::image('/website/images/icon5.png', '', array('class' => 'img-responsive')) !!}</div>
                                                    <div class="table-row">תקרת אירוע רפואי 5,000 תקרה שנתית 10,000</div>
                                                    <div class="table-row">{!! HTML::image('/website/images/icon5.png', '', array('class' => 'img-responsive')) !!}</div>
                                                    <div class="table-row">{!! HTML::image('/website/images/icon11.png', '', array('class' => 'img-responsive')) !!}</div>
                                                    <div class="table-row totalprice">&#8362;{{$prices['premium']['price']}}</div>
                                                    <div class="planhover">{!! HTML::image('/website/images/registerplanhover.png', '', array('class' => 'img-responsive')) !!}</div>
                                                </li>
                                                <li class="last @if(isset($session['step2']['selected_package']) && $session['step2']['selected_package'] == 'basic') active @endif" data-package="basic" data-price="{{$prices['basic']['price']}}">
                                                    <div class="table-heading">עלות אצל הוטרינר</div>
                                                    <div class="table-row">{!! HTML::image('/website/images/icon5.png', '', array('class' => 'img-responsive')) !!}</div>
                                                    <div class="table-row">{!! HTML::image('/website/images/icon5.png', '', array('class' => 'img-responsive')) !!}</div>
                                                    <div class="table-row">{!! HTML::image('/website/images/icon5.png', '', array('class' => 'img-responsive')) !!}</div>
                                                    <div class="table-row">{!! HTML::image('/website/images/icon5.png', '', array('class' => 'img-responsive')) !!}</div>
                                                    <div class="table-row">תקרת אירוע רפואי 5,000 תקרה שנתית 10,000</div>
                                                    <div class="table-row">{!! HTML::image('/website/images/icon11.png', '', array('class' => 'img-responsive')) !!}</div>
                                                    <div class="table-row">{!! HTML::image('/website/images/icon11.png', '', array('class' => 'img-responsive')) !!}</div>
                                                    <div class="table-row totalprice"><p>&#8362;{{$prices['basic']['price']}}</p></div>
                                                    <div class="planhover">{!! HTML::image('/website/images/registerplanhover.png', '', array('class' => 'img-responsive')) !!}</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <h1 class="selected-package">
                                    @if(isset($session['step2']['selected_package']) && $session['step2']['selected_package'] == 'basic')

                                        בחרת בחבילת  {{ $session['step2']['selected_package'] }}   מחיר  {{ $session['step2']['selected_price'] }}  ₪

                                    @else
                                        <div class="error message" >
                                            עליך לבחור חבילת הצטרפות
                                        </div>
                                    @endif

                                </h1>

                                <div class="step2-required"><p class="text-center">* דמי השירות עבור <span>{{$session['step1']['pet_name']}}</span>, הינו בהתאם לגיל שהוזן. </p></div>
                                <div class="step2-submit text-center">
                                    <button  class="button-style2">המשך</button>
                                </div>
                            </div>
                            <input type="hidden" name="selected_package" value="">
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
            $('.step2-table .table2 li').on('click',function(){
                $('.step2-table .table2 li').removeClass('active');
                $(this).addClass('active');
                var selpackage_name = $(this).data('package');
                var selpackage_price = $(this).data('price');
                var packageText = "בחרת בחבילת  "+ selpackage_name + " מחיר "+ " " +selpackage_price + " ₪";
                $('.selected-package').text(packageText);
                $('input[name="selected_package"]').val(selpackage_name);
            });
        });
    </script>
@endsection