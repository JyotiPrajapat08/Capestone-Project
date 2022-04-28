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
						<li class="nav-item active"><a class="nav-link" href="vpshosting.php">VPS Hosting</a></li>
						<li class="nav-item "><a class="nav-link" href="dedicatedserver.php">Dedicated Server</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
					</ul>
					
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div class="all-title-box-vpn">
		<div class="container text-center">
			<h1> VPS Hosting<span class="m_1">control your business virtually by relying on our private servers </span></h1>
		</div>
	</div>
	
	<div id="pricing" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Get the Perfect Hosting</h3>
                <p>Manage your fast-moving business with our easy, flexible and scalable VPS resources </p>
            </div><!-- end title -->

			<div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <span class="heading">
                                <h3>384 Mb VPS</h3>
                            </span>
                            <span class="price-value">$15.99<span class="month">per month</span> 
                        </div>

                        <div class="pricingContent">
                            <i class="fa fa-adjust"></i>
                            <ul>
                                <li>Self-Managed VPS</li>
                                <li>Equal Share CPU</li>
                                <li>384 MB DDR3 RAM</li>
                                <li>10 GB RAID-10 Storage</li>
                                <li>150 GB Bandwidth</li>
                                <li>FREE Billing System</li>
                                <li>FREE $9.50 eNom Account</li>
                                <li>FREE VPS Control Panel</li>
                                <li>NO cPanel/WHM Available</li>
                                <li>24/7 N. American Support </li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                        <?php
if(isset($_SESSION['log']))
{
    ?>
     <a href="between.php?name=384 MB VPS plan&&price=15.99" class="hover-btn-new" ><span>Proceed To Pay</span></a>
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
                                <h3>512 Mb VPS</h3>
                            </span>
                            <span class="price-value">$15.99<span class="month">per month</span> 
                        </div>

                        <div class="pricingContent">
                            <i class="fa fa-briefcase"></i>
                            <ul>
                                <li>Fully Managed VPS</li>
                                <li>Equal Share CPU</li>
                                <li>512 MB DDR3 RAM</li>
                                <li>25 GB RAID-10 Storage</li>
                                <li>500 GB Bandwidth</li>
                                <li>cPanel/WHM Available</li>
                                <li>FREE Billing System</li>
                                <li>FREE $9.50 eNom Account</li>
                                <li>FREE cPanel Migrations</li>
                                <li>24/7 N. American Support </li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                        <?php
if(isset($_SESSION['log']))
{
    ?>
     <a href="between.php?name=512 MB VPS plan&&price=15.99" class="hover-btn-new" ><span>Proceed To Pay</span></a>
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
                                <h3>768 Mb VPS</h3>
                            </span>
                            <span class="price-value">$15.99<span class="month">per month</span> 
                        </div>

                        <div class="pricingContent">
                            <i class="fa fa-cube"></i>
                            <ul>
                                <li>Fully Managed VPS</li>
                                <li>Equal Share CPU</li>
                                <li>768 MB DDR3 RAM</li>
                                <li>50 GB RAID-10 Storage</li>
                                <li>750 GB Bandwidth</li>
                                <li>cPanel/WHM Available</li>
                                <li>FREE Billing System</li>
                                <li>FREE $9.50 eNom Account</li>
                                <li>FREE cPanel Migrations</li>
                                <li>24/7 N. American Support </li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                        <?php
if(isset($_SESSION['log']))
{
    ?>
     <a href="between.php?name=768 MB VPS plan&&price=15.99" class="hover-btn-new" ><span>Proceed To Pay</span></a>
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
                    <p class="lead">High speed servers, reliable back-up system, multiple IP address, instant troubleshooting.</p>
                </div>
            </div><!-- end title -->

            <hr class="invis"> 

            <div class="row"> 
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i class="flaticon-server global-radius effect-1 alignleft"></i>
                        <h3>2 Dedicated IP addresses</h3>
                        <p>Get 2 IP address on subscribing to provided flexibility to operate your business</p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <i class="flaticon-cloud-computing-1 global-radius effect-1 alignleft"></i>
                        <h3>Full root access &amp; rebooting</h3>
                        <p>Have control on your servers and freedom to reboot when required</p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <i class="flaticon-world-wide-web global-radius effect-1 alignleft"></i>
                        <h3>FREE Domain Reseller Account</h3>
                        <p>On sign-up get a free Domain reseller account to establish it to your clients </p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="hr3"> 

            <div class="row"> 
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i class="flaticon-cup global-radius effect-1 alignleft"></i>
                        <h3>Dual Quad Core Servers</h3>
                        <p>Get Industry leading servers to meet the dynamic needs of your business</p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <i class="flaticon-cer-file-format global-radius effect-1 alignleft"></i>
                        <h3>VPS Management Portal</h3>
                        <p>Manage your VPS portal through our one-stop customer portal for all your business needs</p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <i class="flaticon-locked global-radius effect-1 alignleft"></i>
                        <h3>Nightly Backup</h3>
                        <p>Reduce your tension about your sensitive data. We secure your data every night through our free back up services.</p>
                    </div><!-- end icon-wrapper -->
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