<?php
$message="";
if(count($_POST)>0) {
$conn = mysql_connect("localhost","root","");
mysql_select_db("login1",$conn);
$result = mysql_query("SELECT * FROM `table` WHERE `username` LIKE '" . $_POST["form-username"] . "'");
$count  = mysql_num_rows($result);
$row = mysql_fetch_array($result);

if($count==0) {
$message = "Invalid Username!";
$message1="";
} else {
$message = "Welcome, ".ucwords($row['name'])."!";
$message1 = $row['username'];
$true=1;
$name = $row['name'];
$college = $row['college'];

}
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>TechRep-Certificate</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link href='http://fonts.googleapis.com/css?family=Droid+Serif:700italic' rel='stylesheet' type='text/css'>
  <link href="asset/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <style>

    @font-face {
      font-family: "Kimberley";
      src: local('test/web/coresanSN.ttf');// format("truetype");
    }

    @font-face {
      font-family: "Kimberley2";
      src: local('test/web/bryant.ttf');// format("truetype");
    }

    h1 { font-family: "Century Gothic", sans-serif }
    h2,h3,h4 { font-family: "Century Gothic", sans-serif; }
    /*@page {margin: 0px; }*/

    div {
      position: absolute;
      width: 100%;
      float: left;
      text-align: center;
    }

    img {
      height: 100%;
      width: 100%;
    }

    h1,h2,h3 {
      z-index: 100;
    }
    </style>
    
    <style type="text/css" media="print">
  @page { size: landscape; }
  </style>

</head>
<body>

<?php 
 
  echo <<<HTML
  <div style="position: relative; page-break-after: always;">
   <img src="certi.jpg">

   <div style="position: absolute;top:49%;left:20%;"><h2 style="text-align:center;">kk</h2></div>
   <div style="position: absolute;top:61%;left:20%;"><h3 style="text-align:center;color:#777777;">pp</h3></div>
 </div>
 <hr><br>
HTML;

?> 

</body>

</html>
