<?php
session_start();
include_once("config.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Premium Coffee</title>
<script src="js/jquery.min.js"></script>
</head>

<body>
<h1> words</h1>


	<?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM products ORDER BY date DESC");
	
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '<div id="product">';
			echo '<a href="product/'.$obj->id.'.php"><img src="img/'.$obj->image.'" height="225px" width="225">';
			echo '<h4>'.$obj->name.'</h4>';
			echo '<h4>'.$currency.$obj->price.'</h4></a>';
            echo '</div>';
        }
    
    }
    ?>

</body>
</html>