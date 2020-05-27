jQuery(document).ready(function(){

	jQuery('.theFlip-front').on('click', function() {
		jQuery(this).parent('.flipcard--front').parent('.flipcard').toggleClass('is-flipped');
		});
	
	jQuery('.theFlip-back').on('click', function() {
		jQuery(this).parent('.flipcard--back').parent('.flipcard').toggleClass('is-flipped');
	});



	jQuery('.brandImg').on('mouseover', function(){
		src = jQuery(this).attr('hover-image');
		jQuery(this).attr('src', src);
	})
	jQuery('.brandImg').on('mouseout', function(){
		src = jQuery(this).attr('product-image');
		jQuery(this).attr('src', src);
	});
});