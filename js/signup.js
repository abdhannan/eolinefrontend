(function ($) {
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(window).scrollTop() > 60) {
                $('#nav-primary').addClass('scrolled');
            } else {
                $('#nav-primary').removeClass('scrolled');
            }
        }); 
    });
})(jQuery);

