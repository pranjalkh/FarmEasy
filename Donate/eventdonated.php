<?php
session_start();

?>
<!DOCTYPE html>
<html>
<title>DONATE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/farmeasy/font.css">
<link rel="stylesheet" href="/farmeasy/adsty.css">
<link rel="stylesheet" href="/farmeasy/styles.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="fontawesome.css">
<style>

#left{
    float: left;
    margin-left: 20%;
    width: 15%;
}
.cont {
    
}
button {
  padding: 2%;
  background-color: #4CAF50;
  border: 0;
  width: 100%;
  height: 40px;
  border-radius: 3px;
  color: white;
  cursor: pointer;
  transition: background 0.3s ease-in-out;
}
button:hover {
  opacity: 0.8; color: white;
}
#donate1 {
  margin: 50px auto;
  width: 350px;
  margin-left: 35%;
    display: block;
}
#donate2 {
  margin: 50px auto;
  width: 350px;
  margin-left: 35%;
  display: none;    
}

#donate1 form, .blogs {
  margin: auto;
  padding: 22px;
  width: 100%;
  border-radius: 5px;
  background: whitesmoke;
  border-top: 3px solid #bfbfbf;
  border-bottom: 3px solid #bfbfbf;
}
#donate2 form, .blogs {
  margin: auto;
  padding: 22px;
  width: 100%;
  border-radius: 5px;
  background: whitesmoke;
  border-top: 3px solid #bfbfbf;
  border-bottom: 3px solid #bfbfbf;
}

#donate1 form span {
  background-color: gainsboro;
  border-radius: 3px 0px 0px 3px;
  border-right: 3px solid #bfbfbf;
  color: #606468;
  /*display: block;*/
  float: left;
  line-height: 50px;
  text-align: center;
  width: 50px;
  height: 50px;
}
#donate2 form span {
  background-color: gainsboro;
  border-radius: 3px 0px 0px 3px;
  border-right: 3px solid #bfbfbf;
  color: #606468;
  /*display: block;*/
  float: left;
  line-height: 50px;
  text-align: center;
  width: 50px;
  height: 50px;
}

#donate1 form input[type="text"] {
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
#donate2 form input[type="text"] {
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
#donate1 form input[type="password"] {
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
#donate2 form input[type="password"] {
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

#donate1 form input[type="submit"] {
  background-color: #4CAF50;
  border: 0;
  width: 100%;
  height: 40px;
  border-radius: 3px;
  color: white;
  cursor: pointer;
  transition: background 0.3s ease-in-out;
}
#donate2 form input[type="submit"] {
  background-color: #4CAF50;
  border: 0;
  width: 100%;
  height: 40px;
  border-radius: 3px;
  color: white;
  cursor: pointer;
  transition: background 0.3s ease-in-out;
}
#donate1 form input[type="submit"]:hover {
  opacity: 0.8; color: white;
}
#donate2 form input[type="submit"]:hover {
  opacity: 0.8; color: white;
}
#donate2 select{
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
.error{
  color: #ff0040;
}
.active
{background-color: #CDCDCD; color: black;}

</style>
<body>
  <span id='MicrosoftTranslatorWidget' class='Dark' style='width: 100%; box-sizing: border-box; color:white;background: linear-gradient(to right, #96c93d, #00b09b);margin: 0;'></span>
  <script type='text/javascript'>setTimeout(function(){{var s=document.createElement('script');s.type='text/javascript';s.charset='UTF-8';s.src=((location && location.href && location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&ctf=False&ui=true&settings=Manual&from=';var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild); }},0);</script>
<a href="/farmeasy/index.php" class="navi" style="right: 0;" ><i class="fa fa-home"></i> HOME</a>
<br><br><br><br><br>

    <h1><span class="center" style="margin-left:-10%">Payment Successful. Thank you <?php
    echo $_SESSION['donor'];
    ?>.</span></h1>

     
         
</body>
</html>