<?php
session_start();
include_once("config.php");
?>
<?php include ("header.php");?>
<div id="moblogo"><a href="http://focusjovanie.com/premium/"><img src="img/minibarblack.png" /></a></div>
<link rel="stylesheet" href="css/viewcart.css">

 <h4>View Cart</h4>
 <div class="view-cart">

 <?php
 $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	
	if(isset($_SESSION["products"]))
    {
	$total = 0;
	$cart_items = 0;
	//echo '<form method="post" action="paypal-express-checkout/process.php">';
	echo '<table id="cart-table">';
		foreach ($_SESSION["products"] as $cart_itm)
    	{
		$product_code = $cart_itm["code"];
	 	$results = $mysqli->query("SELECT product_name,product_desc, price FROM products WHERE product_code='$product_code' LIMIT 1");
	 	$obj = $results->fetch_object();

	 		echo '<tr>';
			  echo '';
	 		  
	 		  echo '<td>';
	 		  	echo '<img src="products/'.$product_code.'.png" height="100px" width="100px">';
	 			echo '</td>';

	 		  echo '<td>';
	 		  	echo ''.$obj->product_name.' (Code :'.$product_code.')';
	 			echo '</td>';

	 		  echo '<td>';

	 		  	echo '<div class="p-price">ea. '.$currency.$obj->price.'</div>';
				echo '<form method="post" action="cart_update.php">';
					echo '<div class="p-qty">Qty: <input type="number" name="add_qty" value="'.$cart_itm["add_qty"].'" size="1"/></div>';
					echo '<button class="add_to_cart">Update</button>';
					echo '<input type="hidden" name="product_code" value="'.$product_code.'" />';
	                echo '<input type="hidden" name="type" value="add" />';
	                echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            	echo '</form>';
				echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">Remove</a></span>';
				echo '</td>';

	 		echo '</tr>';

			$subtotal = ($cart_itm["price"]*$cart_itm["add_qty"]);
			$total = ($total + $subtotal);
			$taxtotal = ($total*1.1);

			echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->product_name.'" />';
			echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
			echo '<input type="hidden" name="item_desc['.$cart_items.']" value="'.$obj->product_desc.'" />';
			echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["add_qty"].'" />';
			$cart_items ++;
			
        }
    	echo '</table>';



    	echo '<div id="cart-bottom">';

		echo '<span class="totaltext">';
		echo '<h3>Subtotal : '.$currency.$total.'&nbsp; </h3>';
		echo '<a href="checkout.php"><h2>Check-Out</h2></a>';
		echo '</span>';
		//echo '</form>';

		echo '</div>';
		
    }else{
		echo 'Your Cart is empty';
	}
	
    ?>
    </div>
</div>

</div>
<?php include 'footer.php';?>

</body>

</html>