<?php
/**********************************************************
* Project: Time Card/ Clock in /Clock out.php
* Author: Davi Neves
* 
* Description: This file is the base to query a
*   PostgreSQL database from PHP.
***********************************************************/

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
   $birth_date = $row['birth_date'];
   $hire_date = $row['hire_date'];

   echo "<p><strong>Employee: $first_name $last_name, DOB: $birth_date, hired: $hire_date.</strong></p>";
}
?>