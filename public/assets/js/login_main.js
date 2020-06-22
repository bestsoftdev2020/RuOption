
(function ($) {
    "use strict";


    /*==================================================================
    [ Focus Contact2 ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
  
  
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }

    $('#term').change(function () {
        if($('#sign_btn').attr('disabled'))
            $('#sign_btn').removeAttr('disabled')
        else
            $('#sign_btn').attr('disabled', 'disabled')
    });

    $('#email').focus(function() {
        $('#email_container').addClass('Mui-focused')
    });

    $('#email').focusout(function() {
        $('#email_container').removeClass('Mui-focused')
    });

    $('#name').focus(function() {
        $('#name_container').addClass('Mui-focused')
    });

    $('#name').focusout(function() {
        $('#name_container').removeClass('Mui-focused')
    });

    $('#password').focus(function() {
        $('#password_container').addClass('Mui-focused')
    });

    $('#password').focusout(function() {
        $('#password_container').removeClass('Mui-focused')
    });

    $('#password1').focus(function() {
        $('#password1_container').addClass('Mui-focused')
    });

    $('#password1').focusout(function() {
        $('#password1_container').removeClass('Mui-focused')
    });

    $('#password2').focus(function() {
        $('#password2_container').addClass('Mui-focused')
    });

    $('#password2').focusout(function() {
        $('#password2_container').removeClass('Mui-focused')
    });
    
    $('#sel_country').click(function() {
        $('#country_container').addClass('Mui-focused')
    });
    $('#sel_country').focusout(function() {
        $('#country_container').removeClass('Mui-focused')
    });

    $('#phone').click(function() {
        $('#phone_container').addClass('Mui-focused')
    });
    $('#phone').focusout(function() {
        $('#phone_container').removeClass('Mui-focused')
    });

})(jQuery);