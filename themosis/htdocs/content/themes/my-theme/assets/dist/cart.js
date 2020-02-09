(function($){

	$(function(){
		let $body = $('body');

		$body.on('click', '.__quantity button', function() {
			let $button = $(this),
				$quantity = $button.parent().find('span'),
				quantity = parseInt($quantity.text());
				$.get($button.data('action'), function(data){
					let elements = ['.__head', '.__product-listing', '.__summary'],
						$cart = $(data).filter('.cart');
					for (let key in elements) {
						$('.cart ' + elements[key]).replaceWith($cart.find(elements[key]));
					}
				});				
			if ($button.is('.add')) {
				quantity += 1;
			} else {
				quantity -= 1;
			}
			$quantity.text(quantity);
		});

		$body.on('click', '.btn-addtocart', function(e) {
			e.preventDefault();
			let $cartButton = $(this);
			if (!$body.is('.cart-open')) {
				$('#openCart').trigger('click');
				$body.addClass('cart-loading');
				$.get($cartButton.attr('href'), function(data) {
					let elements = ['.__head', '.__product-listing', '.__summary'],
						$cart = $(data).filter('.cart');
					
					for (let key in elements) {
						
						$('.cart ' + elements[key]).replaceWith($cart.find(elements[key]));
					}

					$('#openCart span').replaceWith($(data).filter('#Header').find('#openCart span'));
					$body.removeClass('cart-loading');
				});
			}
		});

	});

})(jQuery);