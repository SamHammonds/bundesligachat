
jQuery(document).ready(function() {
    jQuery('.burger-menu').click(function(e) {
        jQuery('.actual-burger-menu ul').slideToggle(500);
        e.preventDefault();
    });

});
