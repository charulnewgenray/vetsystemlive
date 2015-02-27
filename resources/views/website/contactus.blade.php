@extends('website.layouts.app')

@section('content')
    <div class="banner-slider">
        <div class="container">
            <div class="clearfix"></div>
        </div>
    </div>
    <section>
        <div class="container contact-page">
            <div class="col-lg-6 col-md-6 no-gutters">
                <p class="text40 text-blue text-bold">צור קשר</p>
                <div id="form-messages"></div>
                <form id="ajax-contact" method="post" action="mailer.php" class="form-horizontal form-contactus" role="form">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">שם:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="name" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="last name" class="col-sm-2 no-gutters control-label">שם משפחה:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">טלפון:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">אימייל:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="email" id="email" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">נושא:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="topic" id="topic" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">תוכן:</label>
                        <div class="col-sm-10">
                            <textarea rows="4" class="form-control" name="content" id="content" placeholder=""></textarea>
                        </div>
                    </div>
                    <div class="step1-submit text-center">
                        <input class="button-style2"  type="submit" value="שלח">
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-6 no-gutters">
                <img src="images/cat8.jpg" class="img-responsive contactus-img-cat">
            </div>
        </div>
    </section>

@endsection
