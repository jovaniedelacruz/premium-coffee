<?php
session_start();
include_once("config.php");
?>

<?php include ("header.php");?>

    <div id="moblogo"><a href="http://focusjovanie.com/premium/"><img src="img/minibarblack.png" /></a></div>

<div class="container" style="margin-top:-2em;">
	<?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM products ORDER BY product_code ASC");
	
    if ($results) { 
		$i=0;

        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
        	if($i % 4 ==0){
        		echo '<div class="row">';
        	}
        		echo '<div class="three columns">';
					echo '<div class="product">';
                    echo '<form method="post" action="cart_update.php">';
					echo '<a href="products/'.$obj->product_code.'.php"><img src="products/'.$obj->product_code.'.png" width="100%">';
					echo '<h6>'.$obj->product_name.'</h6>';
					echo '<div id="addq">'.$currency.$obj->price.'</a> &nbsp;';

                    echo 'Qty <input type="number" name="add_qty" value="1" size="3" /> </div>';
                    echo '<button class="add_to_cart">Add To Cart</button>';

                    echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
                    echo '<input type="hidden" name="type" value="add" />';
                    echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
                    echo '</form>';
		            echo '</div>';
		        echo '</div>';
            $i++;
            if($i % 4 ==0){
        		echo '</div>';
        	}
        }
    
    }
    ?>


<?php include ("footer.php");?>