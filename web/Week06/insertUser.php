<?php
/**********************************************************
* Project: Time Card/ Create New User.php
* Author: Davi Neves
* 
* Description: This file is the base to create a new user.
***********************************************************/

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$birth_date = $_POST['birth_date'];
$hire_date = $_POST['hire_date'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];


require "../dbConnect.php";
$db = get_db();
$title = "Create New User"

try
{

		$query = "INSERT INTO public.user (username , user_password, email, first_name , last_name, birth_date, hire_date)
						VALUES(:username , :user_password, :email, :first_name , :last_name, :birth_date, :hire_date)";
		
	

		$new_employee = $db->prepare($query);
			
		$new_employee->bindValue(':username', $username);
		$new_employee->bindValue(':user_password', $user_password);
		$new_employee->bindValue(':email', $email);
		$new_employee->bindValue(':first_name', $first_name);
		$new_employee->bindValue(':last_name', $last_name);
		$new_employee->bindValue(':birth_date', $birth_date);
		$new_employee->bindValue(':hire_date', $hire_date);
		
		$new_employee->execute();

		$new_employeeId = $db->lastInsertId("user_id_seq");

}

catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}

// redirect to a new page to actually show the new user
header("Location: newUser.php?new_employee_id=$new_employeeId");

die();

?>

