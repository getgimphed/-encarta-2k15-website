<?php
$mysql_host='';
$mysql_user='encartam_samaved';
$mysql_pass='vedantencarta15';
$mysql_db='encartam_2k15';

if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!mysql_select_db($mysql_db)){
	die(mysql_error());
}


?>