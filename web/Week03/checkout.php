<?php $title = 'Neves Bookstore';?>
<?php $currentPage = 'Checkout';?>
<?php
session_start();
    $totalCost = $_SESSION['totalCost'];
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

<?php include('head.php');?>

<?php include('header.php');?>

    <div class="container">
        <div class="row">
            <div class="col-12 col-s-12">
                <section>
                    <h2 class="alert-heading">Shopping Cart</h2>
                    <p>Please carefully review your order information before you submit it.</p>
                    <h3 class="">Items selected:</h3>
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
                    ?>

                    <form action="orderConfirmation.php?totalCost=<?php echo $totalCost ?>" method="GET" class="buttons">
                        <?php print "<h2>Your total is <b>$$totalCost</b></h2>"; ?>
                        <div class="form-box">
							First Name<br>
							<input id="first_name" type="text" name="first_name" required>
							<span id="firstNameVerify" class="error" style="visibility: hidden;">Please enter a first name</span>

							<br><br>Last Name<br>
							<input id="last_name" type="text" name="last_name" required>
							<span id="lastNameVerify" class="error" style="visibility: hidden;">Please enter a last name</span>

							<br><br>Address<br>
							<textarea id="address" name="address" rows="5" required placeholder="Street, city, state, zip"></textarea>
							<span id="addressVerify" class="error" style="visibility: hidden;">Please enter an address</span>

							<br><br>Phone<br>
							<input id="phone" type="text" name="phone" required placeholder="123-555-5555" onchange="validatePhone(this);" onfocus="this.value=''">
							<span id="phoneVerify" class="error" style="visibility: hidden;">Please enter a valid phone number</span>

							<br><br>Credit Card type
							<span id="creditTypeVerify" class="error" style="visibility: hidden;">Please select a credit card type</span><br>
							<input id="card_visa" type="radio" name="card" value="Visa">Visa<br>
							<input id="card_master" type="radio" name="card" value="MasterCard">MasterCard<br>
							<input id="card_american" type="radio" name="card" value="American Express">America Express<br>

							<br><br>Credit Card Number<br>
							<input id="credit_card" type="text" name="credit_card" maxlength="19" placeholder="1111-1111-1111-1111" onchange="validateCardNumber(this)">
							<span id="cardNumberVerify" class="error" style="visibility: hidden;">Please enter a card number</span>

							<br><br>Credit Card Expiration Date<br>
							<input id="exp_date" type="text" name="exp_date" maxlength="7" placeholder="01/2020" onchange="validateDate(this)">
							<span id="dateVerify" class="error" style="visibility: hidden;">Please enter an expiration date</span>
                    
                            <h3>Do you want to place this order?</h3>
                            <input id="confirm" type="submit" name="btn-submit" value="Confirm">
                            <input id="cancel" type="submit" name="btn-cancel" value="Cancel">
                        </div>
                    </form>
                </section>
		    </div>
		</div>
    </div>

    <?php include('footer.php');?>

