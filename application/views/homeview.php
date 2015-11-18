<!DOCTYPE html>
<html>
<head>
	<title>Nitharjan Quiz</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Cool Under Construction Page Flat Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/jquery.countdown.css" />
	<!--js-->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/script.js"></script>
	<!--js-->
</head>
<body>
<div class="header">
	<h1>Welcome to Quiz</h1>
</div>
<div class="content">
	<div class="content1">
		<form class="form-signin" method="Get" id='signin' name="signin" action="<?php echo base_url('index.php/Questionscontrol'); ?>">
			<p>Enter your Name</p>
			<div class="form-group">
				<input type="text" class="email" placeholder="Enter your Name" required><br>

				<p>Choose the Quiz Topic</p><br>
				<select class="form-control" name="category" id="category" required>
					<option value="">Choose your category</option>
					<option value="1">Sports</option>
					<option value="2">HTML</option>
					<option value="3">PHP</option>
					<option value="4">CSS</option>
				</select>
				<span class="help-block"></span>
			</div>

			<br>
			<input type="submit" class="btn btn-success btn-block" id="gobutton" name="gobutton" value="Go to Quiz">

		</form>
	</div>


</div>
<div class="footer">
	<p>Copyright © Nitharjan Quiz. All Rights Reserved  </p>
</div>
</body>
</html>

