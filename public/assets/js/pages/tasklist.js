//escape text so that javascript can not be executed
var entityMap = {
    '&': '&amp;',
    '<': '&lt;',
    '>': '&gt;',
    '"': '&quot;',
    "'": '&#39;',
    '/': '&#x2F;',
    '`': '&#x60;',
    '=': '&#x3D;'
};

function escapeHtml (string) {
    return String(string).replace(/[&<>"'`=\/]/g, function (s) {
        return entityMap[s];
    });
}

$(document).ready(function () {
    $('#task_deadline').keydown(function() {
        return false;
    });

    $('#task_description').on('blur', function() {
        var RegEx= /^[a-zA-Z\s]*$/;
        var value = $('#task_description').val();
        if (!RegEx.test(value) || value == '') {
            alert('Field should be not empty and String contains only whitespace');
            $('.add_button').attr('disabled', true);
        }else {

            $('.add_button').attr('disabled', false);
        }
    });

    var deleteIcon= "<i  class='livicon remove' data-name='remove-alt' data-size='18' data-loop='true' data-c='#f56954' data-hc='#f56954' style='cursor:pointer'></i>";
    var editIcon= "<i class='livicon pencil' data-name='edit' data-size='18' data-loop='true' data-c='#428BCA' data-hc='#428BCA'></i>";
    var deleteButton = " <a href='' class='tododelete redcolor'>" + deleteIcon +"</a>";
    var striks = "<span id='striks'> |  </span>";
    var editButton = "<a href='' class='todoedit'>"+ editIcon +"</a>";
    var checkBox = "<p><input type='checkbox' class='striked ' autocomplete='off' /></p>";
    var twoButtons = "<div class='col-md-4 col-sm-4 col-xs-4  pull-right showbtns todoitembtns'>" + editButton + striks + deleteButton + "</div>";
    var oneButton = "<div class='col-md-4 col-sm-4 col-xs-4  pull-right showbtns todoitembtns'>" + deleteButton + "</div>";
    var fewSeconds = 2;
    $('.add_button').bind('click',function(e){
        e.preventDefault();
        if($('#task_description').val() == ''){
            alert('The task description field is required');
            return false;
        }
        else if($('#task_deadline').val() == '') {
            alert('The task deadline field is required');
            return false;
        }
        var btn = $(this);
        btn.prop('disabled', true);
        setTimeout(function(){
            btn.prop('disabled', false);
        }, fewSeconds*1000);

        $.ajax({
            type: "POST",
            url: "task/create",
            data: $("form#main_input_box").serialize(),
            success: function (id) {
                var count = $('#taskcount').text();
                count = parseInt(count) + 1;
                $(".list_of_items").prepend("<div class='todolist_list showactions list1' id='" + id + "'>  " + "<div class='col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1'> <div class='todoitemcheck'>" + checkBox + "</div>" + "<div class='todotext todoitemjs'>" + $("#task_description").val() + " </div> <span class='label label-default'>" + $("#task_deadline").val() + "</span></div>" + twoButtons);
                $('#taskcount').text(count);
                $("#task_description").val('');
                $("#task_deadline").val('');
                $(".datepicker").data('DateTimePicker').date(moment()).date(null);
                setTimeout(function(){
                    $('.livicon').updateLivicon();
                },500);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.responseText);
            }

        });

    });

    $.ajax({
        type: "GET",
        url: "task/data",
        success: function (result) {
            $.each(result, function (i, item) {
                $('.list_of_items').append("<div class='todolist_list showactions list1' id='" + item.id + "'>   " +
                    "<div class='col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1'> <div class='todoitemcheck'>" + "<p><input type='checkbox' class='striked ' autocomplete='off' " + ((item.finished == 1) ? "checked" : "") + "/></p>" +
                    "</div> <div class='todotext " + ((item.finished == 1) ? "strikethrough" : "") + " todoitemjs'>" + escapeHtml(item.task_description) + "</div> <span class='label label-default'>" +
                    item.task_deadline + "</span> </div>" + ((item.finished == 1) ? oneButton : twoButtons));
            });

            $('#taskcount').text(result.length);

        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.responseText);
        }
    });
    setTimeout(function(){
        $('.livicon').updateLivicon();
    },500);
});

$(document).on('click', '.tododelete', function (e) {
    e.preventDefault();
    var id = $(this).parent().parent().attr('id');
    var count = $('#taskcount').text();
    count = parseInt(count) - 1;
    $(this).closest('.todolist_list').hide("slow", function () {
        $(this).remove();
    });
    $('#taskcount').text(count);
    $.ajax({
        type: "POST",
        url: "task/" + id + "/delete",
        data: {_token: $('meta[name="_token"]').attr('content')},
        success: function (id) {

        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.responseText);
        }

    });

});
$(document).on('click', '.striked', function (e) {
    var id = $(this).closest('.todolist_list').attr('id');
    var hasClass = $(this).closest('.todolist_list').find('.todotext').hasClass('strikethrough');
    var hasEdit = $(this).closest('.todolist_list').find('.todoedit').hasClass('todoedit');
    var striks = "<span id='striks'> |  </span>";
    var editButton = "<a href='' class='todoedit'><span class='glyphicon glyphicon-pencil'></span></a>";

    $.ajax({
        type: "POST",
        url: "task/" + id + "/edit",
        data: {_token: $('meta[name="_token"]').attr('content'), 'finished': ((hasClass) ? 0 : 1)}
    });

    $(this).closest('.todolist_list').find('.todotext').toggleClass('strikethrough');
    if (!hasClass) {
        $(this).closest('.todolist_list').find('.todoedit').hide();
        $(this).closest('.todolist_list').find('#striks').hide();
    } else {
        $(this).closest('.todolist_list').find('.todoedit').show();
        $(this).closest('.todolist_list').find('#striks').show();
    }
    if (!hasEdit) {
        $(this).closest('.todolist_list').find('.tododelete').before(editButton + striks);
    }
});

$(document).on('click', '.todoedit .pencil', function (e) {
    e.preventDefault();
    var text = '';
    text = $(this).closest('.todolist_list').find('.todotext').text();
    text = "<input type='text' name='text' value='" + text + "' onkeypress='return event.keyCode != 13;' />";
    $(this).closest('.todolist_list').find('.todotext').html(text);
    $(this).removeClass('pencil').addClass('saved');
    $(this).closest('.todolist_list').find('.todoitemcheck').hide();
    $('.saved').updateLivicon({
        n : "check"
    });
});

$(document).on('click', '.todoedit .saved', function (e) {
    e.preventDefault();
    var text1 = $(this).closest('.todolist_list').find("input[type='text'][name='text']").val();
    $(this).closest('.todolist_list').find('.todoitemcheck').show();
    if (text1 === '') {
        alert('Come on! you can\'t create a todo without title');
        $(this).closest('.todolist_list').find("input[type='text'][name='text']").focus();
        return;
    }
    var id = $(this).closest('.todolist_list').attr('id');
    $.ajax({
        type: "POST",
        url: "task/" + id + "/edit",
        data: {_token: $('meta[name="_token"]').attr('content'), 'task_description': text1},
    });
    $(this).closest('.todolist_list').find('.todotext').html(text1);
    $(this).removeClass('saved ').addClass('pencil');
    $('.pencil').updateLivicon({
        n : "edit"
    });
});
// add task datepicker
$(function() {
   var dates = $(".datepicker").datetimepicker({
        format: 'YYYY/MM/DD',
        widgetPositioning:{
            vertical:'bottom'
        },
        keepOpen:false,
        useCurrent: false,
        minDate:new Date().setHours(0,0,0,0)
    });
    var date = new Date();
    date.setDate(date.getDate()-1);
    $('#datepicker').datetimepicker({
        startDate: date
    });

   });


$('.add_btn').on('click',function(){
    setTimeout(function(){
        $('.remove').updateLivicon({
            'n':'remove-alt'
        });
        $('.pencil').updateLivicon({
            'n':'edit'
        });
    },3000);
});