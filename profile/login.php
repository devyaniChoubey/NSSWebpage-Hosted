<?php include("../backend/init.php"); ?>
<!doctype html>
<html>
    <head>
        <title>Login Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="icon" href="images/nss.png">
        <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="prayatna_style.css">
        <link rel="stylesheet" type="text/css" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
        <link rel="stylesheet" type="text/css" href="team.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body style="background-image: url('assets/img/profilebg.jpg'); background-repeat: no-repeat; background-size: 100% 100%;height: 100%;">
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="bg"></div>
                <div class="container">
                    <a class="navbar-brand" href="#"><img src="images/nss.png" alt="logo">NSS IIT Patna</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="mainNavbar" style="float: right">
                        <ul class="navbar-nav">
                            <li class="nav-item active"><a class="nav-link" href="../index.html">Home</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                    Get Involved
                                </a>
                                <ul class="dropdown-menu">
                                  <a class="dropdown-item" href="../about-us.html">About Us</a>
                                  <a class="dropdown-item" href="../team.html">Our Team</a>
                                  <a class="dropdown-item" href="../faq.html">FAQs</a>
                                  <a class="dropdown-item" href="https://docs.google.com/document/d/1EgpxEHza7NJGcw6CV3m7fv25ZJsbJpALqj1VH3ZOTl8/edit" target="_blank">Rules & Policies</a>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                    Cells
                                </a>
                                <ul class="dropdown-menu">
                                  <a class="dropdown-item" href="../cells/cells.html?cell=technical">Technical Skills</a>
                                  <a class="dropdown-item" href="../cells/cells.html?cell=rural">Rural Development</a>
                                  <a class="dropdown-item" href="../cells/cells.html?cell=chetna">Chetna</a>
                                  <a class="dropdown-item" href="../cells/cells.html?cell=teaching">Teaching</a>
                                  <a class="dropdown-item" href="../cells/cells.html?cell=environment">Environment</a>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="prayatna.html">Prayatna</a></li>
                            <li class="nav-item"><a class="nav-link" href="../events.html">Events</a></li>
                            <li class="nav-item"><a class="nav-link" href="../portfolio.html">Gallery</a></li>
                            <li class="nav-item"><a class="nav-link" href="../think_thank.html">Think Thank</a></li>
                            <li class="nav-item"><a class="nav-link" href="login.php">Check Hours</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!--End of Navbar-->
            <!--Form-->
                <section style="margin-top: 140px;margin-bottom: 30px;height: 65vh;">
                <?php validate_login() ?>
                <div class="container main-bg" style="height: 350px !important;">
                    <div class="sub-main-w3">
		                <form action="#" method="post" style="margin-top: 0 !important;" class="form-group">
							<h3 class="legend" style=" color:  #1d82b1;"><i class="fas fa-sign-in-alt fa-1.5x"></i>Login</h3>
							<div class="input">
								<input type="text" placeholder="Roll No" class="form-control" id="rollno" name="rollno" required/>
                            </div>
                            <div class="input">
                               <input type="password" placeholder="Password" class="form-control" id="password" name="password" required/>
                            </div>
                            <button type="submit" class="btn submit" name="login" id="login">Login</button>
                            <div>
                                <p style="letter-spacing: 1px; padding-top: 10px;padding-bottom: 20px !important;font-size:15px;">Don't have an Account?<strong><a href="signup.php" style="margin-left:5px; margin-right:5px;font-size: 20px;">SignUp</a></strong>here</p>
                            </div>
                        </form>
                    </div>
                </div>
                </section>
            <!--End of form-->
            <!--Footer-->
	
    <iframe src="footer.html" frameborder="0" scrolling="no" style="width: 100%;height: 200px;"></iframe>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.9.2/firebase.js"></script>
    <script src="js/think_thank_submit.js"></script>


  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, "script", "facebook-jssdk"));</script>

</body>

</html>