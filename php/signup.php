<?php
	if(isset($_SESSION["id"])){
		header("location: products.php");
	}
	require "./includes/common.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>LifeStyle Stores</title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
		<?php
			require "./includes/header.php";
		?>
		<div class="container panel-margin">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">SignUp</h2>
				</div>
				<div class="panel-body">
					<form method="post" action="signup_script.php">
						<div class="form-group">
							<input type="text" class="form-control" name="name" placeholder="Name" required>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" name="email" placeholder="Email" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" placeholder="Password" required>
						</div>
						<div class="form-group">
							<input type="number" class="form-control" name="contact" placeholder="Contact" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="city" placeholder="City" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="address" placeholder="Address" required>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
				<div class="panel-footer">
					Already have an account?Click <a href="login.html">here</a> to create one.
				</div>
			</div>
		</div>
		<?php
			require "./includes/footer.php";
		?>
	</body>
</html>