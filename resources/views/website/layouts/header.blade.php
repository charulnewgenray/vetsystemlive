<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <div class="text-left">
                        <span class="link-callus">חייג אלינו:</span>
                        <span class="callus-phone">073-240-9505</span>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                    <ul class="top-links list-inline">
                        <li class="link-customerLogin"><a
                                    href='{{url('login')}}'>כניסת לקוחות</a></li>
                        <li class="link-veterinarian"><a
                                    href='{{url('login')}}'>כניסת וטרינר</a></li>
                        <li class="link-contactus"><a href="contact-us">צור קשר</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="header-middle">
        <div class="container">
            <div class="header-logo clearfix">
                <div class="logo col-lg-2 col-md-2 col-sm-2 col-xs-3 no-gutters">
                    <a href='{{url('')}}'>
                        {!! HTML::image('/images/logo.png', 'Logo', array('class' => 'img-responsive', 'id' => 'logo')) !!}
                    </a>
                </div>
                <div class="logocat col-lg-10 col-md-10 col-sm-10 col-xs-9 no-gutters" style="padding: 0 !important;">
                    {!! HTML::image('/images/logocat.jpg', 'cat insurance', array('class' => 'img-responsive')) !!}
                </div>
            </div>
            <nav class="navbar navbar-default navbar-menu" role="navigation">
                <div class="container-fluid no-gutters">
                    <div class="navbar-header no-gutters">
                        <a href="request-quote" class="get-quote"><span>קבל הצעת מחיר</span></a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="{{url('')}}"class="home {{Request::path() == '/' ? 'selected' : ''}}"><span class="navlabel">דף הבית</span></a></li>
                            <li class="dropdown">
                                <a href="{{url('about-us')}}"
                                   class="dropdown-toggle {{in_array(Request::path(),['about-us','what-we-cover','faq']) ? 'selected' : ''}}" data-toggle="dropdown" role="button" aria-expanded="false">
                                    	<span class="navlabel"
                                                >&nbsp;&nbsp;על השירות&nbsp;&nbsp;<span
                                                    class="caret"></span></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href='{{url('about-us')}}' class="service {{Request::path() == 'about-us' ? 'selected' : ''}}">על השירות</a></li>
                                    <li><a href="{{url('what-we-cover')}}" class="solution {{Request::path() == 'what-we-cover' ? 'selected' : ''}}">מה אנו מכסים</a></li>
                                    <li><a href="{{url('faq')}}" class="solution {{Request::path() == 'faq' ? 'selected' : ''}}">שאלות נפוצות</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="plans" class="dropdown-toggle {{in_array(Request::path(),['plans','Service-for-the-dog','Service-for-the-cat']) ? 'selected' : ''}}"
                                   data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="navlabel">&nbsp;תכניות כיסוי&nbsp;<span class="caret"></span></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href='{{url('plans')}}' class="solution">תוכניות כיסוי</a></li>
                                    <li><a href='{{url('Service-for-the-dog')}}' class="solution">השירות לכלב</a></li>
                                    <li><a href="{{url('Service-for-the-cat')}}" class="solution">השירות לחתול</a></li>
                                </ul>
                            </li>

                            <li><a href="{{url('for-Veterinarians')}}" class="for-veterinarians last {{Request::path() == 'for-Veterinarians' ? 'selected' : ''}}"><span class="navlabel">לוטרינרים</span></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>