<?php $title = 'Neves Bookstore';?>
<?php $currentPage = 'Order Confirmation';?>
<?php
    $firstName =      $_GET ["first_name"];
    $lastName =       $_GET ["last_name"];
    $address =        $_GET ["address"];
    $phone =          $_GET ["phone"];
    $cardType =       $_GET ["card"];
	 $cardExpiration = $_GET ["exp_date"];
	 $$totalCost = $_GET ["totalCost"]

    //Made substring for cardNumber to output the last 4
    $cardNumber =       $_GET ["credit_card"];
    $cardLast4 = substr($cardNumber, 15, 19);
?>    
<?php include('head.php');?>

<?php include('header.php');?>
                     
   <div class="container">
		<div class="col-9 col-s-9">
			<h2 class="alert-heading">Order Confirmation for:</h2>
	
			<?php print "<h2>$firstName $lastName</h2>";?>
		
			<p>Your order has been successful.</p>
	
	<?php
		 print "<h3>Your total is <b>$$totalCost</b></h3>";
		 print "First Name: $firstName<br />";
		 print "Last Name: $lastName<br />";
		 print "Address: $address<br />";
		 print "Phone Number: $phone<br />";
		 print "Credit Card Type: $cardType<br />";
		 print "Credit Card Number: **** **** **** $cardLast4<br />";
		 print "Credit Card Expiration Date: $cardExpiration<br />";
	?>

      </div>
   </div>
    
   <?php include('footer.php');?>
