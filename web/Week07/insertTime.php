<?php
/**********************************************************
* Project: Time Card/ Clock in /Clock out.php
* Author: Davi Neves
* 
* Description: This file is the base to query a
*   PostgreSQL database from PHP.
***********************************************************/
session_start();
$_SESSION['shift_id'] = $shift_id;
$clock_in = $_POST['clock_in'];

$_SESSION['user'] = $_POST['username'];


require "../dbConnect.php";
$db = get_db();
$title = "MyTimeCard"
?>

<?php
// First, prepare the statement

$statement = $db->prepare("SELECT first_name, last_name, hire_date FROM employees WHERE first_name LIKE '%Davi%'");
$statement->execute();

// Go through each result
while ($row = $statement1->fetch(PDO::FETCH_ASSOC))
{
   // The variable "row" now holds the complete record for that
   // row, and we can access the different values based on their
   // name
   $first_name = $row['first_name'];
   $last_name = $row['last_name'];
   $shift_date = $row['shift_date'];
   $hire_date = $row['hire_date'];

   echo "<p><strong>Employee: $first_name $last_name, DOB: $birth_date, hired: $hire_date.</strong></p>";
}

try
{

		$query = "INSERT INTO time_card (shift_date, shift_type, clock_in, clock_out)
                  VALUES(:shift_date, :shift_type, :clock_in, :clock_out)";
						
		
	

		$new_time = $db->prepare($query);
			
		$new_time->bindValue(':shift_date', $shift_date);
		$new_time->bindValue(':shift_type', $shift_type);
		$new_time->bindValue(':clock_in', $clock_in);
		$new_time->bindValue(':clock_out', $clock_out);
		
		$new_time->execute();

		$shift_id = $db->lastInsertId("time_card_id_seq");

}

catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}

// redirect to a new page to actually show the new user
header("Location: clockout.php?shift_id=$shift_id");

die();

?>
