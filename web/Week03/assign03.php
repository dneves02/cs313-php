<?php
    $firstName =      $_GET ["first_name"];
    $lastName =       $_GET ["last_name"];
    $address =        $_GET ["address"];
    $phone =          $_GET ["phone"];
    $cardType =       $_GET ["card"];
    $cardExpiration = $_GET ["exp_date"];

    //Made substring for cardNumber to output the last 4
    $cardNumber =       $_GET ["credit_card"];
    $cardLast4 = substr($cardNumber, 15, 19);

    $item_0 =  $_GET ["item_0"];
    $item_1 =  $_GET ["item_1"];
    $item_2 =  $_GET ["item_2"];
    $item_3 =  $_GET ["item_3"];
    $item_4 =  $_GET ["item_4"];
    $item_5 =  $_GET ["item_5"];
    $item_6 =  $_GET ["item_6"];
    $item_7 =  $_GET ["item_7"];
    $item_8 =  $_GET ["item_8"];
    $item_9 =  $_GET ["item_9"];
    $item_10 = $_GET ["item_10"];
    $item_11 = $_GET ["item_11"];
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Search Engine Optimization -->
	<title>Neves Bookstore - Purchase Review</title>
	<meta name="description" content="Neves Bookstore">
	<meta name="keywords" content="Online, Bookstore, Books, Neves">
	<meta name="author" content="Davi Neves">

	<!-- responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- encoding -->
    <meta charset="UTF-8" />

    <!-- styles -->
	<link rel="stylesheet" href="./assign11.css" />	
</head>

<body>
    <header>
        <h2>Neves Bookstore</h2>
    </header>

    <div class="clearfix">
        <section>
			<h1>Purchase Review</h1>
			<div class="row">
				<div class="col-3 col-s-3 menu">
					<div class="button-link-container">
						<a href="#"><div class="button-link link-current">Children</div></a><br />
						<a href="../index.html"><div class="button-link ">Index</div></a><br />
					</div>
				</div>

                <div class="col-9 col-s-9">
                    <h2 class="alert-heading">Order Confirmation for
                    <?php
                        print "$firstName $lastName";
                    ?>
                    </h2>
                    <p>Please carefully review your order information before you submit it.</p>
                    <?php
                        print "First Name: $firstName<br />";
                        print "Last Name: $lastName<br />";
                        print "Address: $address<br />";
                        print "Phone Number: $phone<br />";
                        print "Credit Card Type: $cardType<br />";
                        print "Credit Card Number: **** **** **** $cardLast4<br />";
                        print "Credit Card Expiration Date: $cardExpiration<br />";
                    ?>
                   
                    <h3 class="">Items purchased</h3>

                    <?php
                        $txt = "<div class='d-card-columns'>";
                        $totalCost = 0;

                        if (isset($item_0))
                        {
                            $txt = $txt . 
                                "<div class='d-card'>
                                    <img src='./static/Classic_Bedtime_Stories.jpg' alt='Classic_Bedtime_Stories'>
                                    <div class='d-card-header'>
                                        Classic Bedtime Stories
                                    </div>
                                    <div class='d-card-body'>
                                        $ 19.95
                                    </div>
                                </div>";
                            $totalCost = $totalCost + 19.95;
                        }
                        if (isset($item_1))
                        {
                            $txt = $txt . 
                                "<div class='d-card'>
                                    <img src='./static/Classic_Storybook_Fables.jpg' alt='Classic_Storybook_Fables'>
                                    <div class='d-card-header'>
                                        Classic Storybook Fables
                                    </div>
                                    <div class='d-card-body'>
                                        $ 15.19
                                    </div>
                                </div>";
                            $totalCost = $totalCost + 15.19;
                        }
                        if (isset($item_2))
                        {
                            $txt = $txt . 
                                "<div class='d-card'>
                                    <img src='./static/Classic_Fairy_Tales_vol1.jpg' alt='Classic_Fairy_Tales_vol1'>
                                    <div class='d-card-header'>
                                        Classic Fairy Tales Vol.1
                                    </div>
                                    <div class='d-card-body'>
                                        $ 19.95
                                    </div>
                                </div>";
                            $totalCost = $totalCost + 19.95;
                        }
                        if (isset($item_3))
                        {
                            $txt = $txt . 
                                "<div class='d-card'>
                                    <img src='./static/Childrens_Classic_Collection.jpg' alt='Childrens_Classic_Collection'>
                                    <div class='d-card-header'>
                                        Children's Classic Collection
                                    </div>
                                    <div class='d-card-body'>
                                        $ 29.98
                                    </div>
                                </div>";
                            $totalCost = $totalCost + 29.98;
                        }
                        if (isset($item_4))
                        {
                            $txt = $txt . 
                                "<div class='d-card'>
                                    <img src='./static/The_Little_Prince.jpg' alt='The_Little_Prince'>
                                    <div class='d-card-header'>
                                        The Little Prince
                                    </div>
                                    <div class='d-card-body'>
                                        $ 17.49
                                    </div>
                                </div>";
                            $totalCost = $totalCost + 17.49;
                        }
                        if (isset($item_5))
                        {
                            $txt = $txt . 
                                "<div class='d-card'>
                                    <img src='./static/Childrens_Classics/The_Little_Prince.jpg' alt='The_Little_Prince'>
                                    <div class='d-card-header'>
                                        The Little Prince
                                    </div>
                                    <div class='d-card-body'>
                                        $ 17.99
                                    </div>
                                </div>";
                            $totalCost = $totalCost + 17.99;
                        }
                        if (isset($item_6))
                        {
                            $txt = $txt . 
                                "<div class='d-card'>
                                    <img src='./static/Childrens_Classics/Aladdin.jpg' alt='Aladdin'>
                                    <div class='d-card-header'>
                                        Aladdin
                                    </div>
                                    <div class='d-card-body'>
                                        $ 17.95
                                    </div>
                                </div>";
                            $totalCost = $totalCost + 17.95;
                        }
                        if (isset($item_7))
                        {
                            $txt = $txt . 
                                "<div class='d-card'>
                                    <img src='./static/Childrens_Classics/Don_Quixote_of_the_Mancha.jpg' alt='Don_Quixote_of_the_Mancha'>
                                    <div class='d-card-header'>
                                        Don Quixote of the Mancha
                                    </div>
                                    <div class='d-card-body'>
                                        $ 45.99
                                    </div>
                                </div>";
                            $totalCost = $totalCost + 45.99;
                        }
                        if (isset($item_8))
                        {
                            $txt = $txt . 
                                "<div class='d-card'>
                                    <img src='./static/Childrens_Classics/Fables.jpg' alt='Fables'>
                                    <div class='d-card-header'>
                                        Fables
                                    </div>
                                    <div class='d-card-body'>
                                        $ 17.95
                                    </div>
                                </div>";
                            $totalCost = $totalCost + 17.95;
                        }
                        if (isset($item_9))
                        {
                            $txt = $txt . 
                                "<div class='d-card'>
                                    <img src='./static/Childrens_Classics/Russian_Fairy_Tales.jpg' alt='Russian_Fairy_Tales'>
                                    <div class='d-card-header'>
                                        Russian Fairy Tales
                                    </div>
                                    <div class='d-card-body'>
                                        $ 13.98
                                    </div>
                                </div>";
                            $totalCost = $totalCost + 13.98;
                        }
                        if (isset($item_10))
                        {
                            $txt = $txt . 
                                "<div class='d-card'>
                                    <img src='./static/Childrens_Classics/Sherlock_Holmes.jpg' alt='Sherlock_Holmes'>
                                    <div class='d-card-header'>
                                        Sherlock Holmes
                                    </div>
                                    <div class='d-card-body'>
                                        $ 14.89
                                    </div>
                                </div>";
                            $totalCost = $totalCost + 14.89;
                        }
                        if (isset($item_11))
                        {
                            $txt = $txt . 
                                "<div class='d-card'>
                                    <img src='./static/Childrens_Classics/The_Three_Musketeers.jpg' alt='The_Three_Musketeers'>
                                    <div class='d-card-header'>
                                        The Three Musketeers
                                    </div>
                                    <div class='d-card-body'>
                                        $ 11.99
                                    </div>
                                </div>";
                            $totalCost = $totalCost + 11.99;
                        }                

                        $txt = $txt . "</div>";

                        print "$txt";
                        print "<h2>Your total is <b>$$totalCost</b></h2>";

                    ?>

                    <form action="assign11_a.php" method="GET" class="buttons">
                        <h3>Do you want to submit this order?</h3>
                        <input id="confirm" type="submit" name="btn-submit" value="Confirm">
                        <input id="cancel" type="submit" name="btn-cancel" value="Cancel">                       
                    </form>
				</div>
			</div>
        </section>    
    </div>

    <footer>
		<br /><br />
		Address. xxx XXX Portland, OR xxxxx<br />
		Tel. 123-456-7890<br />      
		Email. dneves@gmail.com<br /><br />
		© 2020 by Neves.
		<br /><br />
		<a href="#">Contact Us!</a>
    </footer>
</body>
</html>