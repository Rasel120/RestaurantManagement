
<?php
  //  include 'inc/header.php';
    include 'lib/user.php';


    $user = new User();

?>

<?php
    $loginmsg = Session::get("loginmsg");
    if (isset($loginmsg)) {
        echo $loginmsg;
    }
    Session::set("loginmsg", NULL);
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Restaurant</title>
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
                            <li><a class="navactive color_animation" href="#top">WELCOME</a></li>
                            <li><a class="color_animation" href="#story">ABOUT</a></li>
                            <li><a class="color_animation" href="#pricing">MENU & PRICE</a></li>
                            <li><a class="color_animation" href="#featured">FEATURED</a></li>
                            <li><a class="color_animation" href="#reservation">RESERVATION</a></li>
                            <li><a class="color_animation" href="#contact">CONTACT</a></li>
                            <li><a class="color_animation" href="login.php" target="_blank" >LOGIN/SIGNUP</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
         
        <div id="top" class="starter_container bg">
            <div class="follow_container">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="top-title"> Restaurant</h2>
                    <h2 class="white second-title">Best In The City</h2>
                    <hr>
                </div>
            </div>
        </div>

        <!--About Us-->

        <section id="story" class="description_content">
            <div class="text-content container">
                <div class="col-md-12">
                    <h1>About us</h1>
                    <div class="fa fa-cutlery fa-2x"></div>
                    <p class="desc-text">
						There’s only one place you need to be right now, and that’s face-first in a focaccia con porchetta. The outrageous sandwich is a hot, fatty, rich and juicy pile of chopped-up roast pork straight from the rotisserie, laid with crisp cos lettuce leaves and grilled eggplant, all smooshed between pieces of pizza bread in a happy delicious mess. The pizzas here are excellent, but for our money we would even consider going round two on the porchetta, this time served is soft slices with a little jug of pan juices and a squeeze of lemon.
						</p>
                </div>

            </div>
        </section>

        <!-- Menu -->

         <section id="pricing" class="description_content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">our <span>MENU</span> the <span>PRICE</span></h1>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">Find everything from our Texas Style Ribs now with more meat, our ½ lb. Bigger Big Mouth Burgers and our always sizzling Fajitas, now with 48% more chicken and steak.</p>
                        <div class="pricing-list">
                            <div class="title">
                            </div>
                            <ul>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Ancho Salmon</h2>
                                            <div class="border-bottom"></div>
                                            <span>$ 25.00</span>
                                        </div>
                                        <p>Grilled chicken, pico, field greens, Mexican rice, corn & black bean salsa, avocado, shredded cheese, tortilla strips, cilantro, chipotle pesto, house-made ranch</p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Chipotle Chicken Fresh</h2>
                                            <div class="border-bottom"></div>
                                            <span>$ 20.00</span>
                                        </div>
                                        <p>Seared chile-rubbed Atlantic salmon, spicy citrus-chile sauce, cilantro, queso fresco. Served with Mexican rice & steamed broccoli.</p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Mango-Chile Chicken </h2>
                                            <div class="border-bottom"></div>
                                            <span>$ 10.00</span>
                                        </div>
                                        <p>Chile spices, mango glaze & topped with chopped mango, cilantro, pico, avocado. Served with Mexican rice, steamed broccoli.</p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Honey-Chipotle Crispers & Waffles</h2>
                                            <div class="border-bottom"></div>
                                            <span>$ 15.00</span>
                                        </div>
                                        <p>Crispers on top of Belgian waffles. Topped with bacon, jalapeños, ancho-chile ranch. Served with fries & honey-chipotle sauce.</p>
                                    </div>
                               </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="700ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>California Turkey Club</h2>
                                            <div class="border-bottom"></div>
                                            <span>$ 50.00</span>
                                        </div>
                                        <p>Bacon, avocado, tomato, red onion, provolone, lettuce, cilantro-pesto mayo on wheat Texas toast.</p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Triple Berry Crumble Cake</h2>
                                            <div class="border-bottom"></div>
                                            <span>$ 30.00</span>
                                        </div>
                                        <p>Warm blackberries & blueberries baked with rich butter cake topped with streusel and finished with vanilla ice cream, strawberry sauce & cinnamon-sugar.</p>
                                    </div>
                                </li>
                            </ul>
                            <a style="text-decoration: none;" class="btn btn-default pull-right wow bounceIn" data-wow-duration="500ms" data-wow-delay="1200ms" href="#" role="button">More Info</a>
                        </div>
                    </div>
                </div>
		    </div>
        </div>
    </section>


        <!-- Login -->
 


           <!--  <section id ="login" class="description_content">
            <div class="container"> 
            <h1>Login or SignUp</h1>   <br>
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                         


                        <form id="loginform" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <div class="col-sm-12 controls">
                                      <a id="btn-login" href="#" class="btn btn-success">Login  </a>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>




        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >


                            <form id="signupform" class="form-horizontal" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                                                
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="name" class="col-md-3 control-label">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="username" class="col-md-3 control-label">User Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="username" placeholder="User Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>
                                    
      
                                <div class="form-group">                                       
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                    </div>
                                </div>
                                
                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">                                       
                                        
                                </div>
                                
                                
                                
                            </form>
                         </div>
                    </div>                    
                </div> 
            </div>
            </section> -->
    

        <!-- Featured Dish  -->

        <section id="featured" class="description_content">
            <div  class="featured background_content">
                <h1>Our Feature</h1>
            </div>
            <div class="text-content container"> 
                <div class="col-md-6">
                    <h1>Have a look to our dishes!</h1>
                    <div class="icon-hotdog fa-2x"></div>
                    <p class="desc-text">Here is a look at some of our dishes that we have had available for our Italian pop up nights!!! We have limited spaces left for this evening if anyone fancys treating themselves give us a call we will be kicking..</p>
                </div>
                <div class="col-md-6">
                    <ul class="image_box_story2">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                            </ol>

                            <!--  slide -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="images/slider1.jpg"  alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/slider2.jpg" alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/slider3.JPG" alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div><div class="item">
                                    <img src="images/slider4.JPG" alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div><div class="item">
                                    <img src="images/slider5.JPG" alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div><div class="item">
                                    <img src="images/slider6.JPG" alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>


                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Reservation -->

        <section  id="reservation"  class="description_content">
            <div class="reservation background_content">
                <h1>Reserve a Table!</h1>
            </div>
            <br>
            <br>
            <a style="text-decoration: none;" href="reservation.php" class="text-center form-btn form-btn pull-right">Reservation</a>

        </section>

        <!--  Social  -->
      
        <section class="social_connect">
            <div class="text-content container"> 
                <div class="col-md-6">
                    <span class="social_heading">FOLLOW</span>
                    <ul class="social_icons">
                        <li><a class="icon-twitter color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-github color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-linkedin color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-mail color_animation" href="#"></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <span class="social_heading">OR DIAL</span>
                    <span class="social_info"><a class="color_animation" href="tel:883-335-6524">0123456789</a></span>
                </div>
            </div>
        </section>

        <!--  Contact -->


<?php
$user = new User();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $usrContact = $user->userContact($_POST);
    }
?>

        <section id="contact" class="description_content">
            <br><h1>Contact us</h1> <br><br>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner contact">
                            <div class="contact-form">
                                <form id="contact-us" method="post">
                                    <div class="col-md-6 ">                            
                                        <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                                     
                                        <input type="email" name="email" id="email" required="required" class="form" placeholder="Email" />
           
                                        <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
                                    </div>
                                    <div class="col-md-6">
                                        <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                                    </div>
                                    <div class="relative fullwidth col-xs-12">
                                     
                                        <button type="submit" id="submit" name="submit" class="form-btn">Send Message</button> 
                                    </div>
                      
                                    <div class="clear"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->

        <footer class="sub_footer">
            <div class="container">
            	<div class="col-md-6"><p style="text-align: left; color: #FFFFFF"><a href="https://www.facebook.com/Raselhossain120" target="_blank" style="color:#FFFFFF;">MD Rasel Hossain</a><br>Dhaka,Bangladesh</p> </div>
                <div class="col-md-6""><p class="sub-footer-text""><a href="#top" style="color:#FFFFFF;">TOP</a></p>
                </div>
            </div>
        </footer>


        <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>     
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="js/main.js" ></script>

    </body>
</html>