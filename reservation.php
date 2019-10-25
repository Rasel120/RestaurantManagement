<?php
	// include 'inc/header.php';
	include 'lib/User.php';
?>
<?php
	$user = new User();
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
		$usrReserv = $user->userReservation($_POST);
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reservation</title>
	     <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="favicon-1.ico" type="image/x-icon">
</head>
<body>
		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
               
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Restaurant</a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <!-- <li><a class="navactive color_animation" href="#top">WELCOME</a></li> -->
                            <li><a class="color_animation" href="index.php #story" >ABOUT</a></li>
                            <li><a class="color_animation" href="index.php #pricing">MENU & PRICING</a></li>
                            <li><a class="color_animation" href="login.php" target="_blank" >LOGIN/SIGNUP</a></li>
                            <li><a class="color_animation" href="index.php #featured">FEATURED</a></li>
                            <!-- <li><a class="color_animation" href="#reservation">RESERVATION</a></li> -->
                            <li><a class="color_animation" href="index.php #contact">CONTACT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>


        <div class="text-content container"> 
                <div class="inner contact">
                    <div class="contact-form">

<?php
	$msg = Session::get("msg");
	if (isset($usrReserv)) {
		echo $usrReserv;
	}
	Session::set("msg", NULL);
?>

                        <form id="contact-us" method="POST" action="">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-md-6 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-xs-6">
                                                <input type="text" name="first_name" id="first_name" required="required" class="form" placeholder="First Name" />
                                                <input type="text" name="last_name" id="last_name" required="required" class="form" placeholder="Last Name" />
                                                <input type="text" name="state" id="state" required="required" class="form" placeholder="State" />
                                                <input type="text" name="datepicker" id="datepicker" required="required" class="form" placeholder="Reservation Date" />
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-xs-6">
                                                <input type="text" name="phone" id="phone" required="required" class="form" placeholder="Phone" />
                                                <input type="text" name="guest" id="guest" required="required" class="form" placeholder="Number of Guest" />
                                                <input type="email" name="email" id="email" required="required" class="form" placeholder="Email" />
                                                <input type="text" name="time" id="time" required="required" class="form" placeholder="Desire Slot " />
                                            </div>

                                            <div class="col-xs-6 ">
                                                <button type="submit"  name="register" class="text-center form-btn form-btn">Reserve</button> 
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-6 col-xs-12">
                                        <div class="right-text">
                                            <h2>Hours</h2><hr>
                                            <p>Monday to Friday: 7:30 AM - 11:30 AM</p>
                                            <p>Saturday & Sunday: 8:00 AM - 9:00 AM</p>
                                            <p>Monday to Friday: 12:00 PM - 5:00 PM</p>
                                            <p>Monday to Saturday: 6:00 PM - 1:00 AM</p>
                                            <p>Sunday to Monday: 5:30 PM - 12:00 AM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         <!--    <div class="clear"></div> -->
                        </form>
                    </div>
                </div>
            </div>

</body>
</html>