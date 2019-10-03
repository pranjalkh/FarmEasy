<!DOCTYPE html>
<html>
<title>Add your Event</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="adsty.css">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="fontawesome.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
#login form input[type="date"] {
  background-color: gainsboro;
  border-radius: 0px 3px 3px 0px;
  color: dimgray;
  margin-bottom: 1em;
  padding: 0 16px;
  width: 255px;
  height: 50px;
  -webkit-transition:0.5s;
  transition:0.5s;
  }

#login form input[type="time"] {
  background-color: gainsboro;
  border-radius: 0px 3px 3px 0px;
  color: dimgray;
  margin-bottom: 1em;
  padding: 0 16px;
  width: 255px;
  height: 50px;
  -webkit-transition:0.5s;
  transition:0.5s;
  }
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
  <span id='MicrosoftTranslatorWidget' class='Dark' style='width: 100%; box-sizing: border-box; color:white;background: linear-gradient(to right, #96c93d, #00b09b);margin: 0;'></span>
  <script type='text/javascript'>setTimeout(function(){{var s=document.createElement('script');s.type='text/javascript';s.charset='UTF-8';s.src=((location && location.href && location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&ctf=False&ui=true&settings=Manual&from=';var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild); }},0);</script>
<!-- Navbar (sit on top) -->
    <a href="events.php" class="navi" style="right: 0;""><i class="fa fa-arrow-left"></i> &nbsp;See Events...</a>
<br>
<br>
   <div class="display-container opacity-min" id="home">
  <div class="display-middle" style="white-space:nowrap;">
    <h1><span class="center">Add your Event</span></h1>
  </div>
</div>

     <div id="login">
      <form method="POST" action="added.php">
        <span class="fa fa-user"></span>
          <input type="text" name="ename" placeholder="Event Name & Description...">
          
       
        <span class="fa fa-calendar"></span>
          <input type="date" name="date"> <br>

          <span class="fa fa-clock-o"></span>
          <input type="time" name="time">

          <span class="fa fa-globe"></span>
          <input type="text" name="loc" placeholder="Address...">

          <span class="fa fa-user"></span>
          <input type="text" name="post" placeholder="Username...">

        <input type="submit" value="Add!">

</form>
</div>
</body>
</html>