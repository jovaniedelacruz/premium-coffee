<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
	$address2 = $_POST['address2'];
	$city = $_POST['city'];
	$zipcode = $_POST['zipcode'];
	$country = $_POST['country'];
	$state = $_POST['state'];
	$phone = $_POST['phone'];
	$orderresults = $_POST['content'];
	
	$credit = $_POST['credit'];
	$cardname = $_POST['cardname'];
	$creditnumber = $_POST['creditnumber'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$securitycode = $_POST['securitycode'];
	
    $from = 'From: premium@focusjovanie.com'; 
    $to = 'jovaniedelacruz@gmail.com'; 
    $subject = 'Order on Premium';
    $human = $_POST['human'];
	
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n"; //adds content type to headers
$headers .= $from . "\r\n"; //adds the sender details
 //sends the email

    $body = "
	From: $name \n 
	E-Mail: $email\n 
	Order:\n 

	<html><body>
	$orderresults
	</body></html>
	\n
	
	Address:\n
	$address \n
	$address2 \n
	$city $zipcode \n
	$state $country \n
	$phone \n
	
	Credit Information:\n
	Card Name: $cardname \n
	Card: $credit $creditnumber \n
	Expiration: $month / $year \n
	Security Code: $securitycode
	
	";
				
    if ($_POST['submit']) {				 
        if (mail($to,$subject,$body,$headers)) { 
	    echo ' <h1>SUCCESS</h1>
	    <html><body>
	    '.$orderresults.'
	    </body></html>
	    ';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } 
?>