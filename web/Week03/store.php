<?php $title = 'Neves Bookstore';?>
<?php $currentPage = 'Home';?>

<?php include('head.php');?>

<?php include('header.php');?>

    <div class="container">
        <div class="row">
            <div class="col-12 col-s-12">
                <section>
					<form id="form-grid" onreset="resetForm();" action="assign03.php" method="GET">
						<div class="d-card-columns">
							<div class="d-card">
								<img src="./static/Classic_Bedtime_Stories.jpg" alt="Classic_Bedtime_Stories">
								<div class="d-card-header">
									Classic Bedtime Stories
								</div>
								<div class="d-card-body">
									$ 19.95
									<input id="item_0" type="checkbox" name="item_0" onclick="addTotal(this);">
								</div>
							</div>
							<div class="d-card">
								<img src="./static/Classic_Storybook_Fables.jpg" alt="Classic_Storybook_Fables">
								<div class="d-card-header">
									Classic Storybook Fables
								</div>
								<div class="d-card-body">
									$ 15.19
									<input id="item_1" type="checkbox" name="item_1" onclick="addTotal(this);">
								</div>
							</div>
							<div class="d-card">
								<img src="./static/Classic_Fairy_Tales_vol1.jpg" alt="Classic_Fairy_Tales_vol1">
								<div class="d-card-header">
									Classic Fairy Tales Vol.1
								</div>
								<div class="d-card-body">
									$ 19.95
									<input id="item_2" type="checkbox" name="item_2" onclick="addTotal(this);">
								</div>
							</div>						
						</div>
						<div class="d-card-columns">
							<div class="d-card">
								<img src="./static/Childrens_Classic_Collection.jpg" alt="Childrens_Classic_Collection">
								<div class="d-card-header">
									Children's Classic Collection
								</div>
								<div class="d-card-body">
									$ 29.98
									<input id="item_3" type="checkbox" name="item_3" onclick="addTotal(this);">
								</div>
							</div>
							<div class="d-card">
								<img src="./static/The_Little_Prince.jpg" alt="The_Little_Prince">
								<div class="d-card-header">
									The Little Prince
								</div>
								<div class="d-card-body">
									$ 17.49
									<input id="item_4" type="checkbox" name="item_4" onclick="addTotal(this);">
								</div>
							</div>
							<div class="d-card">
								<img src="./static/Childrens_Classics/The_Little_Prince.jpg" alt="The_Little_Prince">
								<div class="d-card-header">
									The Little Prince
								</div>
								<div class="d-card-body">
									$ 17.99
									<input id="item_5" type="checkbox" name="item_5" onclick="addTotal(this);">
								</div>
							</div>
						</div>
						<div class="d-card-columns">
							<div class="d-card">
								<img src="./static/Childrens_Classics/Aladdin.jpg" alt="Aladdin">
								<div class="d-card-header">
									Aladdin
								</div>
								<div class="d-card-body">
									$ 17.95
									<input id="item_6" type="checkbox" name="item_6" onclick="addTotal(this);">
								</div>
							</div>
							<div class="d-card">
								<img src="./static/Childrens_Classics/Don_Quixote_of_the_Mancha.jpg" alt="Don_Quixote_of_the_Mancha">
								<div class="d-card-header">
									Don Quixote of the Mancha
								</div>
								<div class="d-card-body">
									$ 45.99
									<input id="item_7" type="checkbox" name="item_7" onclick="addTotal(this);">
								</div>
							</div>
							<div class="d-card">
								<img src="./static/Childrens_Classics/Fables.jpg" alt="Fables">
								<div class="d-card-header">
									Fables
								</div>
								<div class="d-card-body">
									$ 17.95
									<input id="item_8" type="checkbox" name="item_8" onclick="addTotal(this);">
								</div>
							</div>
						</div>
						<div class="d-card-columns">
							<div class="d-card">
								<img src="./static/Childrens_Classics/Russian_Fairy_Tales.jpg" alt="Russian_Fairy_Tales">
								<div class="d-card-header">
									Russian Fairy Tales
								</div>
								<div class="d-card-body">
									$ 13.98
									<input id="item_9" type="checkbox" name="item_9" onclick="addTotal(this);">
								</div>
							</div>
							<div class="d-card">
								<img src="./static/Childrens_Classics/Sherlock_Holmes.jpg" alt="Sherlock_Holmes">
								<div class="d-card-header">
									Sherlock Holmes
								</div>
								<div class="d-card-body">
									$ 14.89
									<input id="item_10" type="checkbox" name="item_10" onclick="addTotal(this);">
								</div>
							</div>
							<div class="d-card">
								<img src="./static/Childrens_Classics/The_Three_Musketeers.jpg" alt="The_Three_Musketeers">
								<div class="d-card-header">
									The Three Musketeers
								</div>
								<div class="d-card-body">
									$ 11.99
									<input id="item_11" type="checkbox" name="item11" onclick="addTotal(this);">
								</div>
							</div>
                        </div>
                        <h2 style="display:none;">Total: $
							<input id="total" readonly type="text" name="total" value="0.00">
						</h2>
                            <br><br><br>
                            <input id="reset" type="reset" name="reset" value="Reset">
							<input id="validate" type="submit" name="validate" value="Submit" onclick="checkOut();">

                    </form>                        
                </section>
            </div>
        </div>
    </div>
    
    <?php include('footer.php');?>
