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
						<li class="nav-item"><a class="nav-link" href="webhosting.php">Web hosting </a></li>
						<li class="nav-item"><a class="nav-link" href="resellerhosting.php">Reseller hosting </a></li>
						<li class="nav-item"><a class="nav-link" href="vpshosting.php">VPS Hosting</a></li>
						<li class="nav-item active"><a class="nav-link" href="dedicatedserver.php">Dedicated Server</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
					</ul>
					
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1> Dedicated Servers<span class="m_1">Keep Your Data Secure. With Our Edgecast Dedicated Servers.</span></h1>
		</div>
	</div>
	
	<div id="pricing" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Get the Perfect Hosting</h3>
                <p>Get a Free Domain Transfer and Dedicated Support from our Experts. Get Started Today! </p>
            </div><!-- end title -->

			<div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <span class="heading">
                                <h3>Standard</h3>
                            </span>
                            <span class="price-value">$49.99<span class="month">per month</span>
                        </div>

                        <div class="pricingContent">
                            <i class="fa fa-adjust"></i>
                            <ul>
                                <li>Processor-Intel Dual</li>
                                <li>System Memory-Core 2.5Ghz</li>
                                <li>Storage-2GB DDR2</li>
                                <li>1 x 160GB Monthly Transfer</li>
                                <li>4000GB Free Dedicated IPs</li>
								<li>5 Upgrades Available</li>
								<li>Multi-Gigabit Network</li>
								<li>100Mbit Uplink Connectivity</li>
								<li>FREE Reboots</li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                        <?php
if(isset($_SESSION['log']))
{
    ?>
     <a href="between.php?name=standard plan&&price=49.99" class="hover-btn-new" ><span>Proceed To Pay</span></a>
<?php
}                   
else
{
?><a href="#" class="hover-btn-new" data-toggle="modal" data-target="#login"><span>Buy Now</span></a>
<?php
}     
?>
                        </div><!-- BUTTON BOX-->
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable pink">
                        <div class="pricingTable-header">
                            <span class="heading">
                                <h3>Business</h3>
                            </span>
                            <span class="price-value">$69.99<span class="month">per month</span> 
                        </div>

                        <div class="pricingContent">
                            <i class="fa fa-briefcase"></i>
                            <ul>
                                <li>Processor-Intel Quad</li>
                                <li>System Memory-Core 2.4Ghz</li>
                                <li>Storage-4GB DDR2</li>
                                <li>1 x 160GB Monthly Transfer</li>
                                <li>4000GB Free Dedicated IPs</li>
								<li>5 Upgrades Available</li>
								<li>Multi-Gigabit Network</li>
								<li>100Mbit Uplink Connectivity</li>
								<li>FREE Reboots</li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                        <?php
if(isset($_SESSION['log']))
{
    ?>
     <a href="between.php?name=Business plan&&price=69.99" class="hover-btn-new" ><span>Proceed To Pay</span></a>
<?php
}                   
else
{
?><a href="#" class="hover-btn-new" data-toggle="modal" data-target="#login"><span>Buy Now</span></a>
<?php
}     
?>
                        </div><!-- BUTTON BOX-->
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable orange">
                        <div class="pricingTable-header">
                            <span class="heading">
                                <h3>Premium</h3>
                            </span>
                            <span class="price-value">$99.99<span class="month">per month</span> 
                        </div>

                        <div class="pricingContent">
                            <i class="fa fa-cube"></i>
                            <ul>
                                <li>Processor-Intel i7</li>
                                <li>System Memory-Core 2.6Ghz</li>
                                <li>Storage-8GB DDR3</li>
                                <li>1 x 250GB Monthly Transfer</li>
                                <li>4000GB Free Dedicated IPs</li>
								<li>5 Upgrades Available</li>
								<li>Multi-Gigabit Network</li>
								<li>100Mbit Uplink Connectivity</li>
								<li>FREE Reboots</li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                        <?php
if(isset($_SESSION['log']))
{
    ?>
     <a href="between.php?name=Premium plan&&price=99.99" class="hover-btn-new" ><span>Proceed To Pay</span></a>
<?php
}                   
else
{
?><a href="#" class="hover-btn-new" data-toggle="modal" data-target="#login"><span>Buy Now</span></a>
<?php
}     
?>
                        </div><!-- BUTTON BOX-->
                    </div>
                </div>
            </div>
            
        </div><!-- end container -->
    </div><!-- end section -->
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Features</h3>
                    <p class="lead">Free Domain transfer , Free file transfer , Free database transfer , Free Script Transfer, Publish to your web account.</p>
                </div>
            </div><!-- end title -->

            <hr class="invis"> 

            <div class="row"> 
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i class="flaticon-server global-radius effect-1 alignleft"></i>
                        <h3>Operating system choices</h3>
                        <p>Your business's applications may require a specialised operating system, such as a Windows Server OS or one of the various Linux versions.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <i class="flaticon-cloud-computing-1 global-radius effect-1 alignleft"></i>
                        <h3>Server configuration</h3>
                        <p>It's not only about picking the right operating system. Another important requirement is the ability to have complete control over your server.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <i class="flaticon-world-wide-web global-radius effect-1 alignleft"></i>
                        <h3>Hardware choices</h3>
                        <p>Even though dedicated servers can be costly, look for a hosting provider that provides a wide range of hardware options. </p>
                    </div>
                </div>
            </div>

            <hr class="hr3"> 

            <div class="row"> 
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i class="flaticon-cup global-radius effect-1 alignleft"></i>
                        <h3>Free WHMCS License</h3>
                        <p>WHMCS is the industry's leading all-in-one client billing and support management system. You get hosting services and free WHMCS.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <i class="flaticon-cer-file-format global-radius effect-1 alignleft"></i>
                        <h3>Server management</h3>
                        <p>Outsourcing server management to a service provider not only simplifies things, but it may also save you money in the long run.
 </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <i class="flaticon-locked global-radius effect-1 alignleft"></i>
                        <h3>Permanent KVMoIP</h3>
                        <p>KVM over IP technology enables IT administrators to manage their dedicated server even when remote access software is not available.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	

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