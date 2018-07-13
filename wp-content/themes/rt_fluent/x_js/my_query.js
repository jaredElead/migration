jQuery(document).ready(function($) {
	$(document).bind('gform_confirmation_loaded', function(event, formId){
		var newOffer = $('.new-offer').attr('id');
		var type = $('.new-offer').attr('class').split(' ')[1];
		var list = type == '6' ? 'service' : 'sales';
		if(formId != 4){
			// Set variable values to send 
			var data = {
				'action': 'my_action',
				'cmd': ajax_object.cmd,
				'offer' : ajax_object.offer,
				'offerId' : newOffer,
				'type' : type      
			};	
			point = $('.offer_list_'+list);
			// Send ajax request to function 'my_action' in offer_list_ajax.php
			$.ajax({
				url: ajax_object.ajax_url,
				type: 'post',
				data: data,
				success: function(response) {
					var obj = JSON.parse(response); // create JSOn object from response.
					$(point).prepend( obj.offer );
				}
			});
		}
	});
});