<?php
/**********************************************************
* Project: Time Card/ Clock in /Clock out.php
* Author: Davi Neves
* 
* Description: This file allows a user to clock in/out hours
***********************************************************/

require "../dbConnect.php";
$db = get_db();
$title = "MyTimeCard"
?>

<?php include('header.php');?>
<div class="container">
	<div class="row section">
		<div class="col-md-12 col-sm-12 content-top fill" id="clockin">
      <h1>My Time Clock</h1>

      <form id="create_user" method="POST" action="insertUser.php">
      
               <br>
               
               <button><input type="submit" id="add_time" value="Clock In"></button>
               
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
