@extends('website.layouts.app')

@section('content')
    <section>
        <div class="container">
            <div  style="min-height: 400px;padding-top: 100px;">
                <div class="notification clearfix">
                    <div class="col-xs-1 text-center"><i class="fa fa-paw"></i></div>
                    <div class="col-xs-10 notification-content"> {{ $result }}</div>
                    <div class="col-xs-1 text-center"><i class="fa fa-paw"></i></div>
                </div>
            </div>

        </div>
    </section>
@endsection