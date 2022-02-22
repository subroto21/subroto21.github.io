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



		

	<div class="panel panel-default sk-panel" >
		<div class="panel-body">

			<?php
			    	if (isset($_GET['h_id'])) {
			    		$h_id=$_GET['h_id'];
			    	
			    		$hotel="SELECT * FROM hotel_details where hotel_id = '$h_id' ";
			    		$hotel_query=mysqli_query($con,$hotel);

			    		while ($h_detail=mysqli_fetch_assoc($hotel_query)) {
			    			$hid=$h_detail['hotel_id'];
			    			$hname=$h_detail['hotel_name'];
			    			$hdetails=$h_detail['hotel_details'];
			    			$hlocation=$h_detail['hotel_location'];
			    			$hprice=$h_detail['hotel_price'];
			    			$image=$h_detail['image'];
			    	
			    		

			    	?>
			<table class="table table-bordered">
			    <thead>
			   
			      <tr>
			        <th>Image</th>
			        <th>Details</th>
			    
			        
			      </tr>
			    </thead>
			    <tbody>
		
			      <tr>
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
			       
			      </tr>
			   
			    </tbody>
			</table>

		<div class="col-md-8" style="float: right;">



			<?php
				$uemail=$_SESSION['user_email'];
			                 	$usern="SELECT * FROM user where user_email = '$uemail' ";
			                 	$user_query = mysqli_query($con, $usern);

			                 	if($udetails=mysqli_fetch_assoc($user_query)) {


			                 		$user_id=$udetails['user_id']; 

			                 	}


				if (isset($_POST['booknow'])) {
					

					$roomno = $_POST['value2'];
					$bkprice= $_POST['sum'];
					$chkin= strtotime($_POST['fromdate']);
					$ckinn=date('y-m-d', $chkin);
					$ckout= date('y-m-d', strtotime($_POST['todate']));
					$paymethod = $_POST['optradio'];

					$bknow= "INSERT INTO `booking`( `user_id`, `hotel_id`, `room`, `price`, `in_date`, `out_date`, `paymethod`, `paystatus`) VALUES ( '{$user_id}','{$h_id}','{$roomno}' ,'{$bkprice}','{$ckinn}','{$ckout}','{$paymethod}','Paid')";

					$bknow_query= mysqli_query($con,$bknow);

					if ($bknow_query==true) {
						  echo "<script>window.open('user.php','_self')</script>";
					}else {
						 echo "<script>alert('Email AND password error')</script>";
					}

				

				}


			?>

				  <form class="form-horizontal" method="POST" action=" ">

				<div class="form-group">
                     <label class="control-label col-sm-2" for="value1">check in</label>
                     <div class="col-sm-10">
                       <input id="from-date" name="fromdate" type="text" class="form-control" placeholder="From">

                     </div>
                  </div>

                  <div class="form-group">
                     <label class="control-label col-sm-2" for="value1">check out</label>
                     <div class="col-sm-10">
                     <input id="to-date" name="todate" type="text" class="form-control" placeholder="To">
                     </div>
                    <input id="total"  hidden="hidden">
           
                  </div>




                  <div class="form-group">
                     <label class="control-label col-sm-2" for="value1">Pay Per Room</label>
                     <div class="col-sm-10">
                        <input type="number" name="value1" id="value3" class="form-control" value="<?php echo $hprice  ?>" readonly  />
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-sm-2" for="value2">No. of Room</label>
                     <div class="col-sm-10">
                        <input type="number" name="value2" id="value4" class="form-control" min="1" placeholder="" />
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-sm-2" for="sum">Total</label>
                     <div class="col-sm-10">
                        <input type="number" name="sum" id="sum" class="form-control" readonly />
                     </div>
                  </div>
 				
				<hr>
				<div style="float: right;">
					<h4> Payment Method</h4>
					<div class="radio" >
					<label><input type="radio" name="optradio" value="cash">Cash</label>
					</div>
					<div class="radio">
					<label><input type="radio" name="optradio" value="card">Card</label>
					</div>
					<hr>
					<button type="submit" name="booknow" class="btn btn-primary" >Book Now</button>
				<!-- <a class="btn btn-primary" type="submit" name="booknow" href="#">Book Now</a> -->
				</div>
			</div>
		</form>

			  <?php } } ?>



		</div>
		</div>



<script type="text/javascript">

	$(function() {

		  $('#value3, #value4,#total').keyup(function(){
               var value1 = parseFloat($('#value3').val()) || 0;
               var value2 = parseFloat($('#value4').val()) || 0;
               var value3 = parseFloat($('#total').val()) || 0;
             
               $('#sum').val(value1 * value2 * value3);
            });

  // create the from date
  $('#from-date').datepicker({
    autoclose: true,
    format: 'dd-mm-yyyy',
  }).on('changeDate', function(ev) {
    ConfigureToDate();
  });


  $('#to-date').datepicker({
    autoclose: true,
    format: 'dd-mm-yyyy',
    startDate: $('#from-date').val()
  }).on('changeDate', function(ev) {
    var fromDate = $('#from-date').data('datepicker').dates[0];
    var datetotal = getBusinessDatesCount(fromDate, ev.date);
    $('#total').val(datetotal);
  });

  // Set the min date on page load
  ConfigureToDate();

  // Resets the min date of the return date
  function ConfigureToDate() {
    $('#to-date').val("").datepicker("update");
    $('#to-date').datepicker('setStartDate', $('#from-date').val());
  }


     
      
});

function getBusinessDatesCount(startDate, endDate) {
  var count = 0;
  var curDate = new Date(startDate);
  while (curDate <= endDate) {
    var dayOfWeek = curDate.getDay();
    if (!((dayOfWeek == 6) || (dayOfWeek == 0)))
      count++;
    curDate.setDate(curDate.getDate() + 1);
  }
  return count;
}
</script>









		<!--footer-->
		<?php include('inc/footer.php') ?>
<?php  } ?>

