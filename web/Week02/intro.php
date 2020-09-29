<?php $title = 'Profile';?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>?php echo($title);?></title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="mystyle.css">

        <!-- CSS only -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

		<!-- JS, Popper.js, and jQuery -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>


<body>

    <div class="container">

        <?php include('header.php');?>


            <div class="row section" id="section1">
				<div class="col-md-12 col-sm-12 header">My Family</div>
				<p>I am Davi Neves from Sao Paulo, Brazil.
				I live with my family near Salem, Oregon since 2015.
				My time zone is PST.
				My wife and I have two kids, the oldest is 4 and she is the cutest!
				My son is 2, and he is so fun!
				We love working in our garden, my daughter loves planting new seeds, and my son waters them.
				Our favorite place to go together is the beach!
				I really enjoy surfing; my wife likes taking pictures and our kids just love the sand!</p>

				<div class="col-md-9 col-sm-9 centered fill img1"><img src="./Week02/Family1.jpg" alt="Image 3" style="width: 640px; height: 460px;"/></div>

			</div>

			<div class="row section" id="section2">
				<div class="col-md-6 col-sm-6 header">Pictures</div>
				<h6></h6>
				<table class="centered fill">
					<tr>
						<td class="img2">My family!<img src="./Week02/Family2.jpeg" alt="Image 1" style="width: 300px; height: 400px;"/></td>
						<td class="img2">Me!<img src="./Week02/Img2.jpg" alt="Image 2" style="width: 300px; height: 400px;"/></td>
					</tr>
				</table>

			</div>

    <?php include('./Week02/footer.php');?>