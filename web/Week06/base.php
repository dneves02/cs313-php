
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
	<div class="row section">
		<div class="col-md-12 col-sm-12 content-top fill" id="section0.4">
			<div class="header">Index</div>
				<ul class="banner">
					<li><a href="login.php">Login</a></li>
					<li><a href="createUser.php">Create New User</a></li>
					<li><a href="clockin.php">Clock in/Clock out</a></li>
					<li><a href="myHours.php">My Hours</a></li>
					<li><a href="../index.php">My Assignments</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php include('footer.php');?>
