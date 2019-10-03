<!DOCTYPE html>
<html>
<title>LOGIN</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="adsty.css">
<link rel="stylesheet" href="styles.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="fontawesome.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}
.section1{height:120px;width:1500px;}
.error{
  color: #ff0040;
}
.active
{background-color: #CDCDCD; color: black;}

</style>
<body>
    <a href="index.php" class="navi" ><i class="fa fa-home"></i> HOME</a>

<br><br><br><br><br>
<?php

include("config.php");
$usernameErr = $passwordErr =$error="";
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (empty($_POST["username"])) 
  {
    $usernameErr = " Username is required";
  } 
  if(empty($_POST["password"]))
  {
    $passwordErr = " Password is required";
  } 
// username and password sent from Form
$myusername=mysqli_real_escape_string($connection,$_POST['username']); 
$mypassword=mysqli_real_escape_string($connection,$_POST['password']); 
$sql="SELECT username FROM signups WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$active=$row['active'];
$count=mysqli_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
$_SESSION['login_user']=$myusername;

header("location: home.php");
}
else 
{
if((!empty($_POST["username"]))and(!empty($_POST["password"]))and($count!=1))
$error=" Your Login Mail or Password is Invalid";
}
}
?>

    <h1><span class="center">MEMBER LOGIN</span></h1>

     <div id="login">
      <form method="POST" action="">
        <span class="fa  fa-user"></span>
          <input type="text" name="username" placeholder="Username...">
          
       
        <span class="fa fa-lock"></span>
          <input type="password" name="password" placeholder="Password...">    
        <input type="submit" value="LOGIN">

</form>
<br><br>
<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOT A MEMBER?&nbsp;&nbsp;&nbsp;
<a href="signup.php"  class="button">SIGN UP</a></h3>
<span class="error">*&nbsp;&nbsp; <?php echo $error;?></span><br>
<span class="error">*&nbsp;&nbsp; <?php echo $usernameErr;?></span><br>
<span class="error">*&nbsp;&nbsp; <?php echo $passwordErr;?></span><br>


</body>
</html>