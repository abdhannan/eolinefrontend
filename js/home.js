(function ($) {
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(window).scrollTop() > 140) {
                $('#nav-primary').addClass('scrolled');
            } else {
                $('#nav-primary').removeClass('scrolled');
            }
        }); 
    });
})(jQuery);

