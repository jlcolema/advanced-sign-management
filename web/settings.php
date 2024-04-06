<!DOCTYPE html>

<html lang="en" class="no-js">

<head>

	<meta charset="utf-8" />

	<title>Project Name</title>

	<meta name="description" content="Here is the description of your project." />
	<meta name="keywords" content="" />

	<meta name="author" content="Your Name Here" />
	<meta name="Copyright" content="Copyright Your Name Here 2010. All Rights Reserved." />

	<meta name="DC.title" content="Project Name" />
	<meta name="DC.subject" content="What this site is about." />
	<meta name="DC.creator" content="Who made this site." />

	<meta name="google-site-verification" content="" />

	<link rel="shortcut icon" href="/-/media/favicon.png" />

	<link rel="stylesheet" href="/-/css/master.css" />
	<link rel="stylesheet" href="/-/css/print.css" media="print" />

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

	<script src="/-/script/functions.js"></script>

	<!-- Image Zoom -->

	<script type="text/javascript" src="/-/script/zoom.js"></script>
	<script type="text/javascript" src="/-/script/zoom-html.js"></script>

</head>

<body class="settings" onload="setupZoom()">

<!--[if IE 7]><div class="ie ie7"><![endif]-->
<!--[if IE 8]><div class="ie ie8"><![endif]-->
<!--[if IE 9]><div class="ie ie8"><![endif]-->

<div class="window">

	<!-- Header -->

	<div class="header">

		<!-- Municipality -->

		<div class="municipality">

			<h1><a href=""><img src="https://advancedsignmanagement.com/-/media/logo.jpg" class="logo"></a></h1>

			<div class="other">

				<ul>
					<li class="municipality"><a href="">Carmel</a></li>
					<li class="municipality"><a href="">Fishers</a></li>
					<li class="municipality"><a href="">Westfield</a></li>
				</ul>

				<form name="municipalities" action="" method="">

					<select name="Municipalities">
						<option value="Other">Other Municipalities</option>
						<optgroup label="Title">
							<option value="Carmel">Carmel</option>
							<option value="Fishers">Fishers</option>
							<option value="Westfield">Westfield</option>
						</optgroup>
					</select>

				</form>

			</div>

		</div>

		<div class="utilities">

			<div class="account">

				<h2><a href="">Jane Appleseed</a></h2>

				<div class="options">

					<ul>
						<li><a href="">Profile</a></li>
						<li><a href="">Help</a></li>
						<li><a href="">Sign Out</a></li>
					</ul>

				</div>

			</div>

			<div class="quick-add">

				<div class="add-new"><a href="">Add New&hellip;</a></div>

				<div class="options">

					<ul>
						<li><a href="">Location</a></li>
						<li><a href="">Sign</a></li>
						<li><a href="">User</a></li>
					</ul>

				</div>

				<div class="rfp">

					<ul class="group">
						<li class="request-a-quote"><a href="">Add a New User&hellip;</a></li>
					</ul>

				</div>

			</div>

		</div>

		<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/navigation.php");?>

		<div class="sort">

			<ul class="group">
				<li class="municipality-name"><a href="">Municipality</a></li>
				<li class="address"><a href="">Address</a></li>
				<li class="method"><a href="">Department</a></li>
			</ul>

		</div>

	</div>

	<!-- View -->

	<div class="view">

		<!-- Queue -->

		<div class="queue">

			<div class="grip"><a href="">&times;</a></div>

			<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/inventory.php");?>

			<div class="shadow-overlay"></div>

		</div>

		<!-- Notifications -->

		<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/notifications.php");?>

		<!-- Users -->

		<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/users.php");?>

		<!-- Inventory -->

		<div class="main">

			<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/settings.php");?>

		</div>

	</div>

</div>

<!--[if lte IE 9]></div><![endif]-->

</body>

</html>
