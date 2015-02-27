@extends('admin.layouts.app')
@section('content')
    <h1 class="page-header">{{ trans('general.Cat-Questions') }}</h1>
    <!-- Button trigger modal -->
    <div class="model-btn-wrapper">
        <button type="button" class="btn btn-danger fa fa-plus" data-toggle="modal" data-target="#catquestion">
            {{ trans('general.Add-New-Question')}}
        </button>
    </div>


    <table class="table table-striped table-bordered table-hover" id="catquestions-table">
        <thead>
        <tr>
            <th>{{ trans('general.Label') }}</th>
            <th>{{ trans('general.Value') }}</th>
            <th style="min-width:110px;width: 110px;">{{ trans('general.Action')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($catquestions as $catquestion)
            <tr class="odd gradeX">
                <td>{{$catquestion->label}}</td>
                <td>{{$catquestion->value}}</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default fa fa-edit catquestion" data-toggle="modal" data-target="#catquestionedit"
                                data-id="{{$catquestion->id}}"
                                data-label="{{$catquestion->label}}"
                                data-value="{{$catquestion->value}}"
                                ></button>
                        {!! Form::open(array('route' => array('admin.settings.delete', 'cat-questions'), 'method' => 'DELETE','class' => 'form-delete-btn')) !!}
                            {!! Form::hidden('id',$catquestion->id) !!}
                            {!! FORM::hidden('urlkey','cat-questions')!!}
                            <button type="submit" class="btn btn-danger fa fa-trash-o"></button>
                        {!! Form::close() !!}

                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- Modal for Add New item-->
    <div class="modal fade" id="catquestion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-id>
        <div class="modal-dialog">
            <div class="modal-content">
                {!! Form::open(array('route' => array('admin.settings.create','cat-questions'),'method' => 'POST','class' => 'form-horizontal')) !!}
                {!! FORM::hidden('urlkey','cat-questions')!!}
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
    <div class="modal fade" id="catquestionedit" tabindex="-1" role="dialog" aria-labelledby="Cat Question Edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                {!! Form::open(array('route' => array('admin.settings.store','cat-questions'),'method' => 'PUT','class' => 'form-horizontal')) !!}
                {!! FORM::hidden('urlkey','cat-questions')!!}
                {!! FORM::hidden('id','')!!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">{{ trans('general.Update-Cat-Question')}}</h4>
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
        $('#catquestionedit').on('show.bs.modal',function(e){
            console.log($(e.relatedTarget).data('id'));
            $(e.currentTarget).find('input[name="id"]').val($(e.relatedTarget).data('id'));
            $(e.currentTarget).find('input[name="label"]').val($(e.relatedTarget).data('label'));
            $(e.currentTarget).find('input[name="value"]').val($(e.relatedTarget).data('value'));
        });
    };
</script>
