<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="stylesPest.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <title>FarmEasy.com</title>
    </head>
    <style>
            table, th , tr:last-child{border: none;border-collapse: collapse; border-radius: 10px;}
    </style>
    <body>
        <span id='MicrosoftTranslatorWidget' class='Dark' style='width: 100%; box-sizing: border-box; color:white;background: linear-gradient(to right, #96c93d, #00b09b);margin: 0;'></span>
    <script type='text/javascript'>setTimeout(function(){{var s=document.createElement('script');s.type='text/javascript';s.charset='UTF-8';s.src=((location && location.href && location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&ctf=False&ui=true&settings=Manual&from=';var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild); }},0);</script>
        <h1 style='margin:50px 0; display:inline-block;color:#fff;'>Fertilizers & Pesticides Information</h1>
        <div id="tableview">
            <div class ="inputuser">
                <p>Pesticides and types description</p>
            </div>
            <div id="tableprop">
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "mock123";
                    $connect=new mysqli($servername,$username,$password,"farmeasy");
                    if($connect==false)
                    {
                        die("ERROR: Failed to Connect".mysqli_connect_error());
                    }
                    $sqlout = "SELECT * FROM pesticides";
                    $resultss = mysqli_query($connect,$sqlout);
                    echo '<table border=1px>'; 
                    echo'<th>Pesticide</th><th>Description</th><th>Type</th>';
                    while($row=mysqli_fetch_array($resultss)){
                        echo'<tr>'; 
                        echo '<td width="12%">'.$row['chemicalname'].'</td><td width="20%">'.$row['desp'].'</td><td>'.$row['type'].'</td>'; // we are looping all data to be printed till last row in the table
                        echo'</tr>'; 
                    }
                ?>
            </div>
        </div>
    </body>
</html>