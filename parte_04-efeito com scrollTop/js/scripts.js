$(function(){

	$('nav.mobile').click(function(){

		var listaMenu =$('nav.mobile ul li');

		if(listaMenu.is(':hidden') == true){
			var icone = $('.botao-menu-mobile i');
			icone.removeClass('fa-bars');
			icone.addClass('fa-times');
			listaMenu.slideToggle();
		}else{
			var icone = $('.botao-menu-mobile i');
			icone.removeClass('fa-times');
			icone.addClass('fa-bars');
			listaMenu.slideToggle();
		}
	});

	if($('target').length > 0){
		var elemento = '#'+$('target').attr('target');
		var divScroll = $(elemento).offset().top;

		$('html,body').animate({scrollTop:divScroll},2000);
	}

})