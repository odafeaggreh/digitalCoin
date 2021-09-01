<?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            require('login-process.php');
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.php" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    
    <!-- PAGE TITLE HERE -->
    <title>DigitalCryptoCoin | Your Gateway to a Richer life</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- [if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif] -->
    
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css" />
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.min.css">
    <!-- ANIMATE STYLE SHEET --> 
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/loader.min.css">    
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="css/skin/skin-1.css">
    <!-- CUSTOM  STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/switcher.css">    

    
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">
    
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css?family=Crete+Round:400,400i&amp;subset=latin-ext" rel="stylesheet">
  
 
</head>

<?php include 'header.php';?>
        
        <!-- CONTENT START -->
        <div class="page-content">
        
             <!-- BREADCRUMB ROW -->                            
            
            <!-- BREADCRUMB ROW END --> 
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/banner/about-banner.jpg);">
                <div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h1 class="text-white">Login to your account</h1>
                    </div>
                </div>
            </div>
            
                        
            <!-- SECTION CONTENT --> 
            <div class="section-full p-t80 p-b50">
                <div class="container">
                    <div class="col-sm-5 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 col-md-5 col-lg-5">
				<!-- Logo Starts -->
				<a class="visible-xs" href="index.php" style="text-align:center; color:#555;">
				<h3>Login to your account</h3>
				</a>
                <?php if (isset($_GET['success'])) {?>
                    <div class="alert alert-success" role="alert">
                            <?php echo $_GET['success']?>
                    </div>
                <?php }?>
				
				<!-- Logo Ends -->
				<div class="form-container">
					<div>
						<!-- Section Title Starts -->
						
						<!-- Section Title Ends -->
						<!-- Form Starts -->
						<form class="form-horizontal" method="POST" action="">
							<!-- <input type="hidden" name="_token" value="z7UyRBxAatboLMu4SnIkLQfkf0moUQNQsWyLCVKW">	 -->
						<!-- Input Field Starts -->
							<div class="form-group">
								<input style="background:transparent; color:#555;" class="form-control" name="email" id="email" placeholder="ENTER YOUR EMAIL" type="email" value="" required="" autofocus="">
                            </div>
							<!-- Input Field Ends -->
							<!-- Input Field Starts -->
							<div class="form-group">
                                <input style="background:transparent; color:#555;" class="form-control" id="password" name="password" placeholder="ENTER PASSWORD" type="password" required="">
								<input name="status" type="hidden" value="active">
							</div>
							<!-- Input Field Ends -->
							<!-- Submit Form Button Starts -->
							<center><div class="form-group">
								<button class="btn btn-primary" type="submit">login</button><br><br>
								<a href="forgot/index.php">Forgot Your Password?</a>

								<p class="text-center">Don't have an account?  <a href="register.php">register now</a></p>
							</div></center>
							<!-- Submit Form Button Ends -->
                        </form>
                        
						<!-- Form Ends -->
					</div>
				</div>
				
			</div>
                  </div>
            </div>
            <!-- SECTION CONTENT END -->
           

            
       </div>
        <!-- CONTENT END -->
        </div>
        <?php include 'footer.php';?>
