<?php
ob_start();
session_start();
$current_file=$_SERVER['SCRIPT_NAME'];
if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER'])){
$http_referer=$_SERVER['HTTP_REFERER'];	
}


function getfield($field){
	$query="SELECT `$field` FROM `admin` WHERE `adminid`='".$_SESSION['adminid']."'";
	if($query_run=mysql_query($query)){
		return mysql_result($query_run,0,$field);
	}
}
function loggedin(){
	if(isset($_SESSION['adminid'])&&!empty($_SESSION['adminid'])){
		return true;
	}
	else {
		return false;
	}
}

?>