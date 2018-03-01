<?php 


$dbcon = new mysqli('localhost','root','','ranking_v2');

if($dbcon->connect_errno){
	echo"Failed to connect to MySQL: ".$dbcon->connect_error;
}