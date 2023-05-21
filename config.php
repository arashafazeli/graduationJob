<?php

$host="10.112.0.68";
$user="root";
$pass="password";
$db="chat";

$con=mysqli_connect($host,$user,$pass,$db);

if(!$con)
{
	echo("Not Connected<br>".mysqli_connect_error());

}
else
{
	echo("Connected");
}






?>