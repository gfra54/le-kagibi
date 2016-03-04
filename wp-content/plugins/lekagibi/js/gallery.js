$(document).ready(function() {

	$('.gallery-nav.gallery-next, .gallery-nav.gallery-prev').click(function(e){
		e.preventDefault();
		_current = Number($('.gallery-frame').data('current'));
		console.log(_current)
		_new = _current - Number($(this).data('sens'));
		console.log(_new)
		if(_new <  1){
			_new = $('.gallery-slide').length;
		} else if(_new > $('.gallery-slide').length){
			_new = 1;
		}
		console.log(_new)
		document.location.hash='#g-'+_new;

	});

	var _hash_prec, _prec_current;
	setInterval(function(){
		if(_hash_prec != document.location.hash) {
			_tab = document.location.hash.split('-');
			if(_tab.length == 2){
				if(_tab[0] == '#g'){
					$('.gallery-frame').data('current',_tab[1]);
				}
			}
			if($('.gallery-frame').data('current') != _prec_current){
				_prec_current = $('.gallery-frame').data('current');
				_ml = (_prec_current-1) * 100;
				$('.gallery-rack').animate({'margin-left':'-'+_ml+'%'},'slow');
			}
		}
		_hash_prec = document.location.hash;
	},100)

});