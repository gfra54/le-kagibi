$(window).load(function() {
	var _home_grid_height=0;
	$('.home-grid:last .tablet-small-x-1').each(function(){
		if(_home_grid_height!=0) {
			_home_grid_height+=Number($(this).css('margin-bottom').replace('px',''));
		}
		_home_grid_height+=Number($(this).css('padding-bottom').replace('px',''));
	})
	// console.log(_home_grid_height);
	$('.home-grid:last').css('padding-bottom',_home_grid_height);

	$("IMG.detect-lazy").lazyload();
});
var is_admin = $("body").hasClass("is-admin");
if(!is_admin) {
	var d = new Date();
	var _TIME = d.getMinutes();

	var _HOME = $.cookie("HOME");

	var _LAST_POST = $('.home-grid article')[0].id;


	if(!_HOME|| isNaN(_HOME) || $.cookie("LAST") != _LAST_POST) {
		_HOME=0;
		$.cookie("LAST", _LAST_POST);
	}

	var _intervale = 4; // nombre d'articles concernés par la rotation de la homepage

	var _delta = _TIME - $.cookie('TIME');
	$.cookie("TIME",_TIME);


	if(_delta > _intervale || _delta > -_intervale) {
		_HOME = Number(_HOME)+1;
	}
	if(_HOME>1) {
		$('<div id="tmp-home-grid"></div>').appendTo('body');
		var _html='';
		var _tab_home_grid = $.makeArray($('.home-grid:first .home-default'));
		if(_HOME>=_tab_home_grid.length){
			_HOME=0;
		}
		if(_HOME) {
			_debut=_HOME;
			for(_i=0;_i<_tab_home_grid.length;_i++){
				_html+=_tab_home_grid[_debut].outerHTML;
				_debut++;
				if(_debut>=_tab_home_grid.length){
					_debut=0;
				}
			}
			$(_html).appendTo('#tmp-home-grid');
			var _cpt=0;
			$('#tmp-home-grid .home-default').each(function(){
				if(!$(this).hasClass('no-rotation')) {
					$(this).attr('class',$('.home-grid:first .home-default-'+_cpt).attr('class'));
				}
				if(_cpt==0) {
					_cpt++;
				}
			});
			$('.home-grid:first').html($('#tmp-home-grid').html());
			$('#tmp-home-grid').remove();
		}
	}
	$.cookie("HOME", _HOME,{expires: 1});
}
