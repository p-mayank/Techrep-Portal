<?php

session_start();
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
$name = $row['name'];
$college = $row['college'];
$true=1;
$_SESSION['name'] = ucwords($name);
$_SESSION['college']   = strtoupper($college);
$_SESSION['time']     = time();
}
}
?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TechRep Portal</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- Favicon and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style1.css" />
        <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>

    </head>

    <body>

    <ul class="cb-slideshow" style="opacity: 0.25;">
            <li><span>Image 01</span><div><h3>re·lax·a·tion</h3></div></li>
            <li><span>Image 02</span><div><h3>qui·e·tude</h3></div></li>
            <li><span>Image 03</span><div><h3>bal·ance</h3></div></li>
            <li><span>Image 04</span><div><h3>e·qua·nim·i·ty</h3></div></li>
            <li><span>Image 05</span><div><h3>com·po·sure</h3></div></li>
            <li><span>Image 06</span><div><h3>se·ren·i·ty</h3></div></li>
        </ul>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <a href="http://www.techniche.org" target="_blank"><img src="img.png"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3 style="font-family: Century Gothic;
                                    font-size: larger;
                                    font-weight: bold;">ENTER YOUR DETAILS</h3>
                            		<p style="font-family: Century Gothic;
                                    font-size: medium;">Enter your email address to log on: </p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="POST" class="login-form">
                                <?php if($message!="" and $message1!="") 
                                {
                                echo <<<HTML
                                <p style="font-size:larger;font-family: Century Gothic;text-align: center;">$message</p>
HTML;
                                echo <<<HTML
                                <div style="text-align: center;">
                                <a href="techrep1.php?' . SID . '" target="_blank" style="font-size: medium;font-family: Century Gothic;text-align: center;">Click Here!!</a></div>
HTML;
                                 }else
                                 echo <<<HTML
                                <p style="font-size:larger;font-family: Century Gothic;text-align: center;">$message</p>
HTML;

                                  ?>

			                    	<div class="form-group" style="margin-bottom:20px;">
			                    		<label class="sr-only" for="form-username">EmailID</label>
			                        	<input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
			                        </div>
			                        <button type="submit" class="btn">Sign in!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        

    </body>

</html>
