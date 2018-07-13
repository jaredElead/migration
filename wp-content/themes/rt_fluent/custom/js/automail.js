jQuery(document).ready(function($) {

	$(document).on('click', '.config_icon', function(){
        $(this).closest('.offer-wrapper').children(".config").slideToggle(200,'swing');
    });
	$(document).change('input[type=radio][name=input_5]', function() {
		if($('p.msg')){
			$('p.msg').remove();

		}
		switch($('input[name=input_5]:checked').val()){
			case '6':
				$('.g-tab-nav.uk-active').removeClass('uk-active').attr('aria-expanded','false');
				$('.g-tab-nav.service').addClass('uk-active').attr('aria-expanded','true');
				$('.g-tab-content.uk-active').removeClass('uk-active').attr('aria-expanded','false').attr('aria-hidden','true');
				$('.g-tab-content.service').addClass('uk-active').attr('aria-expanded','true').attr('aria-hidden','false');
			break;
			case '5':
				$('.g-tab-nav.uk-active').removeClass('uk-active').attr('aria-expanded','false');
				$('.g-tab-nav.sales').addClass('uk-active').attr('aria-expanded','true');
				$('.g-tab-content.uk-active').removeClass('uk-active').attr('aria-expanded','false').attr('aria-hidden','true');
				$('.g-tab-content.sales').addClass('uk-active').attr('aria-expanded','true').attr('aria-hidden','false');
			break;

		}
		
	});

});

