<?php
/**********************************************************
* Project Time Card/ Login.php
* Author: Davi Neves
* 
* Description: This file is the base to login into the php.
***********************************************************/

require "../dbConnect.php";
$db = get_db();
$title = "MyTimeCard"
?>

<?php include('header.php');?>
<div class="container">
	<div class="row section">
		<div class="col-md-12 col-sm-12 content-top fill" id="login">
      <h1>Login</h1>

         <form id="create_user" method="POST" action="insertUser.php">
						
				<input type="text" name="username" size="16">
				<label for="username">Username: </label> <br>
				
				<input type="text" name="user_password" size="16">
				<label for="user_password">Password: </label> <br>



			<br>
			
			<button><input type="submit" id="add" value="Login"></button>
         <br>
         
         <br>
         <a href="createUser.php">Sign Up</a>
			</form>
   
      </div>
   </div>
</div>
<?php include('footer.php');?>
