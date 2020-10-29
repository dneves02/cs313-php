<?php
/**********************************************************
* Project: Time Card/ Create New User.php
* Author: Davi Neves
* 
* Description: This file is the base to create a new user.
***********************************************************/

require "../dbConnect.php";
$db = get_db();
$title = "Create New User"
?>

<?php include('header.php');?>
<div class="container">
	<div class="row section">
		<div class="col-md-12 col-sm-12 content-top fill">
		<h2>Create New User</h2>
		
			<form id="create_user" method="POST" action="insertNewUser.php">
				
				<input type="text" name="first_name" size="16">
				<label for="first_name">First Name: </label> <br>

				<input type="text" name="last_name" size="16">
				<label for="last_name">Last Name: </label> <br>

				<input type="text" name="email" size="16">
				<label for="email">Email:	</label> <br>

				<input type="text" name="birth_date" size="16">
				<label for="birth_date">DOB: </label> <br>
				
				<input type="text" name="hire_date" size="16">
				<label for="hire_date">Hired Date: </label> <br>
				
				<input type="text" name="username" size="16">
				<label for="username">Username: </label> <br>
				
				<input type="text" name="password" size="16">
				<label for="password">Password: </label> <br>



			<br>
			
			<button><input type="submit" href="insertUser.php" id="add">Create User</button>

			</form>
		
      </div>
   </div>
</div>
<?php include('footer.php');?>
