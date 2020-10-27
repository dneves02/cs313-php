<?php
/**********************************************************
* Project: Time Card/ Create New User.php
* Author: Davi Neves
* 
* Description: This file is the base to create a new user.
***********************************************************/

require "../dbConnect.php";
$db = get_db();
$title = "Create User"
?>

<?php include('header.php');?>
<div class="container">
	<div class="row section">
		<div class="col-md-12 col-sm-12 content-top fill" id="create_user">
		<h1>Create New User</h1>
		<form method="post" action="#">
		First Name:<input type="text" name="first_name" size="20"><br>
		Last Name:<input type="text" name="last_name" size="20"><br>
		Email: <input type="email" name="email" size="20"><br>
		DOB:<input type="date" name="birth_date" size="20"><br>
		Hired Date:<input type="date" name="hire_date" size="20"><br>
		Username:<input type="text" name="username" size="20"><br>
		Password:<input type="text" name="password" size="20"><br>
		<br>
		<b></b>
		<br>
		
		<button><a href="#" id="add">Create User</a></button>

		</form>
		
		<?php

      // First, prepare the statement
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$birth_date = $_POST['birth_date'];
		$hire_date = $_POST['hire_date'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$new_user = $db->prepare("INSERT INTO employees (first_name, last_name, birth_date, hire_date)
								VALUES ($first_name, $last_name, $birth_date, $hire_date)");
		$new_employee = $db->prepare("INSERT INTO public.user (username, password, email)
								VALUES ($username, $password, $email )");
      $new_employee->execute();
		$new_user->execute();
		
		// Go through and check
		$statement = $db->prepare("SELECT employees (first_name, last_name, birth_date, hire_date) FROM employees WHERE (first_name = $first_name)");
      $statement->execute();
      while ($row = $statement1->fetch(PDO::FETCH_ASSOC))
      {
         // The variable "row" now holds the complete record for that
         // row, and we can access the different values based on their
         // name
         $first_name1 = $row['first_name'];
         $last_name1 = $row['last_name'];
         $birth_date1 = $row['birth_date'];
         $hire_date1 = $row['hire_date'];

         echo "<p><strong>Employee: $first_name1 $last_name1, DOB: $birth_date1, hired: $hire_date1.</strong></p>";
      }
      ?>
      </div>
   </div>
</div>
<?php include('footer.php');?>
