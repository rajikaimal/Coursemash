<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo CSS1 ?>">
		<link rel="stylesheet" href="<?php echo CSS ?>css/index.css" />
		<title>
			Welcome to Coursemash 
		</title>
	</head>
	<body>
	<div class="col-md-10"> <label id="logo">Coursemash<sup id="sup">BETA</sup></label> </div>	
	<div class="col-md-2">
		<form method="post" action="<?php echo URL ?>guest">
			<input type="submit" class="btn btn-success" value="Anonymous login" id="anonymous">
		</form>
	</div>	
	<div id="container">
		
		<div class="col-md-6" id="login">
			<label id="logIn">Login</label>
			<form method="post" action="<?php echo URL?>login/login" class="form-horizontal">
				<table class="table-condensed">	
					<tr>
						<td>SLIIT ID</td> 
						<td><input type="text" class="form-control" name="sliitID"></td>
					</tr>	
					<tr>
						<td>Password</td> 
						<td><input type="password" class="form-control" name="password"></td>
					</tr>
					<tr>
						<td><input type="submit" value="Login" class="btn btn-success"></td> 
					</tr>	
					<tr>
						<td>
							<?php 
								session_start();
								echo "<label style='color:red'>".$_SESSION['error']."</label>";
								//session_destroy();
							?>
						</td>	
					</tr>	
					
				</table>
			
			</form>
		</div>
	</div>
	<div>
		<div class="col-md-4">
		<label id="signUp">Sign up</label>
			<form method="post" action="<?php echo URL?>login/signup" class="form-horizontal">
				<table class="table-condensed">	
					<tr>
						<td>First Name</td> 
						<td><input type="text" class="form-control" name="fname"></td>
					</tr>	
					<tr>
						<td>Last Name</td> 
						<td><input type="text" class="form-control" name="lname"></td>
					</tr>
					<tr>
						<td>SLIIT ID</td> 
						<td><input type="text" class="form-control" name="sliitID"></td>
					</tr>
					<tr>
						<td>Year</td> 
						<td><select name="year" class="form-control">
							<option value="">Select an option</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Password</td> 
						<td><input type="password" class="form-control" name="password"></td>
					</tr>
					
					<tr>
						<td><input type="submit" value="Sign up" class="btn btn-primary"></td> 
					</tr>		
				</table>
			
			</form>
		</div>
	</div>
	</body>
	<footer>
		<div class="col-md-12">
		<!--	<a href="http://www.rajika.me" id="footer">RAJIKA.ME</a> -->
		</div>
	</footer>
</html>