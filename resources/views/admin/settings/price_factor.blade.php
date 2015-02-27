@extends('admin.layouts.app')
@section('content')
    <h1 class="page-header">{{ trans('general.Prices') }}</h1>
    <!-- Button trigger modal -->
    <div class="model-btn-wrapper">
        <button type="button" class="btn btn-danger fa fa-plus" data-toggle="modal" data-target="#price">
            {{ trans('general.Add-New-Price')}}
        </button>
    </div>


    <table class="table table-striped table-bordered table-hover" id="prices-table">
        <thead>
        <tr>
            <th>{{ trans('general.Age') }}</th>
            <th>{{ trans('general.Small-Dog') }}</th>
            <th>{{ trans('general.Medium-Dog') }}</th>
            <th>{{ trans('general.Big-Dog') }}</th>
            <th>{{ trans('general.Hug-Dog') }}</th>
            <th>{{ trans('general.Cat-Breed') }}</th>
            <th>{{ trans('general.Cat-Mixed') }}</th>
            <th style="min-width:110px;width: 110px;">{{ trans('general.Action')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pricefactors as $price)
            <tr class="odd gradeX">
                <td>{{$price->age}}</td>
                <td>{{$price->smalldog}}</td>
                <td>{{$price->mediumdog}}</td>
                <td>{{$price->bigdog}}</td>
                <td>{{$price->hugedog}}</td>
                <td>{{$price->catbreed}}</td>
                <td>{{$price->catmixed}}</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default fa fa-edit price" data-toggle="modal" data-target="#priceedit"
                                data-id="{{$price->id}}"
                                data-age="{{$price->age}}"
                                data-smalldog="{{$price->smalldog}}"
                                data-mediumdog="{{$price->mediumdog}}"
                                data-bigdog="{{$price->bigdog}}"
                                data-hugedog="{{$price->hugedog}}"
                                data-catbreed="{{$price->catbreed}}"
                                data-catmixed="{{$price->catmixed}}"
                                ></button>
                        {!! Form::open(array('route' => array('admin.settings.delete', 'price-factor'), 'method' => 'DELETE','class' => 'form-delete-btn')) !!}
                            {!! Form::hidden('id',$price->id) !!}
                            {!! FORM::hidden('urlkey','price-factor')!!}
                            <button type="submit" class="btn btn-danger fa fa-trash-o"></button>
                        {!! Form::close() !!}

                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- Modal for Add New item-->
    <div class="modal fade" id="price" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-id>
        <div class="modal-dialog">
            <div class="modal-content">
                {!! Form::open(array('route' => array('admin.settings.create','price-factor'),'method' => 'POST','class' => 'form-horizontal')) !!}
                {!! FORM::hidden('urlkey','price-factor')!!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">{{ trans('general.Add-New-Price')}}</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        {!! Form::label('age', 'age',['class' => 'control-label  col-xs-4']) !!}
                        {!! FORM::text("age",null,['class' => 'form-control col-xs-6']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('smalldog', 'smalldog',['class' => 'control-label  col-xs-4']) !!}
                        {!! FORM::text("smalldog",null,['class' => 'form-control col-xs-6']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('mediumdog', 'mediumdog',['class' => 'control-label  col-xs-4']) !!}
                        {!! FORM::text("mediumdog",null,['class' => 'form-control col-xs-6']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('bigdog', 'bigdog',['class' => 'control-label  col-xs-4']) !!}
                        {!! FORM::text("bigdog",null,['class' => 'form-control col-xs-6']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('hugedog', 'hugedog',['class' => 'control-label  col-xs-4']) !!}
                        {!! FORM::text("hugedog",null,['class' => 'form-control col-xs-6']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('catbreed', 'catbreed',['class' => 'control-label  col-xs-4']) !!}
                        {!! FORM::text("catbreed",null,['class' => 'form-control col-xs-6']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('catmixed', 'catmixed',['class' => 'control-label  col-xs-4']) !!}
                        {!! FORM::text("catmixed",null,['class' => 'form-control col-xs-6']) !!}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary green">Save changes</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <!-- Modal For Edit -->
    <div class="modal fade" id="priceedit" tabindex="-1" role="dialog" aria-labelledby="Message Edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                {!! Form::open(array('route' => array('admin.settings.store','price-factor'),'method' => 'PUT','class' => 'form-horizontal')) !!}
                {!! FORM::hidden('urlkey','price-factor')!!}
                {!! FORM::hidden('id','')!!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">{{ trans('general.Update-General-Message')}}</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        {!! Form::label('age', 'age',['class' => 'control-label  col-xs-4']) !!}
                        {!! FORM::text("age",null,['class' => 'form-control col-xs-6']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('smalldog', 'smalldog',['class' => 'control-label  col-xs-4']) !!}
                        {!! FORM::text("smalldog",null,['class' => 'form-control col-xs-6']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('mediumdog', 'mediumdog',['class' => 'control-label  col-xs-4']) !!}
                        {!! FORM::text("mediumdog",null,['class' => 'form-control col-xs-6']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('bigdog', 'bigdog',['class' => 'control-label  col-xs-4']) !!}
                        {!! FORM::text("bigdog",null,['class' => 'form-control col-xs-6']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('hugedog', 'hugedog',['class' => 'control-label  col-xs-4']) !!}
                        {!! FORM::text("hugedog",null,['class' => 'form-control col-xs-6']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('catbreed', 'catbreed',['class' => 'control-label  col-xs-4']) !!}
                        {!! FORM::text("catbreed",null,['class' => 'form-control col-xs-6']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('catmixed', 'catmixed',['class' => 'control-label  col-xs-4']) !!}
                        {!! FORM::text("catmixed",null,['class' => 'form-control col-xs-6']) !!}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary green">Save changes</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
<script type="text/javascript">
    window.onload = function(){
        $('#priceedit').on('show.bs.modal',function(e){
            $(e.currentTarget).find('input[name="id"]').val($(e.relatedTarget).data('id'));
            $(e.currentTarget).find('input[name="label"]').val($(e.relatedTarget).data('label'));
            $(e.currentTarget).find('input[name="value"]').val($(e.relatedTarget).data('value'));
        });
    };
</script>
