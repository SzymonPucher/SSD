<!DOCTYPE HTML>
<html>
	<head>
		<title>Register | Ticketon</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/r.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Signup Form -->
			<form id="signup-form" method="post" action="#">
				<div><input type="text" name="companyName" id="companyName" placeholder="Company Name" /></div>
				<div><input type="email" name="email" id="email" placeholder="Email Address" /></div>
				<div><input type="password" name="password" id="password" placeholder="Password" /></div>
				<div><input type="password" name="rpassword" id="rpassword" placeholder="Repeat password" /></div>
				<input type="submit" name="register" value="Sign up" />
			</form>

			<?php
/* * /
			$csv = array_map('str_getcsv', file('users.csv'));
			$companyName = $_POST['companyName'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			echo $companyName, $email, $password;


			for($i = 1; $i < sizeOf($csv); $i = $i + 1){
				if($companyName == $csv[$i][0] || $email == $csv[$i][1]){
					$isUnique = 0;
				}
			}

			//if(isset($_POST['register'])) {
				/* * /
				$csv_write = fopen("users.csv", "a") or die("Unable to open file!");
				/* */

				/* * /
				if(isset($_POST['companyName']) && isset($_POST['email']) && isset($_POST['password'] && isset($_POST['rpassword'])){
					$line = array($companyName , $email , $password);
					fputcsv($handle, $line);
				}
				/* * /
				fclose($csv_write);
				/* */
			//}
			$csv = array_map('str_getcsv', file('users.csv'));
			$companyName = $_POST['companyName'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$isOk = true;
			for($i = 1; $i < sizeOf($csv); $i = $i + 1){
				if($email == $csv[$i][1] || $companyName == $csv[$i][0]){
					$isOk = false;
				}
				if($isOk && $i == sizeOf($csv) - 1 && isset($_POST['companyName'])){
					header('Location: http://ssd.srvnet.info/my_events.php');
				}
			}
			?>

		<!-- Footer -->
			<footer id="footer">

				<ul class="copyright">
					<li>&copy; Ticketon.</li><li>Software System Development Project</li><li>PWr</li>
				</ul>
			</footer>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
