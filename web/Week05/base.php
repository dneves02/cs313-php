
<?php
/**********************************************************
* Project Time Card
* Author: Davi Neves
* 
* Description: This file is the base to query a
*   PostgreSQL database from PHP.
***********************************************************/

require "dbConnect.php";
$db = get_db();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Time Card</title>
</head>

<body>
<div>

<h1>Payroll Hours</h1>

<?php


// First, prepare the statement

$statement1 = $db->prepare("SELECT first_name, last_name, hire_date FROM employees");
$statement1->execute();
// Go through each result
while ($row = $statement1->fetch(PDO::FETCH_ASSOC))
{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	$first_name = $row['first_name'];
	$last_name = $row['last_name'];
	$birth_date = $row['birth_date'];
	$hire_date = $row['hire_date'];

	echo "<p><strong>Employee: $first_name $last_name, DOB: $birth_date, hired: $hire_date.</strong></p>";
}

$statement2 = $db->prepare("SELECT date, shift, clock_in, clock_out FROM time_card");
$statement2->execute();
// Go through each result
while ($row = $statement1->fetch(PDO::FETCH_ASSOC))
{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	$shift = $row['shift'];
	$date = $row['date'];
	$clock_in = $row['clock_in'];
	$clock_out = $row['clock_out'];

	echo "<p>Date: $date - Shift: $shift , Start: $clock_in - End: $clock_out</p>";
}

?>


</div>

</body>
</html>