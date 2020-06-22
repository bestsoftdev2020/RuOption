@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    MEUAGENTE | TAGS
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app_tag.css') }}">
@stop

{{-- Page content --}}
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-info">
                    <div class="card-header"><h4 class="m-b-0 text-white">Tags Management</h4></div>
                    <div class="card-body">
                        <form action="{{ URL::to('admin/tags') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bs-example">
                                            <label class="control-label">Add or delete tags</label>
                                            <input type="hidden" name="origin_tags" value="{{$tag_info}}">
                                            <input type="text" name="tags" value="{{$tag_info}}" class="form-control" data-role="tagsinput" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-md-12">
                                    <div class="form-actions">
                                        <button type="button" class="btn btn-success mr-4" onclick="onSubmit(this.form)"> <i class="fa fa-check"></i> Save</button>
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
    <script src="{{ asset('assets/js/bootstrap-tagsinput.js') }}"></script>
    <script>function onSubmit(f){f.submit() ;}</script>
@stop