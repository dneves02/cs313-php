<?php
    $confirm =      $_GET ["btn-submit"];
    $cancel =       $_GET ["btn-cancel"];
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Search Engine Optimization -->
	<title>Neves Bookstore - Order Confirmation</title>
	<meta name="description" content="Neves Bookstore">
	<meta name="keywords" content="Online, Bookstore, Books, Neves">
	<meta name="author" content="Davi Neves">

	<!-- responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- encoding -->
    <meta charset="UTF-8" />

    <!-- styles -->
	<link rel="stylesheet" href="./assign11.css" />
</head>

<body>
    <header>
        <h2>Neves Bookstore</h2>
    </header>

    <div class="clearfix">
        <section>
			<h1>Order Confirmation</h1>
			<div class="row">
				<div class="col-3 col-s-3 menu">
					<div class="button-link-container">
						<a href="#"><div class="button-link link-current">Children</div></a><br />
						<a href="../index.html"><div class="button-link ">Index</div></a><br />
					</div>
				</div>

                <div class="col-9 col-s-9">
                    <?php
                    if (isset($confirm))
                    {
                        print "<h2>Your order was confirmed!</h2>";
                    }
                    if (isset($cancel))
                    {
                        print "<h2>Your order was cancelled!</h2>";
                    }
                    ?>
                </div>
			</div>
        </section>    
    </div>

    <footer>
		<br /><br />
		Address. xxx XXX Portland, OR xxxxx<br />
		Tel. 123-456-7890<br />      
		Email. dneves@gmail.com<br /><br />
		© 2020 by Neves.
		<br /><br />
		<a href="#">Contact Us!</a>
    </footer>
</body>
</html>