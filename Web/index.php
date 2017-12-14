<!DOCTYPE HTML>
<html>
	<head>
		<title>Login | Ticketon</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/l.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1>Ticketon</h1>
				<p>A perfect place to get people to join your event.<br />
				Advertising was never so simple.<br />
				Join us and make outstanding events.</p>
			</header>

		<!-- Signin Form TODO: Make constraints for inputs -->
			<form id="signin-form" method="post" action="#">
				<input type="email" name="email" id="email" placeholder="Email Address" />
				<input type="password" name="password" id="password" placeholder="Password" />
				<input type="submit" value="Sign in" />
				<p style="padding-top: 8px; font-size: 20px; margin-right: 5px;">or</p>
				<a href="register.html"><input type="button" value="Register" /></a>
			</form>

			<?php
				//session_start(); // Starting Session
				//$error=''; // Variable To Store Error Message
				$csv = array_map('str_getcsv', file('users.csv'));
				$email = $_POST['email'];
				$password = $_POST['password'];
				for($i = 1; $i < sizeOf($csv); $i = $i + 1){
					if($email == $csv[$i][1] && $password == $csv[$i][2]){
						header('Location: http://ssd.srvnet.info/my_events.php');
					}
				}


				/* * /
				if (isset($_POST['submit'])) {
					if (empty($_POST['username']) || empty($_POST['password'])) {
						$error = "Username or Password is invalid";
					}
					else
					{
						// Define $username and $password
						$username = $_POST['email'];
						$password = $_POST['password'];
						// Establishing Connection with Server by passing server_name, user_id and password as a parameter
						$connection = mysql_connect("localhost", "root", "");
						// To protect MySQL injection for Security purpose
						$username = stripslashes($username);
						$password = stripslashes($password);
						$username = mysql_real_escape_string($username);
						$password = mysql_real_escape_string($password);
						// Selecting Database
						$db = mysql_select_db("company", $connection);
						// SQL query to fetch information of registerd users and finds user match.
						$query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
						$rows = mysql_num_rows($query);
						if ($rows == 1) {
							$_SESSION['login_user']=$username; // Initializing Session
							header("location: profile.php"); // Redirecting To Other Page
						} else {
							$error = "Username or Password is invalid";
						}
						mysql_close($connection); // Closing Connection
					}
				}
				/* */



			?>


		<!-- Footer -->
			<footer id="footer">
				<ul class="copyright">
					<li>&copy; Ticketon.</li><li>Software System Development Project</li><li>PWr</li>
				</ul>
			</footer>

			<script src="assets/js/main.js"></script>

	</body>
</html>
