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
$title = "Create New User"

require "../dbConnect.php";
$db = get_db();

try
{

		$query1 = "INSERT INTO employees (first_name, last_name, birth_date, hire_date)
						VALUES (:first_name, :last_name, :birth_date, :hire_date)";

		$query2 = "INSERT INTO public.user (username, password, email)
						VALUES (:username, :password, :email)";

		$new_employee = $db->prepare($query1);
		$new_user = $db->prepare($query2);	

		$new_employee->bindValue(':first_name', $first_name);
		$new_employee->bindValue(':last_name', $last_name);
		$new_employee->bindValue(':birth_date', $birth_date);
		$new_employee->bindValue(':hire_date', $hire_date);


		$new_user->bindValue(':username', $username);
		$new_user->bindValue(':password', $password);
		$new_user->bindValue(':email', $email);

		$new_employee->execute();
		$new_user->execute();

}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}

// redirect to a new page to actually show the new user
header("Location: newUser.php");

die();

?>

