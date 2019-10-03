<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link href="styles.css" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  	<script>!function(e,t,a){var c=e.head||e.getElementsByTagName("head")[0],n=e.createElement("script");n.async=!0,n.defer=!0, n.type="text/javascript",n.src=t+"/static/js/chat_widget.js?config="+JSON.stringify(a),c.appendChild(n)}(document,"https://app.engati.com",{bot_key:"18e37d6f88b0433a",bot_name:"AgroBot",welcome_msg:true,branding_key:"default"});</script>
	<title>FarmEasy.com</title>
</head>
<body>
	<header>
    <h2><a href="#">Farm Easy</a></h2>
  </header>
	<section class="hero">
	    <div class="background-image"></div>
	    <div class="hero-content-area">
	      <h3><img src="logoTrans.png" class="Logo"></h3>
	      <h2>Welcome Back, <?php echo $_SESSION['login_user']; ?>!</h2>
	    </div>
  	</section>
	<div class="SixtyPercent">
			<div class="row">
				<a href="index.php" class="box" style="margin-right: 20px;">
					<i class="fa fa-sign-out border"></i>
					<br><span class="text">Signout</span>
				</a>
				<a href="#" class="box">
					<i class="fa fa-play border"></i>
					<br><span class="text">Online Tutorials</span>
				</a>
			</div>
			<div class="row">
				<a href="#" class="box" style="margin-right: 20px;">
					<i class="fa fa-phone border"></i>
					<br><span class="text">Kisan Call Center</span>
				</a>
				<a href="#" class="box">
					<i class="fa fa-edit border"></i>
					<br><span class="text">Agricultural Schemes</span>
				</a>
			</div>
			<div class="row">
				<a href="#" class="box" style="margin-right: 20px;">
					<i class="fa fa-calendar border"></i>
					<br><span class="text">Events</span>
				</a>
				<a href="forecast.html" class="box">
					<img src="weather.png" class="border" style="width: 100px;background: #99d65c;">
					<br><span class="text">Weather</span>
				</a>
			</div>
			<div class="row">
				<a href="Msp.html" class="box" style="margin-right: 20px;">
					<i class="fa fa-eye border"></i>
					<br><span class="text">MSP View</span>
				</a>
				<a href="#" class="box">
					<i class="fa fa-pagelines border"></i>
					<br><span class="text">Crop Predictor</span>
				</a>
			</div>
			<div class="row">
				<a href="login.php" class="box" style="margin-right: 20px;">
					<i class="fa fa-shopping-cart border"></i>
					<br><span class="text">E - Commerce</span>
				</a>
				<a href="#" class="box">
					<i class="fa fa-comments border"></i>
					<br><span class="text">Farmer's Forum</span>
				</a>
			</div>
			<div class="row">
				<a href="#" class="box" style="margin-right: 20px;">
					<i class="fa fa-inr border"></i>
					<br><span class="text">Donate For a Cause</span>
				</a>
				<a href="#" class="box">
					<img src="fert.png" class="border" style="width: 100px;background: #99d65c;">
					<br><span class="text">Fertilizers/ Pesticides</span>
				</a>
			</div>
	</div>
</div>
<footer>
    <p>The footer <a href="#"></a></p>
    <p>Why are you even reading this?! There's never anything interesting in the footer!</p>
    <ul>
      <li><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
      <li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
      <li><a href="#"><i class="fa fa-snapchat-square fa-2x"></i></a></li>
    </ul>
  </footer>

</body>
</html>
