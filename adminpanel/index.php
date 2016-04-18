<?php
require 'ecore.inc.php';
require 'econnect.inc.php';

if(loggedin()){
	//$name=getfield('name');
	//echo 'You are logged in '.$name.' <a href="logout.php">logout</a>';
	echo "ok";
	include 'sid.inc.php';
}else{
	echo "wda";
include 'eloginform.inc.php';
	
}

?>