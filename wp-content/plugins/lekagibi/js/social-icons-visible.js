$(document).ready(function() {
	_content = $('#content');
    if(_content.length) {
	    var _scroll_function = function(e) {
			_buttons = $('.at4-share-outer-right');
	    	// console.log(_content.offset().top);
	        if($(window).scrollTop() > (1.5*_content.offset().top)){
				// console.log('show');
	        	_buttons.addClass('visible');
/*	        } else {
				console.log('hide');
	        	_buttons.removeClass('visible');*/
	        }
	    }
        $(window).on("scroll", _scroll_function);
        _scroll_function();
	}
});
