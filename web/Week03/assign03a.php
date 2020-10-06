<?php
    $confirm =      $_GET ["btn-submit"];
    $cancel =       $_GET ["btn-cancel"];
?>

<?php include('head.php');?>

<?php include('header.php');?>
    <div class="container">
        <section>    
            <div class="row">
                <div class="col-12 col-s-12">
                

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
        <?php include('footer.php');?>
    </div>