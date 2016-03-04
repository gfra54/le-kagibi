$(document).ready(function() {

    var _site_barre = $('.site-barre');
    var _action_bar = $('.action-bar');
    if(_action_bar.length) {
	    var _scroll_function = function(e) {
	        if($(window).scrollTop() > _action_bar.data('top')){
	        	_site_barre.addClass('active');
	        } else {
	        	_site_barre.removeClass('active');
	        }
	    };

	    _action_bar.data('top',_action_bar.offset().top + _action_bar.height());

        $(window).on("scroll", _scroll_function);
        _scroll_function();
    }

});