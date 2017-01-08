<!DOCTPYE HTML>
<head>
	<!--Site Info -->
	<meta charset="UTF-8">
	<html lang="en-US">
	<meta name="author" content="Jovanie De La Cruz focusjovanie.com">
	<meta name="keywords" content="PBL, Phi, Beta, Lambda, Wed Design, 2016, Illinois, UIUC">
	<meta name="description" content=" Premium Coffee - Entry for PBL Web Design 2016 By Jovanie De La Cruz">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS -->
	<link rel="stylesheet" href="css/normalize.css">
  	<link rel="stylesheet" href="css/skeleton.css">
  	<link rel="stylesheet" href="css/style.css">

  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- JavaScript -->
	<script src="js/jquery-2.2.2.js"></script>
	<script>
		$(function() {
		    $( "#hideshow" ).click(function() {
		        $( "#mobilenav" ).toggle();
		    });
		});
</script>
</head>

<body>

<header>
    <!--Toggle-->
    <input type='button' class="to_nav" id='hideshow' value='☰'> 
    <div class="cartwrapper"><a href="view_cart.php"><i class="fa fa-shopping-cart"></i></a></div>

</header>
	&nbsp;
	<!--Desktop-->
	<div id="splitnav">
	    <ul>
	        <li><a href="http://focusjovanie.com/premium/story.php">Our<br>Story</a></li>
	        <li><a href="http://focusjovanie.com/premium/coffee.php">The <br>Coffee</a></li>
	        <li><a href="http://focusjovanie.com/premium/cafe.php">Cafe/<br>Menu</a></li>
	        <li><a href="http://focusjovanie.com/premium/shop.php">Shop<br>Now</a></li>
	    </ul>
	</div>

	<!--Mobile-->
	<div id="mobilenav">
         <ul> 
	        <li><a href="http://focusjovanie.com/premium/story.php">Our Story</a></li>
	        <li><a href="http://focusjovanie.com/premium/coffee.php">The Coffee</a></li>
	        <li><a href="http://focusjovanie.com/premium/cafe.php">Cafe & Menu</a></li>
	        <li><a href="http://focusjovanie.com/premium/shop.php">Shop Now</a></li>
	    </ul>

	</div>

<div id="clear" style="clear:both;
border:none;
width:100%;">&nbsp;</div>
	<!--end primary_nav-->

