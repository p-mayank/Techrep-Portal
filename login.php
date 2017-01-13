<?php

$username=$_POST['form-username'];

$username=stripcslashes($username);
$username=mysql_real_escape_string($username);

mysql_connect("localhost", "root", "");
mysql_select_db("login1");

$result=mysql_query("SELECT * FROM `table 2` ") 
		or die("Failed!! ".mysql_error());


echo $result."<br />";
$row=mysql_fetch_array($result);
echo $row['username']."<br />";


if ($row['username']==$username) {
	echo "Connection Successful!! <br />Welcome " .$row['name']."<br />";
} else {
	echo "Sorry!!"."<br />";
}




?>