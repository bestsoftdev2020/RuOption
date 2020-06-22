@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    ACCOUNT | EDIT
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css -->
    <link rel="stylesheet" href="{{ asset('assets/docsupport/prism.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/chosen.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/timepicker/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">

    <!--end of page level css-->

@stop


{{-- Page content --}}
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline-info">
                    <div class="card-header"><h4 class="m-b-0 text-white">Editing - {!! $user->first_name!!} {!! $user->last_name!!}</h4></div>
                    <div class="card-body">
                        {!! Form::model($user, ['url' => URL::to('admin/users/'. $user->id.''), 'method' => 'put', 'class' => 'form-horizontal','id'=>'commentForm', 'enctype'=>'multipart/form-data','files'=> true]) !!}
                            {{ csrf_field() }}
                                <div class="form-body">
                                    <h3 class="card-title">Main Info</h3>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->first('first_name', 'has-error') }}">
                                                <label for="first_name" class="col-sm-2 control-label">First Name *</label>
                                                <div class="col-md-12">
                                                    <input id="first_name" name="first_name" type="text"
                                                            placeholder="First Name" class="form-control required"
                                                            value="{!! old('first_name', $user->first_name) !!}"/>
                                                </div>
                                                {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->first('last_name', 'has-error') }}">
                                                <label for="last_name" class="col-sm-2 control-label">Last Name *</label>
                                                <div class="col-md-12">
                                                    <input id="last_name" name="last_name" type="text" placeholder="Last Name"
                                                            class="form-control required"
                                                            value="{!! old('last_name', $user->last_name) !!}"/>
                                                </div>
                                                {!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group {{ $errors->first('email', 'has-error') }}">
                                                <label for="email" class="col-sm-2 control-label">Email *</label>
                                                <div class="col-md-12">
                                                    <input id="email" name="email" placeholder="E-Mail" type="text"
                                                            class="form-control required email"
                                                            value="{!! old('email', $user->email) !!}"/>

                                                {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h3 class="card-title">Password Info</h3>
                                    <hr>

                                    <div class="form-group {{ $errors->first('password', 'has-error') }}">
                                        <label for="password" class="col-sm-2 control-label">Password </label>
                                        <div class="col-sm-12">
                                            <input id="password" name="password" type="password" placeholder="Password"
                                                    class="form-control" value="{!! old('password') !!}"/>
                                        </div>
                                        {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                                    </div>

                                    <div class="form-group {{ $errors->first('password_confirm', 'has-error') }}">
                                        <label for="password_confirm" class="col-sm-2 control-label">Confirm Password </label>
                                        <div class="col-sm-12">
                                            <input id="password_confirm" name="password_confirm" type="password"
                                                    placeholder="Confirm Password " class="form-control"
                                                    value="{!! old('password_confirm') !!}"/>
                                            {!! $errors->first('password_confirm', '<span class="help-block">:message</span>') !!}
                                        </div>

                                    </div>
                                    <div class="form-group {{ $errors->first('pic_file', 'has-error') }}">
                                        <label for="pic" class="col-sm-2 control-label">Profile picture</label>
                                        <div class="col-sm-10">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 200px;">
                                                    @if($user->pic)
                                                        <img src="{!! url('/').'/uploads/users/'.$user->pic !!}" alt="img"
                                                                class="img-responsive"/>
                                                    @elseif($user->gender === "male")
                                                        <img src="{{ asset('assets/images/authors/avatar3.png') }}" alt="..."
                                                                class="img-responsive"/>
                                                    @elseif($user->gender === "female")
                                                        <img src="{{ asset('assets/images/authors/avatar5.png') }}" alt="..."
                                                                class="img-responsive"/>
                                                    @else
                                                        <img src="{{ asset('assets/images/authors/no_avatar.jpg') }}" alt="..."
                                                                class="img-responsive"/>
                                                    @endif
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px;"></div>
                                                <div>
                                                    <span class="btn btn-default btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input id="pic" name="pic_file" type="file"
                                                                class="form-control"/>
                                                    </span>
                                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput" style="color: black !important;">Remove</a>
                                                </div>
                                            </div>
                                            {!! $errors->first('pic_file', '<span class="help-block">:message</span>') !!}
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
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--row end-->
    </div>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" ></script>
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapwizard/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/edituser.js') }}"></script>
    <script>
        function formatState (state) {
            if (!state.id) { return state.text; }
            var $state = $(
                '<span><img src="{{asset('assets/img/countries_flags')}}/'+ state.element.value.toLowerCase() + '.png" class="img-flag" width="20px" height="20px" /> ' + state.text + '</span>'
            );
            return $state;
        }

        $(".country_field").select2({
            templateResult: formatState,
            templateSelection: formatState,
            placeholder: "select a country",
            theme:"bootstrap"
        });
    </script>
@stop
