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

<?php
			$uemail=$_SESSION['user_email'];
                 	$usern="SELECT * FROM user where user_email = '$uemail' ";
                 	$user_query = mysqli_query($con, $usern);

                 	if($udetails=mysqli_fetch_assoc($user_query)) {
                 		$user_id=$udetails['user_id'];
                 		$user_name=$udetails['user_name']; 
                 		$user_email = $udetails['user_email'];
                 		$user_phone =$udetails['user_phone'];
                 		$user_address = $udetails['user_address'];
                 		$proimage = $udetails['proimage'];

                 		
                 		?>
<?php } ?>

	<div class="container" style="margin-top: 100px;margin-bottom: 100px;">
		<div class="col-md-4">
			
		  <div class=" panel panel-default">
		    <div class="panel-heading">Profile</div>
		    <div class="panel-body">
		    	<img style="width: 200px; height: 200px; margin: auto; display: block; border-radius: 50%;" src="images/user.png" >
		    </div>
		    <div class="panel-footer">
		    	<p>Name:</p>
		    	<h4><?php echo $user_name; ?> </h4>
		    	<br>
		    	<p>Email:</p>
		    	<h4><?php echo $user_email; ?> </h4>
		    	<br>
		    	<p>Phone:</p>
		    	<h4><?php echo $user_phone; ?> </h4>
		    	<br>
		    	<p>Address:</p>
		    	<h4><?php echo $user_address; ?> </h4>
		    	<br>


		    </div>
		  </div>
		
		</div>

		<div class="col-md-8">
		  <div class=" panel panel-default">
		    <div class="panel-heading">Booking Deal</div>
		    <div class="panel-body">
		    	<table class="table table-bordered">
				    <thead>
				      <tr>
				        <th>Image</th>
				        <th>Hotel Detail</th>
				        <th>Total Price</th>
				        <th>Payment</th>
				      </tr>
				    </thead>
				    <tbody>
				    	<?php
				    		$bkdeal = "SELECT * FROM booking WHERE user_id = $user_id";
				    		$bkdeal_query = mysqli_query($con,$bkdeal);

				    		while ($bkdetail=mysqli_fetch_assoc($bkdeal_query)) {

				    			
				    			$bkprice = $bkdetail['price'];
				    			$bkpaystatus = $bkdetail['paystatus'];
				    			$bkin = $bkdetail['in_date'];
				    			$bkout = $bkdetail['out_date'];
				    			$bkpaymethod = $bkdetail['paymethod'];

				    			$bkhid=$bkdetail['hotel_id'];

			    		$hotel="SELECT * FROM hotel_details where hotel_id = '$bkhid' ";
			    		$hotel_query=mysqli_query($con,$hotel);

				    			while ($h_detail=mysqli_fetch_assoc($hotel_query)) {
				    					$hid=$h_detail['hotel_id'];
						    			$hname=$h_detail['hotel_name'];
						    			$hdetails=$h_detail['hotel_details'];
						    			$hlocation=$h_detail['hotel_location'];
						    			$hprice=$h_detail['hotel_price'];
						    			$image=$h_detail['image'];
				    			
				    	?>
				    			
				    <tr>
			        <td><img style="height: 150px; width: 150px;" src="images/<?php echo $image ?>">
			        	<hr>
			        	<p>Check in</p>
			        	<h4><?php echo $bkin; ?></h4>
			        	<p>Check out</p>
			        	<h4><?php echo $bkout; ?></h4>
			        </td>
			        <td><h4><b><?php echo $hname ?></b></h4> 
			        	<p style="color: #000; margin-top: 10px; text-align: justify;"><?php echo $hdetails ?>
			        	</p>
			        	<hr>
			        	<div class="col-md-12">
			        		<h4>Location : <?php echo $hlocation ?></h4>
			        		<!-- <div class="col-md-6">
			        			<h4>Location : Kolkata</h4>
			        		</div> -->
			        	</div>
			        	

			        </td>
			        <td><h4><?php echo $bkprice  ?></h4></td>
			        <td><h4 style="color: green;"><?php echo $bkpaystatus  ?></h4>in<h4><?php echo $bkpaymethod  ?></h4></td>
			       
			      </tr>
	  <?php  } } ?>
	
				    
				    </tbody>
				  </table>
		    </div>
		   
		  </div>
		</div>


	</div>

		<!--footer-->
		<?php include('inc/footer.php') ?>

<?php } ?>
