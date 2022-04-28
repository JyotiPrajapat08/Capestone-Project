<?php
session_start();
include_once("config.php");
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
<body class="host_version"> 



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
<!--End mainmenu area-->
<div class="all-title-box">
		<div class="container text-center">
		<h1>Payment Success</h1>
		</div>
	</div>
<!--Start breadcrumb area-->     

<!--End breadcrumb area-->

<!--Start breadcrumb bottom area-->     

<!--End breadcrumb bottom area-->

<div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
<!--Start login register area-->

          <?php
		  if(isset($_SESSION['tid']))
		  {
		  $email=$_SESSION['log'];
		  
		  $plan=$_SESSION['name'];
		  $tid=$_SESSION['tid'];
$to = "$email,satnamsinghbawa@gmail.com";
$subject = "Thanks for Payment and buying $plan ";

$message = "
<b><br><br>Welcome to CDN </b><Br>
Thanks for payment and your $plan is active now
Your Transaction id is $tid
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <support@fitwithvik.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

	
mail($to,$subject,$message,$headers);

		  }
?>
	
	
	<center><h1>Your Payment is not successfull. Please try again</h1>
						<img src="assets/cancel.png" style="width:40%">
						</center>
                        <span class="border"></span>
                    </div>
					
                </div>    
            </div>
			 
<!--End login register area-->
<?php
session_destroy();
include('footer.php');
?>
			