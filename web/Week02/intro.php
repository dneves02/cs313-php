<?php $title = 'Profile';?>
<?php $currentPage = 'intro';?>

<?php include('./head.php');?>

<body>

    <div class="container">

        <?php include('./header.php');?>


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

				<div class="col-md-9 col-sm-9 centered fill img1"><img src="./Family1.jpg" alt="Image 3" style="width: 640px; height: 460px;"/></div>

			</div>

			<div class="row section" id="section2">
				<div class="col-md-6 col-sm-6 header">Pictures</div>
				<h6></h6>
				<table class="centered fill">
					<tr>
						<td class="img2">My family!<img src="./Family2.jpeg" alt="Image 1" style="width: 300px; height: 400px;"/></td>
						<td class="img2">Me!<img src="./Img2.jpg" alt="Image 2" style="width: 300px; height: 400px;"/></td>
					</tr>
				</table>

			</div>

    <?php include('./footer.php');?>