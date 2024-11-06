<?php 
	
	include 'include/header.php';

	include 'include/sidebar.php';

?>

<style>
	.form-group{
		text-align: left;
	}
	.form-container{

		padding: 20px 10px 20px 30px;

	}
</style>
			<div class="container" style="padding: 60px 0;">
			<div class="row">
				
				<div class=" card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					
					<!-- Error Messages -->	


						<form action="" method="post" class="form-group form-container" >
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" required name="name" class="form-control" value="">
							</div>
							<div class="form-group">
					              <label for="name">Organ</label><br>
					              <select class="form-control demo-default" required id="organ" name="organ" required>
					                <option value=""> </option>
					                <option value="Heart">Heart</option>
					                <option value="Kidney">Kidney</option>
					                <option value="Lungs">Lungs</option>
					                <option value="Pancreas">Pancreas</option>
					                <option value="Intestine">Intestine</option>
					                <option value="Liver">Liver</option>
					                
					              </select>
					        </div><!--End form-group-->
							<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		<select name="gender" id="gender" class="form-control" required>
				              			<option value=""></option>
				              			<option value="Male">Male</option>
				              			<option value="Female">Female</option>
				              		</select>
				    		</div><!--gender-->
				    		<div class="form-group">
				    		<label for="dob">Email</label>
				    			<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" class="form-control" required value="">
				    		</div>
				    		<div class="form-group">
				              <label for="contact_no">Contact No</label>
				              <input type="text" name="contact_no" value="" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11">
				            </div><!--End form-group-->
							<div class="form-group">
								<label for="city">City</label>
								              <select name="city" id="city" class="form-control demo-default" required>
									<option value=""> </option><optgroup title="Maharashtra" label="Maharashtra"></optgroup><option value="Ahmednagar" >Ahmednagar</option><option value="Akola" >Akola</option><option value="Amravati" >Amravati"</option><option value="Aurangabad" >Aurangabad</option><option value="Bhusawal" Bhusawal</option><option value="Chandrapur" >Chandrapur</option><option value="Dhule" >Dhule</option><option value="Jalgaon" >Jalgaon/option><option value="Kalyan" >Kalyan</option><option value="Kolhapur" >Kolhapur</option>
								<option value="Latur" >Latur</option><option value="Mumbai" >Mumbai</option><option value="Nagpur" >Nagpur</option><option value="Nanded" >Nanded</option>
								<option value="Nashik" >Nashik</option><option value="Navi-Mumbai" >Navi-Mumbai</option>
								<option value="Jalna" >Jalna</option><option value="Panvel" >Panvel</option>
								<option value="Parbhani" >Parbhani</option>	<option value="Parbhani" >Parbhani</option>
									<option value="Pune" >Pune</option>	<option value="Ratnagiri" >Ratnagiri</option><option value="Shirdi" >Shirdi</option></select>
										      
							</div><!--city end-->
							
							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update">Update</button>
							</div>
						</form>
					</div>
				</div>
				<div class="card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					

					<!-- Messages -->	

						<form action="" method="post" class="form-group form-container" >
							
							<div class="form-group">
								<label for="oldpassword">Current Password</label>
								<input type="password" required name="old_password" placeholder="Current Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="newpassword">New Password</label>
								<input type="password" required name="new_password" placeholder="New Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="c_password">Confirm Password</label>
								<input type="password" required name="c_password" placeholder="Confirm Password" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update_pass">Update Password</button>
							</div>
						</form>
					</div>
				</div>


				<div class="card col-md-6 offset-md-3">
					
					<!-- Display Message -->

					<div class="panel panel-default" style="padding: 20px;">
						<form action="" method="post" class="form-group form-container" >
							
							<div class="form-group">
								<label for="oldpassword">Password</label>
								<input type="password" required name="account_password" placeholder="Current Password" class="form-control">
							</div>

							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="delete_account">Delete Account</button>
							</div>

						</form>
					</div>
				</div>

			</div>
		</div>
	
<?php
include 'include/footer.php'; 
 ?>
