
<?php
/**********************************************************
* Project: Time Card/ Base.php
* Author: Davi Neves
* 
* Description: This file is the base to query a
*   PostgreSQL database from PHP.
***********************************************************/

require "../dbConnect.php";
$db = get_db();
$title = "MyTimeCard"
?>

<?php include('header.php');?>

<div class="container">
	<h1>Payroll Hours</h1>
	<div class="row section">
		<div class="col-md-12 col-sm-12 content-top fill" id="section0.4">
			<div class="header">Index</div>
				<ul class="banner">
					<li><a href="login.php">Login to MyTimeCard App</a></li>
					<li><a href="createUser.php">Create New User</a></li>
					<li><a href="clockin.php">Clock in/Clock out</a></li>
					<li><a href="myHours.php">My Hours</a></li>
				</ul>
			</div>
		</div>
	</div>

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

?>


</div>

<?php include('footer.php');?>
