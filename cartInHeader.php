
<style>

.cartItemsNum{
	color:#fff;
	border-radius: 20px;
    background: #cad661;
    position: absolute;
    top: -16px;
    width: 25px;
    z-index: -1;
    right: -9px;
}
.cart-menu img{width:25px;}

</style>

$cartItems =  WC()->cart->get_cart_contents_count();
 		if($cartItems > 0){ 
			
 			$Items  = $cartItems;
		
 			}else{
			
 			$Items  = '0';
 		}?>
			
	<script>
			$(document).ready(function(){
			$(".cart-menu").html("<a href='/cart'><img src='/wp-content/themes/naked-wordpress-master/images/cart.svg'/><div class='cartItemsNum'><?php echo $Items;?></div></a>");
				});
		 $(document.body).on('updated_cart_totals', function () {
        // Get the quantity of products in cart
        var total = $('.qty').val();
        //update the cart icon on cart update
        $(".cartItemsNum").html(total);
    });
		
	</script>
  
 
