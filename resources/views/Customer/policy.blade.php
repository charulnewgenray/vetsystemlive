@extends('customer.layouts.app')

@section('content')
    <h1 class="page-header">Policy Details</h1>
    <div class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-striped table-bordered table-hover dataTable no-footer" id="" role="grid" aria-describedby="physician-table_info">
                    <thead>
                    <tr role="row">
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 20px;">Policy No.</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 20px;">Customer Code</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 36px;">Pet Name</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 24px;">Package Name</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 24px;">Package Type</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 64px;">Card No.</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 64px;">Card cvv</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 41px;">Card Expiration</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 41px;">Order Total</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 64px;">Payment Status</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 41px;">Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($policies as $key => $policy)
                        <tr class="gradeX odd" role="row">
                            <td>{{$policy->policy_number}}</td>
                            <td>{{$policy->customer_id}}</td>
                            <td>{{$policy->pet_name}}</td>
                            <td>{{$policy->package_name}}</td>
                            <td>{{$policy->package_type}}</td>
                            <td>{{$policy->card_number}}</td>
                            <td>{{$policy->card_cvv}}</td>
                            <td>{{$policy->card_exp}}</td>
                            <td>{{$policy->order_total}}</td>
                            <td>{{$policy->payment_status}}</td>
                            <td>{{$policy->created_at}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
