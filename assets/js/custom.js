jQuery(function($){
	$('.woocommerce-checkout .panel-group .accordion-toggle#billing-checkout-continue').click(function(){
		scroll('.billing-checkout');
	});

    $(document).on("click",".woocommerce-checkout-payment .place-order .button",function(e){
		console.log('open all divs');
		$('.panel-group .panel .accordion-toggle').attr("aria-expanded","true");
		$('.panel-group .panel .accordion-toggle').removeClass('collapsed');
		$('.panel-group .accordion-body').addClass('in');
		$('.panel-group .accordion-body').attr("aria-expanded","true");
		$('.panel-group .accordion-body').css("height","inherit");
	});

	function scroll(id){
		console.log( 'go to ' + id);
		console.log($(id).offset().top);
		$('html, body').animate({
			scrollTop: $(id).offset().top - 100
		});
	}
});