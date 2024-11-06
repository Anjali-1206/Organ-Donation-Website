<?php 

	//include header file
	include ('include/header.php');

?>
<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;

	}
	.loader{
		display:none;
		width:69px;
		height:89px;
		position:absolute;
		top:25%;
		left:50%;
		padding:2px;
		z-index: 1;
	}
	.loader .fa{
		color: #e74c3c;
		font-size: 52px !important;
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
	span{
		display: block;
	}
	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin: 25px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px 10px 20px 30px;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="ccol-md-6 offset-md-3">
			<h1 class="text-center">Search Donors</h1>
			<hr class="white-bar">
			<br>
			<div class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center center-aligned">
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option><optgroup title="Maharashtra" label="Maharashtra"></optgroup><option value="Ahmednagar" >Ahmednagar</option><option value="Akola" >Akola</option><option value="Amravati" >Amravati"</option><option value="Aurangabad" >Aurangabad</option><option value="Bhusawal" Bhusawal</option><option value="Chandrapur" >Chandrapur</option><option value="Dhule" >Dhule</option><option value="Jalgaon" >Jalgaon/option><option value="Kalyan" >Kalyan</option><option value="Kolhapur" >Kolhapur</option>
								<option value="Latur" >Latur</option><option value="Mumbai" >Mumbai</option><option value="Nagpur" >Nagpur</option><option value="Nanded" >Nanded</option>
								<option value="Nashik" >Nashik</option><option value="Navi-Mumbai" >Navi-Mumbai</option>
								<option value="Jalna" >Jalna</option><option value="Panvel" >Panvel</option>
								<option value="Parbhani" >Parbhani</option>	<option value="Parbhani" >Parbhani</option>
									<option value="Pune" >Pune</option>	<option value="Ratnagiri" >Ratnagiri</option><option value="Shirdi" >Shirdi</option></select>
							</div>
							<div class="form-group center-aligned">
								
						      <select name="organdonate" id="organdonate" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">

						        <option value="Heart">Heart</option>
					                <option value="Kidney">Kidney</option>
					                <option value="Lungs">Lungs</option>
					                <option value="Pancreas">Pancreas</option>
					                <option value="Intestine">Intestine</option>
					                <option value="Liver">Liver</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="button" class="btn btn-lg btn-default" id="search">Search</button>
							</div>
						</div>
		</div>
	</div>
</div>
<div class="container" style="padding: 60px 0 60px 0;">
	<div class="row " id="data">

		<!-- Display The Search Result -->

</div>
</div>
<div class="loader" id="wait">
	<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
</div>
<?php 

	//include footer file
	include ('include/footer.php');

?>
