(function($) {
    
    $(document).on('focusin', '#gnb > ul > li', function() {
        $(this).siblings('.active').removeClass('active');
        $(this).addClass('active');
    });
    
})(jQuery);