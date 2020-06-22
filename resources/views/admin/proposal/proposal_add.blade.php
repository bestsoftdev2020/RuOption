@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    PROPOSALS | ADD
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
                    <div class="card-header"><h4 class="m-b-0 text-white">New Proposal</h4></div>
                    <ul class="nav nav-tabs customtab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#main_data" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Main</span></a> </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="main_data" role="tabpanel">         
                            <div class="card-body">
                                <div class="form-body">
                                    <form action="{{ URL::to('admin/proposals')}}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Name of proposal</label>
                                                    <input type="text" id="proposal_name" name="proposal_name" class="form-control" placeholder="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Register Date</label>
                                                    <div class="input-group">
                                                        <input type="text" id="datepicker-register" name="start_date" value="{{date('d/m/Y')}}" class="form-control singledate" required>
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
                                                        <input type="text" id="datepicker-expiration" name="expire_date" value="{{date('d/m/Y')}}" class="form-control singledate" required>
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
                                                    <input id="searchTextField" name="user_name" placeholder="Enter a username" autocomplete="off" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="control-label">Select Status</label>
                                                <select class="custom-select col-12" id="inlineFormCustomSelect" name="status">
                                                    <option value="1" selected>Not Opened</option>
                                                    <option value="2">Opened</option>
                                                    <option value="3">Approved</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row text-center pt-4">
                                            <div class="col-md-12">
                                                <div class="form-actions">
                                                    <button type="button" onclick="OnSubmit(this.form);" class="btn btn-success mr-4"> <i class="fa fa-check"></i> Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>  
                                </div>
                            </div>
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
            function autocomplete(inp, arr) {
                /*the autocomplete function takes two arguments,
                the text field element and an array of possible autocompleted values:*/
                var currentFocus;
                /*execute a function when someone writes in the text field:*/
                inp.addEventListener("input", function(e) {
                    var a, b, i, val = this.value;
                    /*close any already open lists of autocompleted values*/
                    closeAllLists();
                    if (!val) {
                        return false;
                    }
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
                                inp.focus() ;
                            });
                            a.appendChild(b);
                        }
                    }
                });

                function sleep(ms) {
                    return new Promise(resolve => setTimeout(resolve, ms));
                }
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

                inp.addEventListener("focusout",async function(e) {
                    await sleep(100) ;
                    var comp_val = this.value ;
                    var flag = false ;
                    user_lists.forEach(function(element){
                         if(comp_val == element)
                             flag = true ;
                    });
                    if(!flag) 
                        inp.value = "" ;
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

            function OnSubmit(f) {
                return false;
            }

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
        });
    </script>
@stop