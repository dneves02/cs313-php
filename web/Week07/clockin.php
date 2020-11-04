<?php
/**********************************************************
* Project: Time Card/ Clock in /Clock out.php
* Author: Davi Neves
* 
* Description: This file allows a user to clock in/out hours
***********************************************************/
session_start();
$_SESSION['user_id'] = $user_id;

require "../dbConnect.php";
$db = get_db();
$title = "MyTimeCard"
?>

<?php include('header.php');?>
<div class="container">
	<div class="row section">
		<div class="col-md-12 col-sm-12 content-top fill" id="clockin">
      <h1>My Time Clock</h1>

         <form id="clock" method="POST" action="insertTime.php">       
               <button><input type="submit" id="clock_in" value="Clock In"></button>      
         </form>
     
      </div>
   </div>
</div>

<?php include('footer.php');?>
