@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    PROPOSALS | EDIT
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" href="{{ asset('assets/plugins/dropify/dist/css/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/docsupport/prism.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/chosen.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/timepicker/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
@stop

{{-- Page content --}}
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-info">
                    <div class="card-header"><h4 class="m-b-0 text-white">#{{$data->id}} - {{$data->name}}</h4></div>
                    <ul class="nav nav-tabs customtab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#main_data" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Main</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#item_data" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Item</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#paid_data" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Paid</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#document_data" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Document</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#finance_data" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Finance</span></a> </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="main_data" role="tabpanel">         
                            <div class="card-body">
                                <div class="form-body">
                                    <form action="{{ URL::to('admin/proposals/update_main').'/'.$data->id }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Name of proposal</label>
                                                    <input type="text" id="proposal_name" name="proposal_name" class="form-control" placeholder="" value="{{$data->name}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Register Date</label>
                                                    <div class="input-group">
                                                        <input type="text" id="datepicker-register" name="start_date" value="{{date('d/m/Y', strtotime($data->start_date))}}" class="form-control singledate" required>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="icon-calender"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Expire Date</label>
                                                    <div class="input-group">
                                                        <input type="text" id="datepicker-expiration" name="expire_date" value="{{date('d/m/Y', strtotime($data->expire_date))}}" class="form-control singledate" required>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="icon-calender"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">User Name</label>
                                                    <input id="searchTextField" name="user_name" placeholder="Enter a username" value="{{$current_user}}" autocomplete="off" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="control-label">Select Status</label>
                                                <select class="custom-select col-12" id="inlineFormCustomSelect" name="status">
                                                    <option value="1" {{$data->status==1 ? "selected" : ""}}>Not Opened</option>
                                                    <option value="2" {{$data->status==2 ? "selected" : ""}}>Opened</option>
                                                    <option value="3" {{$data->status==3 ? "selected" : ""}}>Approved</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row text-center pt-4">
                                            <div class="col-md-12">
                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-success mr-4"> <i class="fa fa-check"></i> Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>  
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane  p-20" id="item_data" role="tabpanel">
                            <div class="card-body">
                                <form action="{{ URL::to('admin/proposals/update_item').'/'.$data->id }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                    <div class="form-body">
                                        <h3 class="card-title">Add or Edit</h3>
                                        <hr>
                                        <div class="row">
                                            <input type="hidden" id="selected_id" value="0">
                                            <input type="hidden" id="item_ids" name="item_ids" value="{{$item_ids}}">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Name of Item</label>
                                                    <input type="text" id="item_name" class="form-control" placeholder="Enter item name">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">Price of Item</label>
                                                    <input type="text" id="item_price" class="form-control" placeholder="Enter item price">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">Quantity of Item</label>
                                                    <input type="text" id="item_quantity" class="form-control" placeholder="Enter item quantity">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">Total Price</label>
                                                    <input type="text" id="price_total" class="form-control" placeholder="" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">Price(1/12)</label>
                                                    <input type="text" id="price_12" class="form-control" placeholder="Enter price(1/12)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row text-center pt-4">
                                            <div class="col-md-12">
                                                <div class="form-actions">
                                                    <button type="button" id="add_btn" class="btn btn-info btn-block mr-4"> <i class="fa fa-check"></i> Add</button>
                                                </div>
                                            </div>
                                        </div>

                                        <h3 class="card-title pt-5">Item Results</h3>
                                        <hr>
                                        <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle text-center" data-page-size="7">
                                            <thead>
                                                <tr>
                                                    <th data-sort-initial="true" data-toggle="true">ID</th>
                                                    <th data-hide="phone, tablet">Name</th>
                                                    <th data-hide="phone, tablet">Price</th>
                                                    <th data-hide="phone, tablet">Quantity</th>
                                                    <th data-hide="phone, tablet">Total</th>
                                                    <th data-hide="phone, tablet">Price(1/12)</th>
                                                    <th data-sort-ignore="true" class="min-width">Action</th>
                                                </tr>
                                            </thead>
    
                                            <tbody id="main_table">
                                                <tr id="total">
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><input name="item_total" id="item_total" value="10001" class="table-input" readonly></td>
                                                    <td><input name="item_price12" id="item_price12" value="1000" class="table-input" readonly></td>
                                                    <td></td>
                                                </tr>
                                                @if($item_data)
                                                    @foreach($item_data as $item)
                                                        <tr id="{{$item->id}}">
                                                            <td><input name="{{$item->id}}_id" id="{{$item->id}}_id" value="{{$item->id}}" class="table-input" readonly></td>
                                                            <td><input name="{{$item->id}}_name" id="{{$item->id}}_name" value="{{$item->name}}" class="table-input" readonly></td>
                                                            <td><input name="{{$item->id}}_price" id="{{$item->id}}_price" value="{{$item->price}}" class="table-input" readonly></td>
                                                            <td><input name="{{$item->id}}_quantity" id="{{$item->id}}_quantity" value="{{$item->quantity}}" class="table-input" readonly></td>
                                                            <td><input name="{{$item->id}}_total" id="{{$item->id}}_total" value="{{$item->price*$item->quantity}}" class="table-input" readonly></td>
                                                            <td><input name="{{$item->id}}_price12" id="{{$item->id}}_price12" value="{{$item->price_12}}" class="table-input" readonly></td>
                                                            <td>
                                                                <button type="button" id="edit_btn_{{$item->id}}" data-a="{{$item->id}}" class="btn btn-sm btn-icon btn-pure btn-outline edit-row-btn"><i class="fa fa-pencil" style="font-size: 1.5em;" aria-hidden="true"></i></button>
                                                                <button type="button" id="delete_btn_{{$item->id}}" data-a="{{$item->id}}" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"><i class="fa fa-bitbucket" style="font-size: 1.5em;" aria-hidden="true"></i></button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <p> No items </p>
                                                @endif
                                            </tbody>
                                        </table>
                                        <div class="row text-center pt-4">
                                            <div class="col-md-12">
                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-success btn-block mr-4"> <i class="fa fa-check"></i> Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane  p-20" id="paid_data" role="tabpanel">
                            <div class="card-body">
                                <form action="{{ URL::to('admin/proposals/update_paid').'/'.$data->id }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                    <div class="form-body">
                                        <h3 class="card-title">Add or Edit</h3>
                                        <hr>
                                        <div class="row">
                                            <input type="hidden" id="selected_id_paid" value="0">
                                            <input type="hidden" id="paid_ids" name="paid_ids" value="{{$paid_ids}}">
                                            <div class="col-md-3">
                                                <label class="control-label">Select Method</label>
                                                <select class="custom-select col-12" id="paid_method">
                                                    <option value="1" selected>Credit Card Offline</option>
                                                    <option value="2">Credit Card Online</option>
                                                    <option value="3">Boleto</option>
                                                    <option value="4">Voucher</option>
                                                    <option value="5">TED</option>
                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Paid Amount</label>
                                                    <input type="number" id="paid_amount" class="form-control" placeholder="Enter item price">
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Paid Description</label>
                                                    <input type="text" id="paid_descr" class="form-control" placeholder="Enter description">
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Transaction Date</label>
                                                    <div class="input-group">
                                                        <input type="text" id="datepicker-transaction" name="transaction" value="{{date('d/m/Y')}}" class="form-control singledate">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="icon-calender"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row text-center pt-4">
                                            <div class="col-md-12">
                                                <div class="form-actions">
                                                    <button type="button" id="add_btn_paid" class="btn btn-info btn-block mr-4"> <i class="fa fa-check"></i> Add</button>
                                                </div>
                                            </div>
                                        </div>

                                        <h3 class="card-title pt-5">Paid Results</h3>
                                        <hr>
                                        <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle text-center" data-page-size="7">
                                            <thead>
                                                <tr>
                                                    <th data-hide="phone, tablet">Method</th>
                                                    <th data-hide="phone, tablet">Amount</th>
                                                    <th data-hide="phone, tablet">Transaction Date</th>
                                                    <th data-hide="phone, tablet">Description</th>
                                                    <th data-sort-ignore="true" class="min-width">Action</th>
                                                </tr>
                                            </thead>
    
                                            <tbody id="main_table_paid">
                                                @if($paid_data)
                                                    @foreach($paid_data as $item)
                                                        <tr id="{{$item->id}}_paid">
                                                            <input type="hidden" name="{{$item->id}}_method_id" id="{{$item->id}}_method_id" value="{{$item->method_id}}">
                                                            <td><input name="{{$item->id}}_method_paid" id="{{$item->id}}_method_paid" value="{{$item->method_name}}" class="table-input" readonly></td>
                                                            <td><input name="{{$item->id}}_amount_paid" id="{{$item->id}}_amount_paid" value="{{$item->amount}}" class="table-input" readonly></td>
                                                            <td><input name="{{$item->id}}_transaction" id="{{$item->id}}_transaction" value="{{date('d/m/Y', strtotime($item->transaction_date))}}" class="table-input" readonly></td>
                                                            <td><input name="{{$item->id}}_descr_paid" id="{{$item->id}}_descr_paid" value="{{$item->descr}}" class="table-input" readonly></td>
                                                            <td>
                                                                <button type="button" id="edit_paid_btn_{{$item->id}}" data-a="{{$item->id}}" class="btn btn-sm btn-icon btn-pure btn-outline edit-row-btn"><i class="fa fa-pencil" style="font-size: 1.5em;" aria-hidden="true"></i></button>
                                                                <button type="button" id="delete_paid_btn_{{$item->id}}" data-a="{{$item->id}}" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"><i class="fa fa-bitbucket" style="font-size: 1.5em;" aria-hidden="true"></i></button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <p> No paid </p>
                                                @endif
                                            </tbody>
                                        </table>
                                        <div class="row text-center pt-4">
                                            <div class="col-md-12">
                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-success btn-block mr-4"> <i class="fa fa-check"></i> Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane p-20" id="document_data" role="tabpanel">
                            <div class="card-body">
                                <form action="{{ URL::to('admin/proposals/update_document').'/'.$data->id }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle text-center" data-page-size="7">
                                            <thead>
                                                <tr>
                                                    <th data-sort-initial="true" data-toggle="true">ID</th>
                                                    <th data-hide="phone, tablet">Name</th>
                                                    <th data-hide="phone, tablet">Price</th>
                                                    <th data-hide="phone, tablet">Quantity</th>
                                                    <th data-hide="phone, tablet">Total</th>
                                                    <th data-hide="phone, tablet">Price(1/12)</th>
                                                    <th data-hide="phone, tablet">Total Cost</th>
                                                    <th data-hide="phone, tablet">Download</th>
                                                    <th data-sort-ignore="true" class="min-width">Action</th>
                                                </tr>
                                            </thead>
    
                                            <tbody id="main_table">
                                                @if($item_data)
                                                    @foreach($item_data as $item)
                                                        <tr id="{{$item->id}}">
                                                            <td>{{$item->id}}</td>
                                                            <td>{{$item->name}}</td>
                                                            <td>{{$item->price}}</td>
                                                            <td>{{$item->quantity}}</td>
                                                            <td>{{$item->price*$item->quantity}}</td>
                                                            <td>{{$item->price_12}}</td>
                                                            <td><input type="number" name="{{$item->id}}_cost" id="{{$item->id}}_cost" value="{{$item->cost}}" class="table-input"></td>
                                                            <td>
                                                                @if($item->doc_url)
                                                                    <a href="{{asset('uploads/files/proposals/'.$data->id.'/'.$item->doc_url)}}" target="_blank"><i class="fa fa-download" style="font-size: 1.5em;" aria-hidden="true"></i></a>
                                                                @endif
                                                            </td>
                                                            <td width="10%">
                                                                <input type="file" name="{{$item->id}}_file" accept=".pdf">
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <p> No items </p>
                                                @endif
                                            </tbody>
                                        </table>
                                        <div class="row text-center pt-4">
                                            <div class="col-md-12">
                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-success btn-block mr-4"> <i class="fa fa-check"></i> Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        <div class="tab-pane  p-20" id="finance_data" role="tabpanel">
                            <div class="card-body">  
                                <div class="row">
                                    <!-- Column -->
                                    <div class="col-md-3">
                                        <div class="card card-inverse card-info">
                                            <div class="box bg-info text-center">
                                                <h1 class="font-light text-white">{{$total_ordered}}</h1>
                                                <h6 class="text-white">TOTAL ORDERED</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-3">
                                        <div class="card card-primary card-inverse">
                                            <div class="box text-center">
                                                <h1 class="font-light text-white">{{$total_cost}}</h1>
                                                <h6 class="text-white">TOTAL COST</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-3">
                                        <div class="card card-inverse card-success">
                                            <div class="box text-center">
                                                <h1 class="font-light text-white">{{$gover_fee}}</h1>
                                                <h6 class="text-white">GOVERNMENT FEE</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-3">
                                        <div class="card card-inverse card-dark">
                                            <div class="box text-center">
                                                <h1 class="font-light text-white">{{$total_ordered-$total_cost-$gover_fee}}</h1>
                                                <h6 class="text-white">TOTAL PROFIT</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 class="card-title">Paid Results</h3>
                            <hr>
                            <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle text-center" data-page-size="7">
                                <thead>
                                    <tr>
                                        <th data-hide="phone, tablet">Method</th>
                                        <th data-hide="phone, tablet">Amount</th>
                                        <th data-hide="phone, tablet">Transaction Date</th>
                                        <th data-hide="phone, tablet">Description</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if($paid_data)
                                        @foreach($paid_data as $item)
                                            <tr>
                                                <td>{{$item->method_name}}</td>
                                                <td>{{$item->amount}}</td>
                                                <td>{{date('d/m/Y', strtotime($item->transaction_date))}}</td>
                                                <td>{{$item->descr}}</td>
                                            </tr>
                                        @endforeach
                                        <tr style="background:antiquewhite;">
                                            <td>Total</td>
                                            <td>{{$total_paid}}</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    @else
                                        <p> No paid </p>
                                    @endif
                                </tbody>
                            </table>

                            <h3 class="card-title pt-5">Ordered Results</h3>
                            <hr>
                            <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle text-center" data-page-size="7">
                                <thead>
                                    <tr>
                                        <th data-hide="phone, tablet">Name</th>
                                        <th data-hide="phone, tablet">Price</th>
                                        <th data-hide="phone, tablet">Quantity</th>
                                        <th data-hide="phone, tablet">Total</th>
                                        <th data-hide="phone, tablet">Cost</th>
                                        <th data-hide="phone, tablet">Price(1/12)</th>
                                    </tr>
                                </thead>

                                <tbody id="main_table">
                                    @if($item_data)
                                        @foreach($item_data as $item)
                                            <tr>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->price}}</td>
                                                <td> {{$item->quantity}}</td>
                                                <td>{{$item->price*$item->quantity}}</td>
                                                <td> {{$item->cost}}</td>
                                                <td>{{$item->price_12}}</td>
                                            </tr>
                                        @endforeach
                                            <tr style="background:antiquewhite;">
                                                <td>Total</td>
                                                <td></td>
                                                <td></td>
                                                <td>{{$total_ordered}}</td>
                                                <td>{{$total_cost}}</td>
                                                <td>{{$total_price12}}</td>
                                            </tr>
                                    @else
                                        <p> No items </p>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editConfirmModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Alert</h4>
                </div>
                <div class="modal-body">
                    <p>You are already editing a row, you must save or cancel that row before edit/delete a new row</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('assets/plugins/dropify/dist/js/dropify.js') }}"></script>
    <script src="{{ asset('assets/js/chosen.jquery.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/docsupport/prism.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('assets/docsupport/init.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script>
        $(document).ready(function() {
            function arrayRemove(arr, value) {
                return arr.filter(function(ele){ return ele != value; });
            }

            function methodValue(id) {
                var str='' ;
                switch(id) {
                    case '1':
                        str =  "Credit Card Offline" ;
                        break ;
                    case '2':
                        str = "Credit Card Online" ;
                        break ;
                    case '3':
                        str = "Boleto" ;
                        break ;
                    case '4':
                        str = "Voucher" ;
                        break ;
                    case '5':
                        str = "TED" ;
                        break ;
                }
                return str ;
            }
//---------------------------------------For Item---------------------------------------------//
            $('[id^=edit_btn]').on('click',function(e) {
                $('#selected_id').val($(this).data('a')) ;
                changeState() ;
            });
            $('[id^=delete_btn]').on('click',function(e) {
                var id = $(this).data('a') ;
                $('#'+id).remove() ;
                $('#selected_id').val(0) ;
                changeState() ;

                var item_ids = $('#item_ids').val() ;
                if(item_ids == id)
                    $('#item_ids').val('') ;
                else {
                    var item_array = item_ids.split(',') ;
                    item_array = arrayRemove(item_array,id)
                    item_ids = item_array.toString() ;
                    $('#item_ids').val(item_ids) ;
                }
            });
            function changeState() {
                var id = $('#selected_id').val() ;
                if($('#selected_id').val() == 0) {
                    $('#item_name').val("") ;
                    $('#item_price').val("") ;
                    $('#item_quantity').val("") ;
                    $('#price_total').val("") ;
                    $('#price_12').val("") ;
                    $('#add_btn').html('<i class="fa fa-check"></i> Add'); 
                }
                else {
                    $('#item_name').val($('#'+id+'_name').val()) ;
                    $('#item_price').val($('#'+id+'_price').val()) ;
                    $('#item_quantity').val($('#'+id+'_quantity').val()) ;
                    $('#price_total').val($('#'+id+'_total').val()) ;
                    $('#price_12').val($('#'+id+'_price12').val()) ;
                    $('#add_btn').html('<i class="fa fa-check"></i> Edit');
                }
            };
            function confirmForm() {
                if($('#item_name').val() == "") {
                    $('#item_name').focus() ;
                    return false;
                }
                if($('#item_price').val() == "" || isNaN($('#item_price').val()) || $('#item_price').val() <= 0) {
                    $('#item_price').focus() ;
                    return false;
                }
                if($('#item_quantity').val() == "" || isNaN($('#item_quantity').val()) || $('#item_quantity').val() <= 0) {
                    $('#item_quantity').focus() ;
                    return false;
                }
                if($('#price_12').val() == "" || isNaN($('#price_12').val()) || $('#price_12').val() <= 0) {
                    $('#price_12').focus() ;
                    return false;
                }
                return true ;
            }
            $('#item_price').change(function() {
                if($('#item_price').val() != "" && !isNaN($('#item_price').val()) && $('#item_price').val() > 0) {
                    if($('#item_quantity').val() != "" && !isNaN($('#item_quantity').val()) && $('#item_quantity').val() > 0) {
                        $('#price_total').val($('#item_price').val()*$('#item_quantity').val()) ;
                    }
                }
            });

            $('#item_quantity').change(function() {
                if($('#item_price').val() != "" && !isNaN($('#item_price').val()) && $('#item_price').val() > 0) {
                    if($('#item_quantity').val() != "" && !isNaN($('#item_quantity').val()) && $('#item_quantity').val() > 0) {
                        $('#price_total').val($('#item_price').val()*$('#item_quantity').val()) ;
                    }
                }
            });
            $('#add_btn').click(function(){
                if(confirmForm())
                {
                    if($('#selected_id').val() == 0) {
                        var new_id = Math.floor(Date.now() / 1000) ;
                        var row_content = `<tr id="`+new_id+`">
                                                <td><input name="`+new_id+`_id" value="`+new_id+`" class="table-input" readonly></td>
                                            <td><input name="`+new_id+`_name" id="`+new_id+`_name" value="`+$('#item_name').val()+`" class="table-input" readonly></td>
                                            <td><input name="`+new_id+`_price" id="`+new_id+`_price" value="`+$('#item_price').val()+`" class="table-input" readonly></td>
                                            <td><input name="`+new_id+`_quantity" id="`+new_id+`_quantity" value="`+$('#item_quantity').val()+`" class="table-input" readonly></td>
                                            <td><input name="`+new_id+`_total" id="`+new_id+`_total" value="`+$('#item_price').val()*$('#item_quantity').val()+`" class="table-input" readonly></td>
                                            <td><input name="`+new_id+`_price12" id="`+new_id+`_price12" value="`+$('#price_12').val()+`" class="table-input" readonly></td>
                                            <td>
                                                <button type="button" id="edit_btn_`+new_id+`" data-a="`+new_id+`" class="btn btn-sm btn-icon btn-pure btn-outline edit-row-btn"><i class="fa fa-pencil" style="font-size: 1.5em;" aria-hidden="true"></i></button>
                                                <button type="button" id="delete_btn_`+new_id+`" data-a="`+new_id+`" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"><i class="fa fa-bitbucket" style="font-size: 1.5em;" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>`;
                        $('#main_table').append(row_content) ;
                        changeState() ;

                        $('[id^=edit_btn]').on('click',function(e) {
                            $('#selected_id').val($(this).data('a')) ;
                            changeState() ;
                        });
                        $('[id^=delete_btn]').on('click',function(e) {
                            var id = $(this).data('a') ;
                            $('#'+id).remove() ;
                            $('#selected_id').val(0) ;
                            changeState() ;

                            var item_ids = $('#item_ids').val() ;
                            if(item_ids == id)
                                $('#item_ids').val('') ;
                            else {
                                var item_array = item_ids.split(',') ;
                                item_array = arrayRemove(item_array,id)
                                item_ids = item_array.toString() ;
                                $('#item_ids').val(item_ids) ;
                            }
                        });

                        var item_ids = $('#item_ids').val() ;
                        if(item_ids == '')
                            item_ids = new_id ;
                        else
                            item_ids = item_ids+','+new_id ;
                        $('#item_ids').val(item_ids) ;
                    }
                    else {
                        id = $('#selected_id').val() ;
                        $('#'+id+'_name').val($('#item_name').val()) ;
                        $('#'+id+'_price').val($('#item_price').val())
                        $('#'+id+'_quantity').val($('#item_quantity').val())
                        $('#'+id+'_total').val($('#price_total').val())
                        $('#'+id+'_price12').val($('#price_12').val())
                        $('#selected_id').val(0) ;
                        changeState() ;
                    }
                }
            });

//-------------------------------------For Paid----------------------------------------------//
            $('[id^=edit_paid_btn]').on('click',function(e) {
                $('#selected_id_paid').val($(this).data('a')) ;
                changeStatePaid() ;
            });
            $('[id^=delete_paid_btn]').on('click',function(e) {
                var id = $(this).data('a') ;
                $('#'+id+'_paid').remove() ;
                $('#selected_id_paid').val(0) ;
                changeStatePaid() ;

                var paid_ids = $('#paid_ids').val() ;
                if(paid_ids == id)
                    $('#paid_ids').val('') ;
                else {
                    var paid_array = paid_ids.split(',') ;
                    paid_array = arrayRemove(paid_array,id)
                    paid_ids = paid_array.toString() ;
                    $('#paid_ids').val(paid_ids) ;
                }
            });
            function changeStatePaid() {
                var id = $('#selected_id_paid').val() ;
                if($('#selected_id_paid').val() == 0) {
                    $('#paid_method').val(1) ;
                    $('#paid_amount').val("") ;
                    $('#paid_descr').val("") ;
                    $('#add_btn_paid').html('<i class="fa fa-check"></i> Add'); 
                }
                else {
                    $('#datepicker-transaction').val($('#'+id+'_transaction').val()) ;
                    $('#paid_method').val($('#'+id+'_method_id').val()) ;
                    $('#paid_amount').val($('#'+id+'_amount_paid').val()) ;
                    $('#paid_descr').val($('#'+id+'_descr_paid').val()) ;
                    $('#add_btn_paid').html('<i class="fa fa-check"></i> Edit');
                }
            };
            function confirmFormPaid() {
                if($('#paid_descr').val() == "") {
                    $('#paid_descr').focus() ;
                    return false;
                }
                if($('#paid_amount').val() == "" || isNaN($('#paid_amount').val()) || $('#paid_amount').val() <= 0) {
                    $('#paid_amount').focus() ;
                    return false;
                }
                return true ;
            }
            $('#add_btn_paid').click(function(){
                if(confirmFormPaid())
                {
                    if($('#selected_id_paid').val() == 0) {
                        var new_id = Math.floor(Date.now() / 1000) ;
                        var row_content = `<tr id="`+new_id+`_paid">
                                                <input type="hidden" name="`+new_id+`_method_id" id="`+new_id+`_method_id" value="`+$('#paid_method').val()+`">
                                            <td><input name="`+new_id+`_method_paid" id="`+new_id+`_method_paid" value="`+methodValue($('#paid_method').val())+`" class="table-input" readonly></td>
                                            <td><input name="`+new_id+`_amount_paid" id="`+new_id+`_amount_paid" value="`+$('#paid_amount').val()+`" class="table-input" readonly></td>
                                            <td><input name="`+new_id+`_transaction" id="`+new_id+`_transaction" value="`+$('#datepicker-transaction').val()+`" class="table-input" readonly></td>
                                            <td><input name="`+new_id+`_descr_paid" id="`+new_id+`_descr_paid" value="`+$('#paid_descr').val()+`" class="table-input" readonly></td>
                                            <td>
                                                <button type="button" id="edit_paid_btn_`+new_id+`" data-a="`+new_id+`" class="btn btn-sm btn-icon btn-pure btn-outline edit-row-btn"><i class="fa fa-pencil" style="font-size: 1.5em;" aria-hidden="true"></i></button>
                                                <button type="button" id="delete_paid_btn_`+new_id+`" data-a="`+new_id+`" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"><i class="fa fa-bitbucket" style="font-size: 1.5em;" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>`;
                        $('#main_table_paid').append(row_content) ;
                        changeStatePaid() ;

                        $('[id^=edit_paid_btn]').on('click',function(e) {
                            $('#selected_id_paid').val($(this).data('a')) ;
                            changeStatePaid() ;
                        });
                        $('[id^=delete_paid_btn]').on('click',function(e) {
                            var id = $(this).data('a') ;
                            $('#'+id+'_paid').remove() ;
                            $('#selected_id_paid').val(0) ;
                            changeStatePaid() ;

                            var paid_ids = $('#paid_ids').val() ;
                            if(paid_ids == id)
                                $('#paid_ids').val('') ;
                            else {
                                var paid_array = paid_ids.split(',') ;
                                paid_array = arrayRemove(paid_array,id)
                                paid_ids = paid_array.toString() ;
                                $('#paid_ids').val(paid_ids) ;
                            }
                        });

                        var paid_ids = $('#paid_ids').val() ;
                        if(paid_ids == '')
                            paid_ids = new_id ;
                        else
                            paid_ids = paid_ids+','+new_id ;
                        $('#paid_ids').val(paid_ids) ;
                    }
                    else {
                        id = $('#selected_id_paid').val() ;
                        $('#'+id+'_transaction').val($('#datepicker-transaction').val()) ;
                        $('#'+id+'_method_id').val($('#paid_method').val()) ;
                        $('#'+id+'_method_paid').val(methodValue($('#paid_method').val())) ;
                        $('#'+id+'_amount_paid').val($('#paid_amount').val()) ;
                        $('#'+id+'_descr_paid').val($('#paid_descr').val())
                        $('#selected_id_paid').val(0) ;
                        changeStatePaid() ;
                    }
                }
            });

            function autocomplete(inp, arr) {
                /*the autocomplete function takes two arguments,
                the text field element and an array of possible autocompleted values:*/
                var currentFocus;
                /*execute a function when someone writes in the text field:*/
                inp.addEventListener("input", function(e) {
                    var a, b, i, val = this.value;
                    /*close any already open lists of autocompleted values*/
                    closeAllLists();
                    if (!val) { return false;}
                    currentFocus = -1;
                    /*create a DIV element that will contain the items (values):*/
                    a = document.createElement("DIV");
                    a.setAttribute("id", this.id + "autocomplete-list");
                    a.setAttribute("class", "autocomplete-items");
                    /*append the DIV element as a child of the autocomplete container:*/
                    this.parentNode.appendChild(a);
                    /*for each item in the array...*/
                    for (i = 0; i < arr.length; i++) {
                        /*check if the item starts with the same letters as the text field value:*/
                        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                        /*create a DIV element for each matching element:*/
                        b = document.createElement("DIV");
                        /*make the matching letters bold:*/
                        b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                        b.innerHTML += arr[i].substr(val.length);
                        /*insert a input field that will hold the current array item's value:*/
                        b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                        /*execute a function when someone clicks on the item value (DIV element):*/
                        b.addEventListener("click", function(e) {
                            /*insert the value for the autocomplete text field:*/
                            inp.value = this.getElementsByTagName("input")[0].value;
                            /*close the list of autocompleted values,
                            (or any other open lists of autocompleted values:*/
                            closeAllLists();
                        });
                        a.appendChild(b);
                        }
                    }
                });
                /*execute a function presses a key on the keyboard:*/
                inp.addEventListener("keydown", function(e) {
                    var x = document.getElementById(this.id + "autocomplete-list");
                    if (x) x = x.getElementsByTagName("div");
                    if (e.keyCode == 40) {
                        /*If the arrow DOWN key is pressed,
                        increase the currentFocus variable:*/
                        currentFocus++;
                        /*and and make the current item more visible:*/
                        addActive(x);
                    } else if (e.keyCode == 38) { //up
                        /*If the arrow UP key is pressed,
                        decrease the currentFocus variable:*/
                        currentFocus--;
                        /*and and make the current item more visible:*/
                        addActive(x);
                    } else if (e.keyCode == 13) {
                        /*If the ENTER key is pressed, prevent the form from being submitted,*/
                        e.preventDefault();
                        if (currentFocus > -1) {
                        /*and simulate a click on the "active" item:*/
                        if (x) x[currentFocus].click();
                        }
                    }
                });
                function addActive(x) {
                    /*a function to classify an item as "active":*/
                    if (!x) return false;
                    /*start by removing the "active" class on all items:*/
                    removeActive(x);
                    if (currentFocus >= x.length) currentFocus = 0;
                    if (currentFocus < 0) currentFocus = (x.length - 1);
                    /*add class "autocomplete-active":*/
                    x[currentFocus].classList.add("autocomplete-active");
                }
                function removeActive(x) {
                    /*a function to remove the "active" class from all autocomplete items:*/
                    for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove("autocomplete-active");
                    }
                }
                function closeAllLists(elmnt) {
                    /*close all autocomplete lists in the document,
                    except the one passed as an argument:*/
                    var x = document.getElementsByClassName("autocomplete-items");
                    for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                    }
                }
                /*execute a function when someone clicks in the document:*/
                document.addEventListener("click", function (e) {
                    closeAllLists(e.target);
                });
            }

            function getUnique(array){
                var uniqueArray = [];
                
                // Loop through array values
                for(i=0; i < array.length; i++){
                    if(uniqueArray.indexOf(array[i]) === -1) {
                        uniqueArray.push(array[i]);
                    }
                }
                return uniqueArray;
            }

            var temp = '<?php $str = implode(",", $user_list); echo $str;?>' ;
            var user_lists = temp.split(",") ;
            user_lists = getUnique(user_lists) ;
            
            autocomplete(document.getElementById("searchTextField"), user_lists)

            $('#datepicker-expiration').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                locale: {
                    format: 'DD/MM/YYYY'
                }
            });

            $('#datepicker-register').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                locale: {
                    format: 'DD/MM/YYYY'
                }
            });

            $('#datepicker-transaction').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                locale: {
                    format: 'DD/MM/YYYY'
                }
            });
        });
    </script>
@stop