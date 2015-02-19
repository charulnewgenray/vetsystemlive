@extends('admin.layouts.app')
@section('content')
    <h1 class="page-header">{{ trans('general.Health-Questions') }}</h1>
    <!-- Button trigger modal -->
    <div class="model-btn-wrapper">
        <button type="button" class="btn btn-danger fa fa-plus" data-toggle="modal" data-target="#healthquestion">
            {{ trans('general.Add-New-Question')}}
        </button>
    </div>

    @include('admin.layouts.messages')
    <table class="table table-striped table-bordered table-hover" id="healthquestions-table">
        <thead>
        <tr>
            <th>{{ trans('general.Label') }}</th>
            <th>{{ trans('general.Value') }}</th>
            <th style="min-width:110px;width: 110px;">{{ trans('general.Action')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($healthquestions as $healthquestion)
            <tr class="odd gradeX">
                <td>{{$healthquestion->label}}</td>
                <td>{{$healthquestion->value}}</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default fa fa-edit healthquestion" data-toggle="modal" data-target="#healthquestionedit"
                                data-id="{{$healthquestion->id}}"
                                data-label="{{$healthquestion->label}}"
                                data-value="{{$healthquestion->value}}"
                                ></button>
                        {!! Form::open(array('route' => array('admin.settings.delete', 'health-questions'), 'method' => 'DELETE','class' => 'form-delete-btn')) !!}
                            {!! Form::hidden('id',$healthquestion->id) !!}
                            {!! FORM::hidden('urlkey','health-questions')!!}
                            <button type="submit" class="btn btn-danger fa fa-trash-o"></button>
                        {!! Form::close() !!}

                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- Modal for Add New item-->
    <div class="modal fade" id="healthquestion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-id>
        <div class="modal-dialog">
            <div class="modal-content">
                {!! Form::open(array('route' => array('admin.settings.create','health-questions'),'method' => 'POST','class' => 'form-horizontal')) !!}
                {!! FORM::hidden('urlkey','health-questions')!!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">{{ trans('general.Add-New-Question')}}</h4>
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
    <div class="modal fade" id="healthquestionedit" tabindex="-1" role="dialog" aria-labelledby="Health Question Edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                {!! Form::open(array('route' => array('admin.settings.store','health-questions'),'method' => 'PUT','class' => 'form-horizontal')) !!}
                {!! FORM::hidden('urlkey','health-questions')!!}
                {!! FORM::hidden('id','')!!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">{{ trans('general.Update-Health-Question')}}</h4>
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
        $('#healthquestionedit').on('show.bs.modal',function(e){
            $(e.currentTarget).find('input[name="id"]').val($(e.relatedTarget).data('id'));
            $(e.currentTarget).find('input[name="label"]').val($(e.relatedTarget).data('label'));
            $(e.currentTarget).find('input[name="value"]').val($(e.relatedTarget).data('value'));
        });
    };
</script>
