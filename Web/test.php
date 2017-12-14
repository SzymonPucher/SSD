<!DOCTYPE HTML>

<html>
	<head>
		<title>Create Event | Ticketon</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/ce.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
		<?php

			$csv = array_map('str_getcsv', file('users.csv'));
			ECHO sizeOf($csv);
		?>

		<!-- Signup Form -->
			<form id="create-form" method="post" action="#">
				<div><input type="text" name="eventName" id="eventName" placeholder="Event Name" /></div>
				<div><input type="text" name="dateTime" id="dateTime" placeholder="Date and Time" /></div>
				<div><input type="text" name="ticketPrice" id="tPrice" placeholder="Ticket price in $" /></div>
				<div><input type="text" name="ticketQuantity" id="tQty" placeholder="Amount of tickets for sale" /></div>
				<div ><iframe style="margin:auto; border: 5px solid white; border-radius: 5px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2505.057965568862!2d17.059782516065813!3d51.10739067957144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470fe82a7836289b%3A0xb8f93f04c5c8d70f!2sPolitechnika+Wroc%C5%82awska!5e0!3m2!1spl!2spl!4v1510337648291" width="480px" height="297px" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<a href="my_events.html"><input type="button" value="Create an event" /></a>
			</form>


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
