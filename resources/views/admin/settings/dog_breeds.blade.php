@extends('admin.layouts.app')
@section('content')
    <h1 class="page-header">{{ trans('general.Dog-Breeds') }}</h1>
    <!-- Button trigger modal -->
    <div class="model-btn-wrapper">
        <button type="button" class="btn btn-danger fa fa-plus" data-toggle="modal" data-target="#dogbreed">
            {{ trans('general.Add-New-Breed')}}
        </button>
    </div>


    <table class="table table-striped table-bordered table-hover" id="dogbreeds-table">
        <thead>
        <tr>
            <th>{{ trans('general.Label') }}</th>
            <th>{{ trans('general.Value') }}</th>
            <th>{{ trans('general.Size') }}</th>
            <th style="width: 120px;">{{ trans('general.Action')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dogbreeds as $dogbreed)
            <tr class="odd gradeX">
                <td>{{$dogbreed->label}}</td>
                <td>{{$dogbreed->value}}</td>
                <td>{{$dogbreed->size}}</td>
                <td style="width:80px">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default fa fa-edit dogbreededit" data-toggle="modal" data-target="#dogbreededit"
                                data-id="{{$dogbreed->id}}"
                                data-label="{{$dogbreed->label}}"
                                data-value="{{$dogbreed->value}}"
                                data-size="{{$dogbreed->size}}"
                                ></button>
                        {!! Form::open(array('route' => array('admin.settings.delete', 'dog-breeds'), 'method' => 'DELETE','class' => 'form-delete-btn')) !!}
                            {!! Form::hidden('id',$dogbreed->id) !!}
                            {!! FORM::hidden('urlkey','dog-breeds')!!}
                            <button type="submit" class="btn btn-danger fa fa-trash-o"></button>
                        {!! Form::close() !!}

                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- Modal for Add New item-->
    <div class="modal fade" id="dogbreed" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-id>
        <div class="modal-dialog">
            <div class="modal-content">
                {!! Form::open(array('route' => array('admin.settings.create','dog-breeds'),'method' => 'POST','class' => 'form-horizontal')) !!}
                {!! FORM::hidden('urlkey','dog-breeds')!!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">{{ trans('general.Add-New-Breed')}}</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        {!! Form::label('label', 'label',['class' => 'control-label  col-xs-4']) !!}
                        {!! FORM::text("label",null,['class' => 'form-control col-xs-6']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('value', 'value',['class' => 'control-label  col-xs-4']) !!}
                        {!! FORM::text("value",null,['class' => 'form-control col-xs-6']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('size', 'size',['class' => 'control-label  col-xs-4']) !!}
                        {!! FORM::text("size",1,['class' => 'form-control col-xs-6']) !!}
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
    <div class="modal fade" id="dogbreededit" tabindex="-1" role="dialog" aria-labelledby="Dog Breed Edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                {!! Form::open(array('route' => array('admin.settings.store','dog-breeds'),'method' => 'PUT','class' => 'form-horizontal')) !!}
                {!! FORM::hidden('urlkey','dog-breeds')!!}
                {!! FORM::hidden('id','')!!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">{{ trans('general.Update-Dog-Breed')}}</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        {!! Form::label('label', 'label',['class' => 'control-label  col-xs-4']) !!}
                        {!! FORM::text("label",null,['class' => 'form-control col-xs-6']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('value', 'value',['class' => 'control-label  col-xs-4']) !!}
                        {!! FORM::text("value",null,['class' => 'form-control col-xs-6']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('size', 'size',['class' => 'control-label  col-xs-4']) !!}
                        {!! FORM::text("size",1,['class' => 'form-control col-xs-6']) !!}
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
        $('#dogbreededit').on('show.bs.modal',function(e){
            $(e.currentTarget).find('input[name="id"]').val($(e.relatedTarget).data('id'));
            $(e.currentTarget).find('input[name="label"]').val($(e.relatedTarget).data('label'));
            $(e.currentTarget).find('input[name="value"]').val($(e.relatedTarget).data('value'));
            $(e.currentTarget).find('input[name="size"]').val($(e.relatedTarget).data('size'));
        });
    };
</script>
