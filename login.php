<?php 
session_start();  // needed for sessions.
?>

<?php 
include('inc/header.php');
 ?>

		<div class="panel panel-default sk-panel" >
		<div class="panel-body">
			<ul class="nav nav-tabs">
			    <li class="active"><a data-toggle="tab" href="#login">Login</a></li>
			    <li><a data-toggle="tab" href="#menu1">Registration</a></li>
			    
			  </ul>

			  <div class="tab-content" style="padding: 10px;">
			    <div id="login" class="tab-pane fade in active">
			      <h3>Login : </h3>
			      <br>

			<?php 
			    if (isset($_POST['login_user'])) {
			    	
			        $admin_email = $_POST['uemail'];
			        $admin_pass = $_POST['pwwd'];
			         
			        $admin="SELECT * FROM user WHERE user_email = '$admin_email' AND user_password = '$admin_pass'  ";
			        $admin_query=mysqli_query($con,$admin);
			      

			     if (mysqli_num_rows($admin_query)) {
			            $_SESSION["user_email"] = $admin_email;
			           echo "<script>window.open('index.php','_self')</script>";
			        }else{
			            echo "<script>alert('Email AND password error')</script>";
			        }



			    }

			?>


			      <form method="POST" action=" ">
				    <div class="form-group">
				      <label for="email">Email:</label>
				      <input type="email" class="form-control" id="email" placeholder="Enter email" name="uemail">
				    </div>
				    <div class="form-group">
				      <label for="pwd">Password:</label>
				      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwwd">
				    </div>
				    <div class="checkbox">
				      <label><input type="checkbox" name="remember"> Remember me</label>
				    </div>
				    <button type="submit" class="btn btn-default" name="login_user">Submit</button>
				  </form>
			    </div>
			    <div id="menu1" class="tab-pane fade">
			      <h3>Registration :</h3>
			      <br>

			      <?php

			      		if (isset($_POST['registration'])) {
			      			$uname=$_POST['uname'];
			      			$email = $_POST['email'];
			      			$phone = $_POST['phone'];
			      			$password = $_POST['pwd'];
			      			$address = $_POST['address'];

			      			$user_insert = "INSERT INTO `user`(`user_name`, `user_email`, `user_password`, `user_phone`, `user_address`) VALUES ('{$uname}','{$email}','{$password}','{$phone}','{$address}')";

			      			$user_inquery=mysqli_query($con,$user_insert);

			      			if ($user_inquery==true) {
			      				echo "yes";
			      			}else{
			      				echo "no";
			      			}
			      		}

			      ?>

			       <form method="POST" action=" ">

			       	<div class="form-group">
				      <label for="uname">Name :</label>
				      <input type="text" class="form-control" placeholder="Enter Name" name="uname">
				    </div>

				    <div class="form-group">
				      <label for="email">Email :</label>
				      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				    </div>

				    <div class="form-group">
				      <label for="phone">Phone No. :</label>
				      <input type="number" class="form-control" placeholder="Enter Phone No." name="phone">
				    </div>

				    <div class="form-group">
				      <label for="pwd">Password :</label>
				      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
				    </div>

				     <div class="form-group">
				      <label for="address">Address. :</label>
				      <textarea class="form-control" name="address"  rows="5" id="comment" placeholder="Enter Full Address"></textarea>
				    </div>

				    
				    <button type="submit" name="registration" class="btn btn-default" >Submit</button>
				  </form>
			    </div>
			
			  </div>


		</div>
		</div>




<style type="text/css">

	.sk-panel{
		margin-top: 110px; margin-bottom: 110px; margin-left: 400px; margin-right: 400px;

	}
	
	@media (max-width: 668px) {
		.sk-panel{
		margin:50px;
	}
	}
</style>



		<!--footer-->
		<?php include('inc/footer.php') ?>