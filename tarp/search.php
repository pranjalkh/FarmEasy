<?php include ( "inc/connect.inc.php" ); ?>
<?php 
ob_start();
session_start();
if (!isset($_SESSION['user_login'])) {
	$user = "";
}
else {
	$user = $_SESSION['user_login'];
	$result = mysql_query("SELECT * FROM user WHERE id='$user'");
		$get_user_email = mysql_fetch_assoc($result);
			$uname_db = $get_user_email['firstName'];
}

if (isset($_REQUEST['keywords'])) {

	$epid = mysql_real_escape_string($_REQUEST['keywords']);
	if($epid != "" && ctype_alnum($epid)){
		
	}else {
		header('location: index.php');
	}
}else {
	header('location: index.php');
}

$search_value = "";
$search_value = trim($_GET['keywords']);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
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
				<th><a href="farm/cotton.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color:#4CAF50 ;border-radius: 12px;">Cotton</a></th>
				<th><a href="farm/wheat.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #4CAF50;border-radius: 12px;">Wheat</a></th>
				<th><a href="farm/pulses.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #4CAF50;border-radius: 12px;">Pulses</a></th>
				<th><a href="farm/vegetables.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #4CAF50;border-radius: 12px;">Vegetables</a></th>
				<th><a href="farm/fruits.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #4CAF50;border-radius: 12px;">Fruits</a></th>
				<th><a href="farm/corn.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #4CAF50;border-radius: 12px;">Corn</a></th>
			</tr>
		</table>
	</div>
	<div style="padding: 30px 120px; font-size: 25px; margin: 0 auto; display: table; width: 98%;">
		<div>
		<?php 
			if (isset($_GET['keywords']) && $_GET['keywords'] != ""){
				$search_value = trim($_GET['keywords']);
				$getposts = mysql_query("SELECT * FROM products WHERE pName like '%$search_value%'  ORDER BY id DESC") or die(mysql_error());
					if ( $total = mysql_num_rows($getposts)) {
					echo '<ul id="recs">';
					echo '<div style="text-align: center;"> '.$total.' Products Found... </div><br>';
					while ($row = mysql_fetch_assoc($getposts)) {
						$id = $row['id'];
						$pName = $row['pName'];
						$price = $row['price'];
						$description = $row['description'];
						$picture = $row['picture'];
						$item = $row['item'];
						
						echo '
							<ul style="float: left;">
								<li style="float: left; padding: 0px 25px 25px 25px;">
									<div class="home-prodlist-img"><a href="farm/view_product.php?pid='.$id.'">
										<img src="image/product/'.$item.'/'.$picture.'" class="home-prodlist-imgi">
										</a>
										<div style="text-align: center; padding: 0 0 6px 0;"> <span style="font-size: 15px;">'.$pName.'</span><br> Price: '.$price.' Tk</div>
									</div>
									
								</li>
							</ul>
						';

						}
				}else {
				echo "Nothing Found!";
			}
			}else {
				echo "Input Someting...";
			}
			
		?>
			
		</div>
	</div>
</body>
</html>