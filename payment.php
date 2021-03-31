<?
session_start();


$to = 'zzzlllzzz1@windowslive.com';
$subject = 'Ordering Bill';
$from = 'FastFoodOrdering@hotmail.com';
 
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
 
$message = '<html><body>';
$message .= '<h1>Hello customers</h1>';
$message .= "<h4>your total ordering price is '{$_POST[totalprice]} Baht.'</h4>";
$message .= '</body></html>';
 
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
	header( "Refresh:3; url=https://www.hameiei.com/shoppingcart_test/index.php#", true, 303);
	exit(0);

} else{
    echo 'Unable to send email. Please try again.';
	header( "Refresh:3; url=https://www.hameiei.com/shoppingcart_test/index.php#", true, 303);
	
}


//$totalprice = $_POST[totalprice];
//$orderdetail = $_SESSION[orderdetail];
//echo"total price = $totalprice<br>$orderdetail";

?>