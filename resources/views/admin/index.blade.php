@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    MEUAGENTE | ADMIN
@stop

{{-- page level styles --}}
@section('header_styles')
    <meta name="_token" content="{{ csrf_token() }}">
@stop

{{-- Page content --}}
@section('content')
    <div class="container-fluid">
        <h1 style="text-align: center;color: currentColor;font-family: fantasy;font-size: -webkit-xxx-large;padding-top:20%;">Welcome to our site!</h1>
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