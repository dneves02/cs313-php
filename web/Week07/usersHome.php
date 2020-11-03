<?php
/**********************************************************
* Project Time Card/ Login.php
* Author: Davi Neves
* 
* Description: This file is the base to login into the php.
***********************************************************/
$username = $_POST['username'];
$user_password = $_POST['user_password'];

require "../dbConnect.php";
$db = get_db();
$title = "MyTimeCard"
?>

<?php include('header.php');?>
<div class="container">
	<div class="row section">
		<div class="col-md-12 col-sm-12 content-top fill" id="section0.4">
			<div class="header">My Home Page</div>
				<ul class="banner">
					
					<li><a href="clockin.php">Time Clock</a></li>
					<li><a href="myHours.php">My Hours</a></li>
					<li><a href="../index.php">My Assignments</a></li>

               <li><a href="base.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php include('footer.php');?>
