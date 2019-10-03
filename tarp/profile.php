<?php include ( "inc/connect.inc.php" ); ?>
<?php 

ob_start();
session_start();
if (!isset($_SESSION['user_login'])) {
	header("location: login.php");
}
else {
	$user = $_SESSION['user_login'];
	$result = mysqli_query($connection,"SELECT * FROM user WHERE id='$user'");
		$get_user_email = mysqli_fetch_assoc($result);
			$uname_db = $get_user_email['firstName'];
			$uemail_db = $get_user_email['email'];

			$umob_db = $get_user_email['mobile'];
			$uadd_db = $get_user_email['address'];
}

if (isset($_REQUEST['uid'])) {
	
	$user2 = mysqli_real_escape_string($_REQUEST['uid']);
	if($user != $user2){
		header('location: index.php');
	}
}else {
	header('location: index.php');
}

$search_value = "";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Farm Easy</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-image: url(image/homebackgrndimg1.png);">
	<span id='MicrosoftTranslatorWidget' class='Dark' style='width: 100%; box-sizing: border-box; color:white;background: linear-gradient(to right, #96c93d, #00b09b);margin: 0;'></span>
  <script type='text/javascript'>setTimeout(function(){{var s=document.createElement('script');s.type='text/javascript';s.charset='UTF-8';s.src=((location && location.href && location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&ctf=False&ui=true&settings=Manual&from=';var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild); }},0);</script>
	<div class="homepageheader">
			<div class="signinButton loginButton">
				<div class="uiloginbutton signinButton loginButton" style="margin-right: 40px;">
					<?php 
						if ($user!="") {
							echo '<a style="text-decoration: none; color: #fff;" href="logout.php">LOG OUT</a>';
						}
						else {
							echo '<a style="text-decoration: none; color: #fff;" href="signin.php">SIGN IN</a>';
						}
					 ?>
					
				</div>
				<div class="uiloginbutton signinButton loginButton" style="">
					<?php 
						if ($user!="") {
							echo '<a style="text-decoration: none; color: #fff;" href="profile.php?uid='.$user.'">Hi '.$uname_db.'</a>';
						}
						else {
							echo '<a style="text-decoration: none; color: #fff;" href="login.php">LOG IN</a>';
						}
					 ?>
				</div>
			</div>
			<div style="float: left; margin: 5px 0px 0px 23px;">
				<a href="index.php">
					<img style=" height: 75px; width: 130px;" src="image/ebuybdlogo.png">
				</a>
			</div>
			<div id="srcheader">
				<form id="newsearch" method="get" action="search.php">
				        <?php 
				        	echo '<input type="text" class="srctextinput" name="keywords" size="21" maxlength="120"  placeholder="Search Here..." value="'.$search_value.'"><input type="submit" value="search" class="srcbutton" >';
				         ?>
				</form>
			<div class="srcclear"></div>
			</div>
		</div>
	<div class="categolis">
		<table>
			<tr>
				<th>
					<a href="farm/rice.php" style="text-decoration: none;color: #fff;padding: 4px 12px;background-color: #4CAF50;border-radius: 12px;">Rice</a>
				</th>
				<th><a href="farm/others.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #4CAF50;border-radius: 12px;">Others</a></th>
				<th><a href="farm/cotton.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #4CAF50;border-radius: 12px;">Cotton</a></th>
				<th><a href="farm/wheat.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #4CAF50;border-radius: 12px;">Wheat</a></th>
				<th><a href="farm/pulses.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #4CAF50;border-radius: 12px;">Pulses</a></th>
				<th><a href="farm/vegetables.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #4CAF50;border-radius: 12px;">Vegetables</a></th>
				<th><a href="farm/fruits.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #4CAF50;border-radius: 12px;">Fruits</a></th>
				<th><a href="farm/corn.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #4CAF50;border-radius: 12px;">Corn</a></th>
			</tr>
		</table>
	</div>
	<div style="margin-top: 20px;">
		<div style="width: 900px; margin: 0 auto;">
		
			<ul>
				<li style="float: left;">
					<div class="settingsleftcontent">
						<ul>
							<ul>
							<li><?php echo '<a href="profile.php?uid='.$user.'" style=" background-color: #169e8f; border-radius: 4px; color: #fff;" >My Orders</a>'; ?></li>
							<li><?php echo '<a href="settings.php?uid='.$user.'" >Settings</a>'; ?></li>
						</ul>
						</ul>
					</div>
				</li>
				<li style="float: right; background-color: #fff;">
					<div>
						<div>
							<table class="rightsidemenu">
								<tr style="font-weight: bold;" colspan="10" bgcolor="#3A5487">
									<th>Product Name</th>
									<th>Price</th>
									<th>Total Product</th>
									<th>Order Date</th>
									<th>Delevery Date</th>
									<th>Delevery Place</th>
									<th>Delevery Status</th>
									<th>View</th>
								</tr>
								<tr>
									<?php include ( "inc/connect.inc.php");
									$query = "SELECT * FROM orders WHERE uid='$user' ORDER BY id DESC";
									$run = mysqli_query($query);
									while ($row=mysqli_fetch_assoc($run)) {
										$pid = $row['pid'];
										$quantity = $row['quantity'];
										$oplace = $row['oplace'];
										$mobile = $row['mobile'];
										$odate = $row['odate'];
										$ddate = $row['ddate'];
										$dstatus = $row['dstatus'];
										
										//get product info
										$query1 = "SELECT * FROM products WHERE id='$pid'";
										$run1 = mysqli_query($query1);
										$row1=mysqli_fetch_assoc($run1);
										$pId = $row1['id'];
										$pName = substr($row1['pName'], 0,50);
										$price = $row1['price'];
										$picture = $row1['picture'];
										$item = $row1['item'];
										$category = $row1['category'];
									 ?>
									<th><?php echo $pName; ?></th>
									<th><?php echo $price; ?></th>
									<th><?php echo $quantity; ?></th>
									<th><?php echo $odate; ?></th>
									<th><?php echo $ddate; ?></th>
									<th><?php echo $oplace; ?></th>
									<th><?php echo $dstatus; ?></th>
									<th><?php echo '<div class="home-prodlist-img"><a href="'.$category.'/view_product.php?pid='.$pId.'">
													<img src="image/product/'.$item.'/'.$picture.'" class="home-prodlist-imgi" style="height: 75px; width: 75px;">
													</a>
												</div>' ?></th>
								</tr>
								<?php } ?>
							</table>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>

	
</body>
</html>