@extends('admin.layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ trans('general.Dog-Price-Factor') }}</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="page-content">

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive borderless">
                    {!! Form::open(array('route' => array('admin.settings.store','dog-price-factor'),'method' => 'PUT')) !!}
                    <input type="hidden" name="urlkey" value="dog-price-factor">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>{{ trans('general.Code') }}</th>
                            <th>{{ trans('general.Label') }}</th>
                            <th>{{ trans('general.Price') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dogpricefactor as $index => $dogprice)
                            <tr class="odd gradeX">
                                <td>{{$dogprice->code}}</td>
                                <td>{!! FORM::hidden("data[$index][id]",$dogprice->id) !!}{!! FORM::text("data[$index][label]",$dogprice->label) !!}</td>
                                <td>{!! FORM::text("data[$index][price]",$dogprice->price) !!}</td>
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
