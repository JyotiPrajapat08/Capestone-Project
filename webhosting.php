<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>CDN Hosting Service Provider</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/624562ad0bfe3f4a8770a87e/1fvfgiu3e';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<body class="host_version"> 

<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Customer Login</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a href="#Registration" data-toggle="tab">Registration</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal" action="login.php" method="post">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" name="uemail" id="email1" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" name="upassword" id="exampleInputPassword1" placeholder="Password" type="password">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<input type="submit" name="login" value="Login" class="btn btn-light btn-radius btn-brd grd1">
										
									
									
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form role="form" class="form-horizontal" action="register.php" method="post">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" name="uname" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
									<input class="form-control" name="uemail" id="email" placeholder="Email" type="email">
								<div class="col-sm-12">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" name="upassword" id="password" placeholder="Password" type="password">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" name="umobile" id="mobile" placeholder="Mobile" type="number">
								</div>
							</div>
							
							<div class="row">							
								<div class="col-sm-10">
									<input type="submit" name="register" value="Register" class="btn btn-light btn-radius btn-brd grd1"/>
										
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>
	
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">
					<img src="images/cdn-logo.jpg" alt="" />
				</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-host">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item active"><a class="nav-link" href="webhosting.php">Web hosting </a></li>
                    <li class="nav-item"><a class="nav-link" href="resellerhosting.php">Reseller hosting </a></li>
                    <li class="nav-item"><a class="nav-link" href="vpshosting.php">VPS Hosting</a></li>
                    <li class="nav-item"><a class="nav-link" href="dedicatedserver.php">Dedicated Server</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
                
            </div>
        </div>
    </nav>
</header>
	<!-- End header -->
	
	<div class="all-title-box-web">
		<div class="container text-center">
			<h1> Web Hosting<span class="m_1">Opt in for our web hosting to get your domain for your business website</span></h1>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Features</h3>
                    <p class="lead">Web hosting service maintains the servers that house the websites and provide a
                        hosting platform for each of them.</p>
                </div>
            </div><!-- end title -->

            <hr class="invis">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper ">
                        <i class="flaticon-server global-radius effect-1 alignleft"></i>
                        <h3>Same Day Setup</h3>
                        <p>Don't worry about waiting for your installation appointment. We guarantee 24 hours setup from
                            the day your order is confirmed.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper">
                        <i class="flaticon-cloud-computing-1 global-radius effect-1 alignleft"></i>
                        <h3>99.9% Uptime Guarantee</h3>
                        <p>Work uninterupted with our 99.9% uptime guarantee and dedicated on-call service to keep your
                            work moving
                        </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper">
                        <i class="flaticon-world-wide-web global-radius effect-1 alignleft"></i>
                        <h3>30 Day Money Back Guarantee</h3>
                        <p>Not statisfied with our services? You get 100% refund with in 30 days of your order
                            confirmation.
                        </p>
                    </div>
                </div>
            </div>

            <hr class="hr3">

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper">
                        <i class="flaticon-cup global-radius effect-1 alignleft"></i>
                        <h3>Free Domain Name</h3>
                        <p>Thinking about third party vendors for your domain name? Relax! we got it covered under our
                            free domain name service for our customers.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper ">
                        <i class="flaticon-cer-file-format global-radius effect-1 alignleft"></i>
                        <h3>Free 1-click Software Installer</h3>
                        <p>Hassel free software installation with our integerated 1 click software installer tool for
                            all the softwares you need.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper">
                        <i class="flaticon-locked global-radius effect-1 alignleft"></i>
                        <h3>Free cPanel With Every Plan</h3>
                        <p>We provide free C-Panel with every plan which you can use to manage the websit hosting all in
                            one place.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
	<div id="hosting" class="section wb" style="background: rgb(248, 248, 248)">
        <div class="container">
            <div class="section-title text-center">
                <h3>Hosting Packages</h3>
                <p class="lead">Web hosting companies typically offer one or more different types of hosting plans,
                    based on the technology or servers they operate and the scale of the infrastructure, often with
                    consideration for the audiences they intend to serve.</p>
            </div><!-- end title -->

            <div class="row dev-list text-center">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="widget server clearfix">
                        <img src="images/hosting_01.jpg" alt="" class="img-fluid">
						<div class="inner-dit">
							<div class="widget-title">
								<h3>Student Hosting</h3>
								<small>Starting from $23 per year</small>
							</div>
							<!-- end title -->
							
						</div>
						
                        <hr> 

                       <div>
                            <p>All these at only RM 99 per year with FREE Lifetime Domain. Pre-Installed 140 +Script.Share your photo gallery with friends!</p>
                        </div>
                        <hr>
                        <?php
if(isset($_SESSION['log']))
{
    ?>
     <a href="between.php?name=student hosting plan&&price=23" class="hover-btn-new" ><span>Proceed To Pay</span></a>
<?php
}                   
else
{
?><a href="#" class="hover-btn-new" data-toggle="modal" data-target="#login"><span>Buy Now</span></a>
<?php
}     
?>
                        
                    </div><!--widget -->
                </div><!-- end col -->

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="widget server clearfix">
                        <img src="images/hosting_02.jpg" alt="" class="img-fluid">
						<div class="inner-dit">
							<div class="widget-title">
								<h3>Performance and Affordability</h3>
                                <small>Starting from $30 per year</small>
								<small></small>
							</div>
							<!-- end title -->
							
						</div>

                        <hr> 

                        <div>
                            <p>100% your own brand.Host UNLIMITED Domains
                               Custom Name Server.User Friendly Control Panel</p>
                        </div>
                        <hr>
<?php
if(isset($_SESSION['log']))
{
    ?>
     <a href="between.php?name=performance and Affordability plan&&price=23" class="hover-btn-new" ><span>Proceed To Pay</span></a>
<?php
}                   
else
{
?><a href="#" class="hover-btn-new" data-toggle="modal" data-target="#login"><span>Buy Now</span></a>
<?php
}     
?>

                    </div><!--widget -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

  
    <?php
	if(isset($_SESSION['error']))
	{
		?>
		<script>
		alert("<?php echo $_SESSION['error']; ?>");
		</script>
		<?php
	}
	?>
    
<?php
	include('footer.php');
    unset($_SESSION['error']);
	?>

    

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>