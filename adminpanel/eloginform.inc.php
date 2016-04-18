
<?php
require 'ecore.inc.php';
require 'econnect.inc.php';
if(isset($_POST['adminname'])&&isset($_POST['password'])){
	$password=$_POST['password'];
	$adminname=$_POST['adminname'];
	$password_hash=md5($password);
	if(!empty($password)&&!empty($adminname)){
	$query="SELECT `adminid` FROM `admin` WHERE `adminname`='".mysql_real_escape_string($adminname)."' AND `adminpassword`='".mysql_real_escape_string($password_hash)."'";
	if($query_run=mysql_query($query))
		$query_num_rows=mysql_num_rows($query_run);
		if($query_num_rows==0){
			echo "Invalid name/password combination";
		}
		else if($query_num_rows==1){
			$adminid=mysql_result($query_run,0,'adminid');
			$_SESSION['adminid']=$adminid;
			header('Location:index.php');
		}
	}
	else{
		echo"lappad";
	}
}
?>

<form action="<?php echo $current_file ?>" method="POST">
Name:<input type="text" name="adminname">
Password:<input type="password" name="password">
<input type="submit" value="login">
</form>

