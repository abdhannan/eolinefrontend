(function ($) {
    $(document).ready(function () {
        //for trigger forgot form to show and otherwise
        $('#forgot-trigger').on('click', function () {
            $('#form-login').fadeOut('fast', function () {
                $('#form-forgot').fadeIn('fast');
            });
        });

        $('#login-trigger').on('click', function () {
            $('#form-forgot').fadeOut('fast', function () {
                $('#form-login').fadeIn('fast');
            });
        });
        //---end
    });
})(jQuery);