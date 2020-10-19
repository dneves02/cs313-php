
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

// In this example, for simplicity, the query is executed
// right here and the data echoed out as we iterate the query.

// You could imagine that in a more involved application, we
// would likely query the database in a completely separate file / function
// and build a list of objects that held the components of each
// scripture. Then, here on the page, we could simply call that 
// function, and iterate through the list that was returned and
// print each component.



// First, prepare the statement

// Notice that we avoid using "SELECT *" here. This is considered
// good practice so we don't inadvertently bring back data we don't
// want, especially if the database changes later.
$statement = $db->prepare("SELECT , first_name, last_name, hire_date FROM employees");
$statement->execute();

// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	$first_name = $row['first_name'];
	$last_name = $row['last_name'];
	$birth_date = $row['birth_date'];
	$hire_date = $row['hire_date'];

	echo "<p><strong>$first_name $last_name, born on $birth_date,  hired: $hire_date.</strong></p>";
}

?>


</div>

</body>
</html>