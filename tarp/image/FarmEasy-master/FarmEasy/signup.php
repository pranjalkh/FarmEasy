<!DOCTYPE html>
<html>
<title>SIGN UP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="adsty.css">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="fontawesome.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}
.section1{height:120px;width:1500px;}

.active
{background-color: #CDCDCD; color: black;}

</style>
<body>
<!-- Navbar (sit on top) -->
    <a href="login.php" class="navi"><i class="fa fa-arrow-left"></i> GO BACK</a>
<br>
<br>
   <div class="display-container opacity-min" id="home">
  <div class="display-middle" style="white-space:nowrap;">
    <h1><span class="center">MEMBER SIGNUP</span></h1>
  </div>
</div>

     <div id="login">
      <form method="POST" action="signed.php">
        <span class="fa fa-user"></span>
          <input type="text" name="username" placeholder="Username...">
          
       
        <span class="fa fa-lock"></span>
          <input type="password" name="password" placeholder="Password..."> 

          <span class="fa fa-user"></span>
          <input type="email" name="email" placeholder="Email...">

          <span class="fa fa-user"></span>
          <input type="text" name="name" placeholder="Name...">

          <span class="fa fa-globe"></span>
          <input type="text" name="state" placeholder="State...">


        <input type="submit" value="SIGN UP">

</form>
</div>
</body>
</html>