<html>
    <head>
    <title>Crop Predictor</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script language="Javascript" src="jquery.js"></script>
    <script type="text/JavaScript" src='state.js'></script>
    </head>
<body>
    <span id='MicrosoftTranslatorWidget' class='Dark' style='width: 100%; box-sizing: border-box; color:white;background: linear-gradient(to right, #96c93d, #00b09b);margin: 0;'></span>
  <script type='text/javascript'>setTimeout(function(){{var s=document.createElement('script');s.type='text/javascript';s.charset='UTF-8';s.src=((location && location.href && location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&ctf=False&ui=true&settings=Manual&from=';var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild); }},0);</script>
    <div class="w3-bar w3-green" style="padding:60px;background: linear-gradient(to right, #96c93d, #00b09b);">
       
    <center>    <img style=" height: 150px; width: 250px;" src="ebuybdlogo.png"></center>

</div>
<br>
    <br>
    <div class="w3-container">

  
  <div class="w3-card-4">
    <div class="w3-container w3-green" style="background: linear-gradient(to right, #96c93d, #00b09b);">
      <center><h2 style="font-weight:500">Crop Predictor</h2></center>
    </div>

    <form class="w3-container" action="welcome.php" method="post">
      <p>
         <div class='resp_code frms class="w3-container"'>
      <p class="heading" align='center'><h5><font style='font: 1em/1.3em Tahoma,Geneva,sans-serif;'>
      <b>Select Your State</b></font></h5></p>
      <div id="selection">
        <select id="listBox" class="w3-input" onchange='selct_district(this.value)' name="state"></select>
          <br>
          <br>
          <p class="heading" align='center'><h5><font style='font: 1em/1.3em Tahoma,Geneva,sans-serif;'>
      <b>Select Your District</b></font></h5></p>
        <select class="w3-input" id='secondlist' name="district"></select>
      </div>
      <br>
        <br>
      <div id="dumdiv" align="center" style=" font-size: 10px;color: #dadada;">
       <a id="dum" style="padding-right:0px; text-decoration:none;color: green;text-align:center;"></a>
      </div>
        
        </p>
    
        <p>
      <center>  <button class="w3-btn w3-green">Get The Crop Prediction With Analysis</button></center>
        </p>
    </form>
  </div>
    </div>
        
</body>
</html>