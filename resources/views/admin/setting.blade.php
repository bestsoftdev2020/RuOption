@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    MEUAGENTE | SETTING
@stop

{{-- page level styles --}}
@section('header_styles')
@stop

{{-- Page content --}}
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-info">
                    <div class="card-header"><h4 class="m-b-0 text-white">Basic Settings</h4></div>
                    <div class="card-body">
                        <form action="{{ URL::to('admin/setting') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-body">
                                <h3 class="card-title">Custom Setting</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Euro Rate</label>
                                            <input type="text" pattern="\d+(\.\d{1})?" id="euro_rate" name="euro_rate" class="form-control" placeholder="" value="{{$data->euro_rate}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Credit Card Tax</label>
                                            <input type="text" pattern="\d+(\.\d{1})?" id="credit_card_tax" name="credit_card_tax" class="form-control" placeholder="" value="{{$data->credit_card_tax}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Government Fee</label>
                                            <input type="text" pattern="\d+(\.\d{1})?" id="government_fee" name="government_fee" class="form-control" placeholder="" value="{{$data->government_fee}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Net Profit</label>
                                            <input type="text" pattern="\d+(\.\d{1})?" id="net_profit" name="net_profit" class="form-control" placeholder="" value="{{$data->net_profit}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Company Cost</label>
                                            <input type="text" pattern="\d+(\.\d{1})?" id="company_cost" name="company_cost" class="form-control" placeholder="" value="{{$data->company_cost}}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center">
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
@stop