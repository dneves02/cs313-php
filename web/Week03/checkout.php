<?php $title = 'Neves Bookstore';?>
<?php $currentPage = 'Checkout';?>
<?php
   if(isset($_POST[""])
     {
         //echo $_POST["address1"];
            $address=$_POST["address1"];
      }
?>



document.getElementById('from').value = "<?php echo $address?>";
<?php include('head.php');?>

<?php include('header.php');?>
                     
   <div class="container">
        <div class="row">
            <div class="col-9 col-s-9">
               <section>               
                  <form>   
                  <h2>Total: $
							<input id="total" readonly type="text" name="total" value="0.00">
						</h2>

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

							<br><br><br>
							<input id="reset" type="reset" name="reset" value="Reset">
							<input id="validate" type="submit" name="validate" value="Submit" onclick="validateAll();">
						</div>
                  </form>
               </section>
            </div>
        </div>
    </div>
    
   <?php include('footer.php');?>
