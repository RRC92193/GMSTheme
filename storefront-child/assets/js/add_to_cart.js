document.querySelector("single_add_to_cart_button").addEventListener("click", function(){
     fbq('track', 'AddToCart', {
      value: 1,
      currency: 'USD',
        });
});