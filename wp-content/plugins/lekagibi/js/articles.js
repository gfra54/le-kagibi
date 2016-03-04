// gestion des articles
$(window).load(function() {
	if($('.wp-post-image').length) {
		setTimeout(function() {
			if(Number($('body').css('padding-top').replace('px',''))>10) {
				$('.wp-post-image').addClass('mode-habillage');
			}
		},1000);
	}
});