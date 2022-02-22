<?php 
session_start();
if (!isset($_SESSION['user_email'])) {
  header("location:login.php");
}else{
?>


<?php include('inc/header.php'); ?>




		<div>
		<div class="container">
			<div class="banner-heder" style="margin: 15px;">
				

				<h3 style="color: black">We Plan Your Trip<span style="color: black">Best Available Choice in Town</span></h3>
			</div>
			<div class="banner-grids" style="margin-bottom: 20px;">
				<form action="#" method="post">
				<div class="col-md-6 banner-grid">
					<select class="sel" name="hhlocation">
			            <option>Select location</option>
						<option value="kolkata">Kolkata,India</option>
						<option value="goa">Goa,India</option>
						<option value="mumbai">Mumbai,India</option>
						<option value="hyderabad">Hyderabad,India</option>
						<option value="bengaluru">Bengaluru,India</option>
						<option value="pune">Pune,India</option>
						<option value="chennai">Chennai,India</option>
						<option value="jaipur">Jaipur,India</option>
						<option value="darjeeling">Darjeeling,India</option>
						<option value="kashmir">Kashmir,India</option>
						<option value="manali"> Manali,India</option>
						<option value="varanasi">Varanasi,India</option>
						<option value="kerala">Kerala,India</option>
						<option value="mysore">Mysore,India</option>
					</select>							
				</div>
			
			
				<div class="col-md-6 search">
					
				 <input type="submit" value="Check Availability" name="srhlocation">
				
				</div>
				</form>
				<div class="clearfix"></div>
			</div>
		</div>


	</div>

	<hr>




		<div class="panel panel-default" style="margin-left: 110px;margin-right: 110px;">
		<div class="panel-body">
			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Image</th>
			        <th>Details</th>
			        <th>Price</th>
			        <th>Book Now</th>
			      </tr>
			    </thead>
			    <tbody>

			    	<?php
			    	if (isset($_POST['srhlocation'])) {
			    		$location=$_POST['hhlocation'];
			    	
			    		$hotel="SELECT * FROM hotel_details where hotel_location = '$location' ";
			    		$hotel_query=mysqli_query($con,$hotel);

			    		while ($h_detail=mysqli_fetch_assoc($hotel_query)) {
			    			$hid=$h_detail['hotel_id'];
			    			$hname=$h_detail['hotel_name'];
			    			$hdetails=$h_detail['hotel_details'];
			    			$hlocation=$h_detail['hotel_location'];
			    			$hprice=$h_detail['hotel_price'];
			    			$image=$h_detail['image'];
			    	
			    		

			    	?>

			      <tr style="margin-bottom: 10px;">
			        <td><img style="height: 200px; width: 200px;" src="images/<?php echo $image ?>"></td>
			        <td><h4><b><?php echo $hname ?></b></h4> 
			        	<p style="color: #000; margin-top: 10px; text-align: justify;"><?php echo $hdetails ?>
			        	</p>
			        	<hr>
			        	<div class="col-md-12">
			        		<div class="col-md-6">
			        			<h4>Location : <?php echo $hlocation ?></h4>
			        		</div>
			        		<!-- <div class="col-md-6">
			        			<h4>Location : Kolkata</h4>
			        		</div> -->
			        	</div>
			        	

			        </td>
			        <td><h4>RS.<?php echo $hprice ?> </h4></td>
			        <td><a class="btn btn-primary" href="bookingpage.php?h_id=<?php echo $hid ?>&">Booking Now</a></td>
			      </tr>

			  <?php } }?>
			     
			    </tbody>
			</table>

		</div>
		</div>

		<!--footer-->
		<?php include('inc/footer.php') ?>
		<?php } ?>