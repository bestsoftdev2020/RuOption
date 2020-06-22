@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    PRODUCTS | ADD
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" href="{{ asset('assets/plugins/dropify/dist/css/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/docsupport/prism.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/chosen.css') }}">
@stop

{{-- Page content --}}
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-info">
                    <div class="card-header"><h4 class="m-b-0 text-white">New Product</h4></div> 
                    <div class="card-body">
                        <form action="{{ URL::to('admin/products')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-body">
                                <h3 class="card-title">Main Info</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Name of product</label>
                                            <input type="text" id="product_name" name="product_name" class="form-control" placeholder="Name of destination" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Price (Total)</label>
                                            <input type="number" min="0" id="price_total" name="price_total" class="form-control" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Price (1/12)</label>
                                            <input type="number" min="0" id="price_12" name="price_12" class="form-control" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 offset-md-1">
                                        <label class="control-label">Photo #1</label>
                                        <input type="file" id="input-file-now" name="product_photo1" class="dropify" data-max-file-size="2M" accept="image/x-png,image/gif,image/jpeg" required/>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="control-label">Photo #2</label>
                                        <input type="file" id="input-file-now" name="product_photo2" class="dropify" data-max-file-size="2M" accept="image/x-png,image/gif,image/jpeg" required/>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="control-label">Photo #3</label>
                                        <input type="file" id="input-file-now" name="product_photo3" class="dropify" data-max-file-size="2M" accept="image/x-png,image/gif,image/jpeg" required/>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="control-label">Photo #4</label>
                                        <input type="file" id="input-file-now" name="product_photo4" class="dropify" data-max-file-size="2M" accept="image/x-png,image/gif,image/jpeg" required/>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="control-label">Photo #5</label>
                                        <input type="file" id="input-file-now" name="product_photo5" class="dropify" data-max-file-size="2M" accept="image/x-png,image/gif,image/jpeg" required/>
                                    </div>
                                </div>

                                <h3 class="card-title p-t-20">About</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">About - product</label>
                                            <textarea rows="3" name="about_product" class="form-control form-control-line" required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="card-title">City and Tags</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">City</label>
                                            <input name="country" id="country" type="hidden" required>
                                            <input id="searchTextField" name="city" placeholder="Enter a city" autocomplete="off" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Tags</label>
                                            <select name="tag_list[]" data-placeholder="Select Favourite Tags" multiple class="chosen-select form-control" tabindex="18" id="multiple-label-example">
                                                <option value=""></option>
                                                @foreach($tag_info as $info)
                                                    <option value="{{$info->name}}">{{$info->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Like Products</label>
                                            <select name="product_list[]" data-placeholder="Select Favourite Products" multiple class="chosen-select form-control" tabindex="18" id="multiple-label-example">
                                                <option value=""></option>
                                                @foreach($products_tag as $product_tag)
                                                    <option value="{{$product_tag->id}}">{{$product_tag->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <div class="row text-center">
                                <div class="col-md-12">
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success mr-4"> <i class="fa fa-check"></i> Save</button>
                                        <a href="{{ URL::to('admin/products') }}"><button type="button" class="btn btn-inverse">Cancel</button></a>
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
    <script src="{{ asset('assets/plugins/dropify/dist/js/dropify.js') }}"></script>
    <script src="{{ asset('assets/js/chosen.jquery.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/docsupport/prism.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('assets/docsupport/init.js') }}" type="text/javascript" charset="utf-8"></script>
    <script>
        $(document).ready(function() {
            autocomplete = new google.maps.places.Autocomplete((document.getElementById('searchTextField')), { types: ['(cities)'] });
            autocomplete.addListener('place_changed', onPlaceChanged) ;
            function onPlaceChanged(){
                var place = autocomplete.getPlace();
                for (var i = 0; i < place.address_components.length; i++) {
                    var addressType = place.address_components[i].types[0];
                    if (addressType == "country") {
                        document.getElementById("country").value = place.address_components[i].short_name;
                    }
                }
            };

            $('form input').keydown(function (e) {
                if (e.keyCode == 13) {
                    var inputs = $(this).parents("form").eq(0).find(":input");
                    if (inputs[inputs.index(this) + 1] != null) {                    
                        inputs[inputs.index(this) + 1].focus();
                    }
                    e.preventDefault();
                    return false;
                }
            });

    
            $('.dropify').dropify();
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });

            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>
@stop