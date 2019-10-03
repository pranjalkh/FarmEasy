<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="stylesKisan.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <title>FarmEasy.com</title>
        <style>
            table, th , tr:last-child{border: none;border-collapse: collapse; border-radius: 10px;}
        </style>
    </head>
    <body>
        <span id='MicrosoftTranslatorWidget' class='Dark' style='width: 100%; box-sizing: border-box; color:white;background: linear-gradient(to right, #96c93d, #00b09b);margin: 0;'></span>
    <script type='text/javascript'>setTimeout(function(){{var s=document.createElement('script');s.type='text/javascript';s.charset='UTF-8';s.src=((location && location.href && location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&ctf=False&ui=true&settings=Manual&from=';var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild); }},0);</script>
                <h1 style='margin:50px 0; display:inline-block;color:#fff;'>Kisan Call Center</h1>
        <div id="tableviewKisan">  
            <div class ="inputuser">
                <p>Choose the region to get details.</p>
            </div>
                <form id="form" name="form" method="post">
                <?php
                    $domain = $_POST['regionselect'];
                    $servername = "localhost";
                    $username = "root";
                    $password = "mock123";
                    $connect=new mysqli($servername,$username,$password,"farmeasy");
                    if($connect==false)
                    {
                        die("ERROR: Failed to Connect".mysqli_connect_error());
                    }
                    $sqlin = "SELECT region FROM kisan";
                    $result = mysqli_query($connect,$sqlin);
                
                    echo '<select name="regionselect">';
                    echo '<option value="default">Select Region</option>';
                    while($row=mysqli_fetch_array($result)){
                        echo '<option value ="'.$row['region'].'">'.$row['region'].'</option>';
                    }
                    echo '</select>';
                
                ?>
                <button type ="submit" id="submit">Submit</button>
                </form>
                <?php
                    $sqlout = "SELECT * FROM kisan where region='".$domain."'";
                    $resultss = mysqli_query($connect,$sqlout);
                    echo '<div id="box">';
                    while($myrow=mysqli_fetch_array($resultss)){
                        echo '<p>Region: '.$myrow['region'].'</p>';
                        echo '<p>Contact No: '.$myrow['contact'].'</p>';
                        echo '<p>Address: <br>'.$myrow['address'].'</p>';
                        echo '<p>Email ID: '.$myrow['email'].'</p>';
                    }
                    echo '</div>';
                ?>
            <div id="tableprop">
            <?php
                
                $sql="SELECT * FROM kisan"; 
                $res=mysqli_query($connect,$sql);  
                echo '<table border=1px>'; 
                echo'<th>Region</th><th>Contact No</th><th>Address</th><th>Email ID</th>';
                while($row=mysqli_fetch_array($res)){ 
                        echo'<tr>'; 
                        echo '<td width="12%" height="25">'.$row['region'].'</td><td width="20%">'.$row['contact'].'</td><td>'.$row['address'].'</td><td width="30%">'.$row['email'].'</td>'; // we are looping all data to be printed till last row in the table
                        echo'</tr>';
                  } 
             ?>
                </div>
        </div>
    </body>
</html>