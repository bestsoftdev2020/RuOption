@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    DESTINATIONS | ADD
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
                    <div class="card-header"><h4 class="m-b-0 text-white">New Destination</h4></div> 
                    <div class="card-body">
                        <form action="{{ URL::to('admin/destinations')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-body">
                                <h3 class="card-title">Main Info</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Name of destination</label>
                                            <input type="text" id="dest_name" name="dest_name" class="form-control" placeholder="Name of destination" value="" required>
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
                                        <input type="file" id="input-file-now" name="dest_photo1" class="dropify" data-max-file-size="2M" accept="image/x-png,image/gif,image/jpeg" required/>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="control-label">Photo #2</label>
                                        <input type="file" id="input-file-now" name="dest_photo2" class="dropify" data-max-file-size="2M" accept="image/x-png,image/gif,image/jpeg" required/>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="control-label">Photo #3</label>
                                        <input type="file" id="input-file-now" name="dest_photo3" class="dropify" data-max-file-size="2M" accept="image/x-png,image/gif,image/jpeg" required/>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="control-label">Photo #4</label>
                                        <input type="file" id="input-file-now" name="dest_photo4" class="dropify" data-max-file-size="2M" accept="image/x-png,image/gif,image/jpeg" required/>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="control-label">Photo #5</label>
                                        <input type="file" id="input-file-now" name="dest_photo5" class="dropify" data-max-file-size="2M" accept="image/x-png,image/gif,image/jpeg" required/>
                                    </div>
                                </div>

                                <h3 class="card-title p-t-20">About</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">About - destination</label>
                                            <textarea rows="3" name="about_dest" class="form-control form-control-line" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">About - weather</label>
                                            <textarea rows="3" name="about_weather" class="form-control form-control-line" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">About - cost of living</label>
                                            <textarea rows="3" name="about_costofliving" class="form-control form-control-line" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Search result description</label>
                                            <textarea rows="3" maxlength="200" name="search_result_description" class="form-control form-control-line" required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="card-title p-t-20">Top five attractions</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">#1 - name</label>
                                            <input type="text" name="attr_1_name" id="name" class="form-control" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">#1 - about</label>
                                            <textarea rows="3" maxlength="200" name="attr_1_about" class="form-control form-control-line" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">#2 - name</label>
                                            <input type="text" name="attr_2_name" id="name" class="form-control" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">#2 - about</label>
                                            <textarea rows="3" maxlength="200" name="attr_2_about" class="form-control form-control-line" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">#3 - name</label>
                                            <input type="text" name="attr_3_name" id="name" class="form-control" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">#3 - about</label>
                                            <textarea rows="3" maxlength="200" name="attr_3_about" class="form-control form-control-line" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">#4 - name</label>
                                            <input type="text" name="attr_4_name" id="name" class="form-control" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">#4 - about</label>
                                            <textarea rows="3" maxlength="200" name="attr_4_about" class="form-control form-control-line" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">#5 - name</label>
                                            <input type="text" name="attr_5_name" id="name" class="form-control" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">#5 - about</label>
                                            <textarea rows="3" maxlength="200" name="attr_5_about" class="form-control form-control-line" required></textarea>
                                        </div>
                                    </div>
                                </div>                

                                <h3 class="card-title">Country and Tags</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Country</label>
                                            <input name="country" id="searchTextField" autocomplete="off" placeholder="Enter a country" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Tags</label>
                                            <select name="tag_list[]" data-placeholder="Select Favorite Tags" multiple class="chosen-select form-control" tabindex="18" id="multiple-label-example">
                                                <option value=""></option>
                                                @foreach($tag_info as $info)
                                                    <option value="{{$info->name}}">{{$info->name}}</option>
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
                                        <a href="{{ URL::to('admin/destinations') }}"><button type="button" class="btn btn-inverse">Cancel</button></a>
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

            var temp = '<?php $str = implode(",", $country); echo $str;?>' ;
            var countries = temp.split(",") ;
            
            autocomplete(document.getElementById("searchTextField"), countries)

    
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