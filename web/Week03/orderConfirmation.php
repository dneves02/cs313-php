<?php
session_start();

    $totalCost = $_GET['totalCost'];
    $confirm =      $_GET ["btn-submit"];
    $cancel =       $_GET ["btn-cancel"];
    $firstName =      $_GET ["first_name"];
    $lastName =       $_GET ["last_name"];
    $address =        $_GET ["address"];
    $phone =          $_GET ["phone"];
    $cardType =       $_GET ["card"];
    $cardExpiration = $_GET ["exp_date"];
    $$totalCost = $_GET ["totalCost"]
?>

<?php include('head.php');?>

<?php include('header.php');?>
    <div class="container">
        <section>    
            <div class="row">
                <div class="col-12 col-s-12">
                

                    <?php
                    if (isset($confirm))
                    {
                        print "<h2>Your order was confirmed!</h2>";
                    }
                    if (isset($cancel))
                    {
                        print "<h2>Your order was cancelled!</h2>";
                    }
                    ?>

	
<?php print "<h2>$firstName $lastName</h2>";?>

<?php
 print "<h3>Your total is: <b>$$_GET['totalCost']</b></h3>";

 print "Address: $address<br />";
 print "Phone Number: $phone<br />";
 print "Credit Card Type: $cardType<br />";
 print "Credit Card Number: **** **** **** $cardLast4<br />";
 print "Credit Card Expiration Date: $cardExpiration<br />";
?>

                </div>
			</div>
        </section>
        <?php include('footer.php');?>
    </div>