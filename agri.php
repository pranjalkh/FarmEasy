<?php
include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="font.css">
  <link rel="stylesheet" href="adsty.css">
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="fontawesome.css">
  <title>Agricultural Schemes</title>
  <link rel="shortcut icon" href="icon.png">
  <link rel="stylesheet" type="text/css" href="all.css">

  <style>
  table {width:80%; color: #262626; margin-bottom: 50px;}
  table, th, td { border: 1px solid white; border-collapse: collapse;}
  th, td {padding: 10px; text-align: left;}
  th {
      font-size: 16px;
  }
  tr:nth-child(even){background-color:#dbdfea;}
  tr:nth-child(odd){background-color:#c4c9d6;}
  tr:hover{background-color:#eeeff1;}
  th{background-color: dimgray; color:white;}
</style>
</head>
<body>
  <span id='MicrosoftTranslatorWidget' class='Dark' style='width: 100%; box-sizing: border-box; color:white;background: linear-gradient(to right, #96c93d, #00b09b);margin: 0;'></span>
  <script type='text/javascript'>setTimeout(function(){{var s=document.createElement('script');s.type='text/javascript';s.charset='UTF-8';s.src=((location && location.href && location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&ctf=False&ui=true&settings=Manual&from=';var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild); }},0);</script>
</body>
</html>
<?php
$sql="select * from agri";
$query=mysqli_query($connection, $sql);

echo "<center><h1 style='margin:50px 0; display:inline-block;color:#fff;'>Agricultural Schemes</h1></center>";
echo "<center>";
echo '<table border=1px>';  // opening table tag
echo'<th>Scheme Number</th><th>Scheme Name</th><th>Scheme Description</th>'; //table headers
while($data = mysqli_fetch_array($query))
{
// we are running a while loop to print all the rows in a table
echo"<tr>"; // printing table row
echo "<td>".$data['sno']."</td><td>".$data['sname']."</td><td>".$data['sdesc']."</td>"; 
// we are looping all data to be printed till last row in the table
echo'</tr>'; // closing table row
}
echo '</table>'; 
echo "</center>";
?>