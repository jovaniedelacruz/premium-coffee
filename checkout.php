<?php
session_start();
include_once("config.php");
?>
<?php include ("header.php");?>

<div id="moblogo"><a href="http://focusjovanie.com/premium/"><img src="img/minibarblack.png" /></a></div>

<link rel="stylesheet" href="css/viewcart.css">
<div class="view-cart">
<div id="cartorder">
 <?php
 $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	
	if(isset($_SESSION["products"]))
    {
	$total = 0;
	$cart_items = 0;
	//echo '<form method="post" action="paypal-express-checkout/process.php">';
	echo '<table id="cart-table">';
	echo '<caption>Cart</caption>';
		foreach ($_SESSION["products"] as $cart_itm)
    	{
		$product_code = $cart_itm["code"];
	 	$results = $mysqli->query("SELECT product_name,product_desc, price FROM products WHERE product_code='$product_code' LIMIT 1");
	 	$obj = $results->fetch_object();

	 		echo '<tr>';

	 		  echo '<td>';
	 		  	echo ''.$obj->product_name.' (Code :'.$product_code.')';
	 			echo '</td>';

	 		  echo '<td>';

	 		  	echo '<div class="p-price">ea. '.$currency.$obj->price.'</div>';
					echo '<div class="p-qty">Qty: '.$cart_itm[add_qty].' </div>';
				echo '</td>';

	 		echo '</tr>';

			$subtotal = ($cart_itm["price"]*$cart_itm["add_qty"]);
			$total = ($total + $subtotal);
			$taxtotal = 6.99+($total*1.1);

			echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->product_name.'" />';
			echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
			echo '<input type="hidden" name="item_desc['.$cart_items.']" value="'.$obj->product_desc.'" />';
			echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["add_qty"].'" />';
			$cart_items ++;
			
        }
        echo '
    			<tr>
    				<td>Subtotal : '.$currency.$total.'</td>
    				<td>Shipping = $6.99</td>
    			</tr>
    			<tr><td>&nbsp;</td><td>Tax = 10%<td></tr>
    		 ';


    	echo '</table><h2>Total : '.$currency.$taxtotal.'&nbsp; </h2>';

		
    }else{
		echo 'Your Cart is empty';
	}
	
    ?>
</div>
    <div id="billship" style="padding-top: 4em;">
    <form id="billingform" method="post" action="sendbilling.php">

  <input id="content" type="hidden" name="content"/>
    <script>
    $('form').submit(function(){
	    var cartgo = $('#cartorder').html();
	    $('#content').val(cartgo);
	});
    </script>

    	<?php include 'billship.php';?>
    </form>
    </div>
</div>

</body>

</html>