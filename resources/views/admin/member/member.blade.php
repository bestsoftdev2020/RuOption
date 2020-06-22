@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    MEUAGENTE | MEMBERS
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="../assets/plugins/footable/css/footable.core.css" rel="stylesheet">
    <link href="../assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
@stop

{{-- Page content --}}
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Members</h3>
                        <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle text-center" data-page-size="7">
                            <thead>
                                <tr>
                                    <th data-sort-initial="true" data-toggle="true">NAME</th>
                                    <th>EMAIL ADDRESS</th>
                                    <th data-hide="phone, tablet">CPF</th>
                                    <th data-hide="phone, tablet">WHATSAPP</th>
                                    <th data-hide="phone, tablet">MEMBER</th>
                                    <th data-sort-ignore="true" class="min-width">DELETE</th>
                                </tr>
                            </thead>
                            <div class="m-t-40">
                                <div class="d-flex">
                                    <div class="mr-auto">
                                        <div class="form-group">
                                            <a href="{{ URL::to('admin/members/create') }}">
                                                <button class="btn btn-info btn-block btn-sm"><i class="icon wb-plus" aria-hidden="true"></i>Add New Member
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="form-group">
                                            <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <tbody>
                                @if($datas)
                                    @foreach($datas as $data)
                                        <tr>
                                            <td><a href="{{ URL::to('admin/members/'.$data->id.'/edit') }}">{{$data->name}}</a></td>
                                            <td>{{$data->email}}</td>
                                            <td>{{$data->cpf}}</td>
                                            <td>{{$data->whatsapp}}</td>
                                            <td>{{date("F Y", strtotime($data->created_at))}}</td>
                                            <td>
                                                <a href="{{ URL::to('admin/members/delete').'/'.$data->id }}"><button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"><i class="fa fa-bitbucket" style="font-size: 1.5em;" aria-hidden="true"></i></button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <p> No Members </p>
                                @endif
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="10">
                                        <div class="text-right">
                                            <ul class="pagination">
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
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
    <script src="{{ asset('assets/plugins/footable/js/footable.all.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-select/bootstrap-select.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/footable-init.js') }}"></script>
@stop