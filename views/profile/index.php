<div class="col-md-10">
	<div class="jumbotron">
		<form method="post" action="<?php echo URL ?>profile/saveInfo">
		<label style="margin:10px;font-size: 20px;">Change your info</label>
		<br/>
		<br/>
		<div class="col-xs-3">
	  		<label for="first">First name</label>
	  		<input class="form-control" id="first" type="text" name="fname">
		</div>
		<div class="col-xs-3">
	  		<label for="last">Last name</label>
	  		<input class="form-control" id="last" type="text" name="lname">
		</div>
		<div class="col-xs-3">
	  		<label>Year</label><br/>
	  		<select name="year" class="form-control">
	  						<option value="">select an option</option>
							<option value="1">1st year</option>
							<option value="2">2nd year</option>
							<option value="3">3rd year</option>
							<option value="4">4th year</option>
			</select>
		</div>
		<br/>
		<div class="col-xs-3">
	  		<input class="btn btn-success" id="dob" value="Save" type="submit">
		</div>
		</form>
	</div>
</div>
<div class="col-md-10">
	<div class="jumbotron">
		<form method="post" action="<?php echo URL ?>profile/savePass">
		<label style="margin:10px;font-size: 20px;">Change Password</label>
		<br/>
		<br/>
		<div class="col-xs-3">
	  		<label for="currentpass">Current Password</label>
	  		<input class="form-control" id="currentpass" type="password" name="currpass">
		</div>
		<div class="col-xs-3">
	  		<label for="newpass">New Password</label>
	  		<input class="form-control" id="newpass" type="password" name="newpass">
		</div>
		<br/>
		<div class="col-xs-3">
	  		<input class="btn btn-success" id="dob" value="Save" type="submit">
		</div>
		</form>
	</div>
</div>