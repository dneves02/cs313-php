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

<?php include('header.php');?>
<div class="container">
	<div class="row section">
		<div class="col-md-12 col-sm-12 content-top fill" id="clockin">
      <h1>Clock in / Clock out</h1>

      <form id="create_user" method="POST" action="insertUser.php">
				
				<input type="time" name="clock_in" size="16">
				<label for="username">Clock in</label> <br>
				
				<input type="time" name="clock_in" size="16">
				<label for="user_password">Clock out</label> <br>



			<br>
			
			<button><input type="submit" id="add" value="Add Time"></button>

			</form>
		
      <?php


      // First, prepare the statement

      $statement1 = $db->prepare("SELECT first_name, last_name, hire_date FROM employees WHERE first_name LIKE '%Davi%'");
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
   </div>
</div>

<?php include('footer.php');?>
