

<?php include('header.php');?>
<div class="container">
	<div class="row section">
		<div class="col-md-12 col-sm-12 content-top fill" id="clockin">
      <h1>Clock in / Clock out</h1>

         <form id="clock" method="POST" action="insertTime.php">       
               <button><input type="submit" id="clock_out" value="Clock Out"></button>      
         </form>
     
      </div>
   </div>
</div>

<?php include('footer.php');?>


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
   $clock_in = $row['clock_in'];

   echo "<p><strong>Employee: $first_name $last_name, Date: $shift_date, Clocked in: $clock_in.</strong></p>";
}

try
{

		$query = "UPDATE TABLE time_card (clock_out)
                  VALUES(:clock_out)";
						
		
	

		$new_time = $db->prepare($query);
			

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