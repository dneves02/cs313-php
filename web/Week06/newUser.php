<?php
/**********************************************************
* Project: Time Card/ Create New User.php
* Author: Davi Neves
* 
* Description: This file is the base to create a new user.
***********************************************************/
$title = "Create New User";

require "../dbConnect.php";
$db = get_db();
?>

<?php include('header.php');?>

<div class="container">
	<div class="row section">
		<div class="col-md-12 col-sm-12 content-top fill">
		<h2>New Employee Added:</h2>

<?php

// First, prepare the statement
try
{
		$new_employee = $db->prepare("SELECT username, user_password, email, first_name, last_name, birth_date, hire_date FROM public.user where id=:eid");

      $new_employee->bindValue(":eid", $_GET["new_employee_id"]);

		$new_employee->execute();


		// Go through and check
		while ($row = $new_employee->fetch(PDO::FETCH_ASSOC))
		{
				// The variable "row" now holds the complete record for that
				// row, and we can access the different values based on their
            // name
            $username = $row['username'];
            $password = $row['password'];
            $email = $row['email'];
				$first_name = $row['first_name'];
				$last_name = $row['last_name'];
				$birth_date = $row['birth_date'];
				$hire_date = $row['hire_date'];

				echo "<p><strong>Employee: $first_name $last_name, DOB: $birth_date, hired: $hire_date. Username: $username - Password: $password , Email: $email.</strong></p>";
		}

}
catch (PDOException $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

?>

      </div>
   </div>
</div>
<?php include('footer.php');?>