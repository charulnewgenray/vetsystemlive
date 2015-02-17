@extends('admin.layouts.app')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{$customer->first_name}} {{$customer->last_name}}</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="page-content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            {{ trans('general.Customer-Details')}}
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table  class="table  table-bordered table-hover" id="dataTables-example">
                                    <tbody>
                                    <tr class="odd gradeX">
                                        <td>Customer Code </td> <td>{{$customer->customer_id}}</td>
                                    </tr><tr>
                                        <td>First Name </td> <td>{{$customer->first_name}}</td>
                                    </tr><tr>
                                        <td>Last Name </td> <td>{{$customer->last_name}}</td>
                                    </tr><tr>
                                        <td>Email </td> <td>{{$customer->email}}</td>
                                    </tr><tr>
                                        <td>Address </td> <td>{{$customer->address}}</td>
                                    </tr><tr>
                                        <td>Gender </td> <td>{{$customer->gender}}</td>
                                    </tr><tr>
                                        <td>Primary phone </td> <td>{{$customer->primary_phone}}</td>
                                    </tr><tr>
                                        <td>Secondary phone </td> <td>{{$customer->secondary_phone}}</td>
                                    </tr><tr>
                                        <td>City </td> <td>{{$customer->city_code}}</td>
                                    </tr><tr>
                                        <td>Country</td><td>{{$customer->country_code}}</td>
                                    </tr><tr>
                                        <td>Post code </td> <td>{{$customer->post_code}}</td>
                                    </tr><tr>
                                        <td>Active </td> <td>{{$customer->active}}</td>
                                    </tr><tr>
                                        <td>Creation Date</td><td>{{$customer->created_at}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">{{$customerpet->pet_name}}</a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table  class="table table-bordered table-hover">
                                            <tbody>
                                            <tr>

                                                <td>Pet name </td> <td>{{$customerpet->pet_name}}</td>
                                            </tr><tr>
                                                <td>Pet Code </td> <td>{{$customerpet->pet_id}}</td>
                                            </tr><tr>
                                                <td>Pet Code </td> <td>{{$customerpet->pet_type}}</td>
                                            </tr><tr>
                                                <td>Magentic code </td> <td>{{$customerpet->magentic_code}}</td>
                                            </tr><tr>
                                                <td>Chip </td> <td>{{$customerpet->chip}}</td>
                                            </tr><tr>
                                                <td>Age </td> <td><span>{{$customerpet->age_year}}</span><span> years </span> <span>{{$customerpet->age_month}} months</span></td>
                                            </tr><tr>
                                                <td>Gender </td> <td>{{$customerpet->gender}}</td>
                                            </tr><tr>
                                                <td>Castrated </td> <td>{{$customerpet->castrated}}</td>
                                            </tr><tr>
                                                <td>Exclusion </td> <td>{{$customerpet->exclusion}}</td>
                                            </tr><tr>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pet question answers -->
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">{{ trans('general.Answers') }}</a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table  class="table table-bordered table-hover">
                                            <tbody>
                                            @foreach($customerpetsanswer as $answer)
                                                <tr>
                                                    <td>{{$answer->label}}</td> <td>{{$answer->value}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.page-content -->


@endsection