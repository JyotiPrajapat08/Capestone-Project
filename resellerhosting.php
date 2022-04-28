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
						<li class="nav-item active"><a class="nav-link" href="resellerhosting.php">Reseller hosting </a></li>
						<li class="nav-item"><a class="nav-link" href="vpshosting.php">VPS Hosting</a></li>
						<li class="nav-item"><a class="nav-link" href="dedicatedserver.php">Dedicated Server</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
					</ul>
					
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1> Reseller Hosting<span class="m_1">Host Your Business Seamlessly With Our Reseller Hosting Plans </span></h1>
		</div>
	</div>
	
	<div id="pricing" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Get the Perfect Hosting</h3>
                <p>Easy setup, supercharged billing solutions, amazing redundancy, fantastic support & more. Start your Hosting business seamlessly with Reseller Hosting plans from CDN.  </p>
            </div><!-- end title -->

			<div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <span class="heading">
                                <h3>Half Slice</h3>
                            </span>
                            <span class="price-value">$10<span class="month">per month</span> 
                        </div>

                        <div class="pricingContent">
                            <i class="fa fa-adjust"></i>
                            <ul>
                                <li>Disk Space- 10GB</li>
                                <li>Data Transfer- 100GB</li>
                                <li>Client Accounts- unlimited</li>
                                <li>Unlimited Emails</li>
                                <li>Unlimited Databases</li>
								<li>Unlimited Domains</li>
								<li>Processor-Intel Quad</li>
								<li>cPanel and FTP Access</li>
								<li>Web Host Manager (WHM)</li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                        <?php
if(isset($_SESSION['log']))
{
    ?>
     <a href="between.php?name=half slice plan&&price=10" class="hover-btn-new" ><span>Proceed To Pay</span></a>
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
                                <h3>1 Slice</h3>
                            </span>
                            <span class="price-value">$10<span class="month">per month</span> 
                        </div>

                        <div class="pricingContent">
                            <i class="fa fa-briefcase"></i>
                            <ul>
                                <li>Disk Space- 25GB</li>
                                <li>Data Transfer- 250GB</li>
                                <li>Client Accounts- unlimited</li>
                                <li>Unlimited Emails</li>
                                <li>Unlimited Databases</li>
								<li>Unlimited Domains</li>
								<li>Processor-Intel Quad</li>
								<li>cPanel and FTP Access</li>
								<li>Web Host Manager (WHM)</li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                        <?php
if(isset($_SESSION['log']))
{
    ?>
     <a href="between.php?name=One Slice plan&&price=10" class="hover-btn-new" ><span>Proceed To Pay</span></a>
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
                                <h3>2 Slice</h3>
                            </span>
                            <span class="price-value">$10<span class="month">per month</span> 
                        </div>

                        <div class="pricingContent">
                            <i class="fa fa-cube"></i>
                            <ul>
                                <li>Disk Space- 50GB</li>
                                <li>Data Transfer- 500GB</li>
                                <li>Client Accounts- unlimited</li>
                                <li>Unlimited Emails</li>
                                <li>Unlimited Databases</li>
								<li>Unlimited Domains</li>
								<li>Processor-Intel Quad</li>
								<li>cPanel and FTP Access</li>
								<li>Web Host Manager (WHM)</li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                        <?php
if(isset($_SESSION['log']))
{
    ?>
     <a href="between.php?name=Two Slice plan&&price=10" class="hover-btn-new" ><span>Proceed To Pay</span></a>
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
                    <p class="lead">Easy Hosting Management with WHM and cPanel Managed Services Secured Hosting Environment Scalability Seamless Website Migration Optimized Performance
</p>
                </div>
            </div><!-- end title -->

            <hr class="invis"> 

            <div class="row"> 
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i class="flaticon-server global-radius effect-1 alignleft"></i>
                        <h3>FREE RESELLER ACCOUNT</h3>
                        <p>1-click Upgrade to your FREE Domain Reseller account on our Reseller Program to sell domains, hosting & other products. </p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <i class="flaticon-cloud-computing-1 global-radius effect-1 alignleft"></i>
                        <h3>MANAGED SERVICES</h3>
                        <p>Our reseller plans come with complete server management. This includes features like 24/7 server maintenance, security, resource upgrades, malware scanning, and more.</p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <i class="flaticon-world-wide-web global-radius effect-1 alignleft"></i>
                        <h3>SECURED HOSTING ENVIORNMENT </h3>
                        <p>Your hosting account includes high-performance security features such as SSL certification, DDoS protection, brute force defense, and many others to help keep your site secure.</p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="hr3"> 

            <div class="row"> 
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i class="flaticon-cup global-radius effect-1 alignleft"></i>
                        <h3>Free WHM & cPanel</h3>
                        <p>Simplify the process of hosting a website with our FREE cPanel offering. Create & Modify unlimited custom hosting accounts with easy management of Clients.</p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <i class="flaticon-cer-file-format global-radius effect-1 alignleft"></i>
                        <h3>SCALABILITY</h3>
                        <p>We build our plans to grow with you. As you increase your traffic, your server’s resources can easily be ramped up to meet increased demand.</p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <i class="flaticon-locked global-radius effect-1 alignleft"></i>
                        <h3>BASIC EMAIL INCLUDED</h3>
                        <p>Offer your customers the ability to create unlimited Email accounts for their domain. IMAP secure email lets your customers access email from every device.</p>
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