<?php 
session_start();
if (!isset($_SESSION['user_email'])) {
  header("location:login.php");
}else{
?>

<?php include('inc/header.php') ?>

<style type="text/css">

	.sk-panel{
		margin-top: 110px; margin-bottom: 110px; margin-left: 150px; margin-right: 150px;

	}
	
	@media (max-width: 668px) {
		.sk-panel{
		margin:50px;
	}
	}
</style>



		

	<div class="container" style="margin-bottom: 100px;">
	 			<div class="contact"  id="contact">
				<div class="container">
					<h3 class="tittle">Contact</h3>
					<div class="contact-grids">
						<form action="#" method="post">
							<div class="col-md-6 grid-contact">
								<div class="your-top">
									<i class="glyphicon glyphicon-user"> </i>
									<input type="text" name="Name" placeholder="Name"  required >								
									<div class="clearfix"> </div>
								</div>
								<div class="your-top">
									<i class="glyphicon glyphicon-envelope"> </i>
									<input type="text" name="E-mail" placeholder="E-mail"  required>								
									<div class="clearfix"> </div>
								</div>
								<div class="your-top">
									<i class="glyphicon glyphicon-link"> </i>
									<input type="text" name="Website" placeholder="Website"  required>								
									<div class="clearfix"> </div>
								</div>
								
							</div>
							<div class="col-md-6 grid-contact-in">
								<textarea name="Message"  placeholder=" Message"  required></textarea>
								<input type="submit" value="Send">
							</div>
							<div class="clearfix"> </div>
						</form>
					</div>
				
				</div>
			</div>
		</div>



		<!--footer-->
		<?php include('inc/footer.php') ?>
<?php  } ?>

