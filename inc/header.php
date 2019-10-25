<?php
	$filepath = realpath(dirname(__FILE__));
	include_once $filepath.'/../lib/Session.php';
	Session::init();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Register System</title>
	<link rel="stylesheet" type="text/css" href="inc/bootstrap.min.css">
	<link rel="icon" href="favicon-1.ico" type="image/x-icon">
	<script type="text/javascript" src="bootstrap.min.js"></script>
</head>

<?php
	if (isset($_GET['action']) && $_GET['action'] == "logout") {
		Session::destroy();
	}
?>

<body>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">Restaurant</a>
				</div>
				<ul class="nav navbar-nav pull-right">

				<?php
					$id = Session::get("id");
					$userlogin = Session::get("login");
					if ($userlogin == true) {
					
				?>
					<li><a href="profile.php?id=<?php echo $id ?>">Profile</a></li>
					<li><a href="?action=logout">Logout</a></li>
					
				<?php
					}else{
				?>

					<li><a href="login.php">Login</a></li>
					<li><a href="register.php">Register</a></li>
				
				<?php
					}
				?>

				</ul>
			</div>
		</nav>