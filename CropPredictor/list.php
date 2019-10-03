<html>
    <head>
    <title>Crop Predictor</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
<body>
    <span id='MicrosoftTranslatorWidget' class='Dark' style='width: 100%; box-sizing: border-box; color:white;background: linear-gradient(to right, #96c93d, #00b09b);margin: 0;'></span>
  <script type='text/javascript'>setTimeout(function(){{var s=document.createElement('script');s.type='text/javascript';s.charset='UTF-8';s.src=((location && location.href && location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&ctf=False&ui=true&settings=Manual&from=';var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild); }},0);</script>
    <div class="w3-bar w3-green" style="padding:40px;background: linear-gradient(to right, #96c93d, #00b09b);">
       
    <center>    <img style=" height: 150px; width: 250px;" src="ebuybdlogo.png"></center>

</div>
    
    <center><h2>The Following crops are best suited for the Selected region</h2>
    <h3>These are listed in the order of highest to lowest yield</h3>
    <h6 style="color: red;">*The ratio is production per area i.e. tons/hectre</h6>
    </center>
    <br>
    
    <br>
    
    <center>
    <table class="w3-table-all" style="width: 80%; margin-bottom: 50px;">
    <thead>
      <tr class="w3-green">
        <th>Crop</th>
      </tr>
    </thead>
    
  
    
<?php
$state="Tamil Nadu";
$dis=$_POST["s2"];
$servername = "localhost";
$username = "root";
$password = "mock123";
$dbname = "farmeasy";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//$sql = "SELECT * FROM `table` WHERE State='Tamil Nadu' AND District='ARIYALUR' AND ratio>=500 ORDER BY ratio DESC LIMIT 2";
$sql= "SELECT DISTINCT Crop FROM `table` WHERE State='".$state."' AND District='".$dis."' AND ratio>=500 ORDER BY ratio DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo'<table class="w3-table-all">';
        echo"<tr>";
      //echo"<td>".$row["Season"]."</td>";
      echo"<td>".$row["Crop"]."</td>";
     // echo"<td>".$row["ratio"]."</td>";
    echo"</tr>";
       // echo "id: " . $row["State"]. " - Name: " . $row["ratio"]. "<br>";
    }
    echo"</table>";
    echo"</center>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>  
    </body>
</html>
