<?php
/**********************************************************
* Project: Time Card/ My Hours.php
* Author: Davi Neves
* 
* Description: This file displays employees time card hours.
***********************************************************/

require "../dbConnect.php";
$db = get_db();
$title = "MyTimeCard"
?>

<?php include('header.php');?>
<div class="container">
	<div class="row section">
		<div class="col-md-12 col-sm-12 content-top fill" id="my_hours">
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

      $statement2 = $db->prepare("SELECT shift_date, shift_type, clock_in, clock_out FROM time_card");
      $statement2->execute();
      // Go through each result
      while ($row = $statement2->fetch(PDO::FETCH_ASSOC))
      {
         // The variable "row" now holds the complete record for that
         // row, and we can access the different values based on their
         // name
         $shift_date = $row['shift_date'];
         $shift_type = $row['shift_type'];
         $clock_in = $row['clock_in'];
         $clock_out = $row['clock_out'];

         echo "<p>Date: $shift_date - Shift: $shift_type , Start: $clock_in - End: $clock_out</p>";
      }

      ?>
      </div>
   </div>
</div>

<?php include('footer.php');?>
