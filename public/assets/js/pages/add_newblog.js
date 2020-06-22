$(document).ready(function() {
    $('.form-group input[type=file]').attr("accept","image/*");
    $('.textarea').summernote({
        placeholder: 'write content here...',
        fontNames: ['Lato', 'Arial', 'Courier New'],

    });
    $('.note-link-url').on('keyup', function() {
        if($('.note-link-text').val() != '') {
            $('.note-link-btn').attr('disabled', false).removeClass('disabled');
        }
    });
});