$(document).ready(function() {

	if($('.body-habillage').length) {
		$('body').click(function (evt) {
			if(evt.target == $('body')[0]) {
				evt.stopPropagation();
				window.open($(this).data('url'),'_blank');
			}
		}).mousemove(function (evt) {
			if(evt.target == $('body')[0]) {
				$(this).css('cursor','pointer');			
			} else {
				$(this).css('cursor','default');			
			}
		});
	}

});
