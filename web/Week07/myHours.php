<?php
/**********************************************************
* Project: Time Card/ My Hours.php
* Author: Davi Neves
* 
* Description: This file displays employees time card hours.
***********************************************************/

require "../dbConnect.php";
$db = get_db();
$title = "MyTimeCard"
?>

<?php include('header.php');?>
<div class="container">
	<div class="row section">
		<div class="col-md-12 col-sm-12 content-top fill" id="my_hours">
      <h1>My Payroll Hours</h1>

      <form id="get_hours" method="POST" action="getMyHours.php">
				
				<input type="text" name="username" size="16">
				<label for="username">Username: </label> <br>
				
				<input type="text" name="user_password" size="16">
				<label for="user_password">Password: </label> <br>

			<br>
			
			<button><input type="submit" id="time_card" value="My Hours"></button>

			</form>

      </div>
   </div>
</div>

<?php include('footer.php');?>
