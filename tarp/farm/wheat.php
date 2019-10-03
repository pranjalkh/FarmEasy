<?php include ( "../inc/connect.inc.php" ); ?>
<?php 
ob_start();
session_start();
if (!isset($_SESSION['user_login'])) {
	$user = "";
}
else {
	$user = $_SESSION['user_login'];
	$result = mysqli_query($connection,"SELECT * FROM user WHERE id='$user'");
		$get_user_email = mysqli_fetch_assoc($result);
			$uname_db = $get_user_email['firstName'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Wheat</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<span id='MicrosoftTranslatorWidget' class='Dark' style='width: 100%; box-sizing: border-box; color:white;background: linear-gradient(to right, #96c93d, #00b09b);margin: 0;'></span>
  <script type='text/javascript'>setTimeout(function(){{var s=document.createElement('script');s.type='text/javascript';s.charset='UTF-8';s.src=((location && location.href && location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&ctf=False&ui=true&settings=Manual&from=';var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild); }},0);</script>
	<?php include ( "../inc/mainheader.inc.php" ); ?>
	<div class="categolis">
		<table>
			<tr>
				<th>
					<a href="rice.php" style="text-decoration: none;color: #fff;padding: 4px 12px;background-color: #4CAF50;border-radius: 12px;">Rice</a>
				</th>
				<th><a href="others.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #4CAF50;border-radius: 12px;">Others</a></th>
				<th><a href="cotton.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color:#4CAF50 ;border-radius: 12px;">Cotton</a></th>
				<th><a href="wheat.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #24bfae;border-radius: 12px;">Wheat</a></th>
				<th><a href="pulses.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #4CAF50;border-radius: 12px;">Pulses</a></th>
				<th><a href="vegetables.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #4CAF50;border-radius: 12px;">Vegetables</a></th>
				<th><a href="fruits.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #4CAF50;border-radius: 12px;">Fruits</a></th>
				<th><a href="corn.php" style="text-decoration: none;color: #ddd;padding: 4px 12px;background-color: #4CAF50;border-radius: 12px;">Corn</a></th>
			</tr>
		</table>
	</div>
	<div style="padding: 30px 120px; font-size: 25px; margin: 0 auto; display: table; width: 98%;">
		<div>
		<?php 
			$getposts = mysqli_query($connection,"SELECT * FROM products WHERE available >='1' AND item ='wheat'  ORDER BY id DESC LIMIT 10") or die(mysqli_error());
					if (mysqli_num_rows($getposts)) {
					echo '<ul id="recs">';
					while ($row = mysqli_fetch_assoc($getposts)) {
						$id = $row['id'];
						$pName = $row['pName'];
						$price = $row['price'];
						$description = $row['description'];
						$picture = $row['picture'];
						
						echo '
							<ul style="float: left;">
								<li style="float: left; padding: 0px 25px 25px 25px;">
									<div class="home-prodlist-img"><a href="view_product.php?pid='.$id.'">
										<img src="../image/product/wheat/'.$picture.'" class="home-prodlist-imgi">
										</a>
										<div style="text-align: center; padding: 0 0 6px 0;"> <span style="font-size: 15px;">'.$pName.'</span><br> Price: '.$price.' Rs</div>
									</div>
									
								</li>
							</ul>
						';

						}
				}
		?>
			
		</div>
	</div>
</body>
</html>