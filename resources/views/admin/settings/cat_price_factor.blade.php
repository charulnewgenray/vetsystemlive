@extends('admin.layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ trans('general.cat-Price-Factor') }}</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="page-content">
        @include('admin.layouts.messages')
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive borderless">
                    {!! Form::open(array('route' => array('admin.settings.store','cat-price-factor'),'method' => 'PUT')) !!}
                    <input type="hidden" name="urlkey" value="cat-price-factor">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>{{ trans('general.Label') }}</th>
                            <th>{{ trans('general.Price') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($catpricefactor as $index => $catprice)
                            <tr class="odd gradeX">
                                <td>{!! FORM::hidden("data[$index][id]",$catprice->id) !!}{{$catprice->label}}</td>
                                <td>{!! FORM::text("data[$index][price]",$catprice->price) !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! Form::submit('SAVE',array('class' => 'btn green')) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
