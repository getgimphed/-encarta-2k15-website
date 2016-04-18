<?php
require 'econnect.inc.php';
require 'ecore.inc.php';

if(isset($_POST['adminname'])&&isset($_POST['adminpassword'])){
$adminname=$_POST['adminname'];
$adminpassword=$_POST['adminpassword'];
$password_hash=md5($adminpassword);

	if(!empty($adminname)&&!empty($adminpassword)){
	$query="SELECT `adminid` FROM `admin` WHERE `adminname`='".mysql_real_escape_string($adminname)."' AND `adminpassword`='".mysql_real_escape_string($password_hash)."'";
		if($query_run=mysql_query($query))
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows==0){
				?>
				<script>alert("Invalid name/password combination");</script>
				<?php
				//echo "Invalid name/password combination";
			}
			else if($query_num_rows==1){
				$adminid=mysql_result($query_run,0,'adminid');
				$_SESSION['adminid']=$adminid;
				header('Location:admin.php');
			}

	}else{
		echo "<script>alert('allfieldsarererquired');</script>";
	}
}

if(loggedin()){
					if(!empty($_POST['event1c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event1`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
						// if($query_run=mysql_query($query)){
						// 	unset($_SESSION['sid']);
						// }
					}
					if(!empty($_POST['event2c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event2`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}

					if(!empty($_POST['event3c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event3`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}

					if(!empty($_POST['event4c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event4`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}

					if(!empty($_POST['event5c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event5`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}

					if(!empty($_POST['event6c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event6`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}

					if(!empty($_POST['event7c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event7`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}

					if(!empty($_POST['event8c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event8`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}

					if(!empty($_POST['event9c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event9`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}

					if(!empty($_POST['event10c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event10`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}

					if(!empty($_POST['event11c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event11`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}

					if(!empty($_POST['event12c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event12`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}

					if(!empty($_POST['event13c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event13`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}

					if(!empty($_POST['event14c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event14`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}


					if(!empty($_POST['event15c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event15`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}

					if(!empty($_POST['event16c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event16`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}

					if(!empty($_POST['event17c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event17`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}

					if(!empty($_POST['event18c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event18`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}

					if(!empty($_POST['event19c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event19`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}

					if(!empty($_POST['event20c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event20`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}

					if(!empty($_POST['event21c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event21`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}

					if(!empty($_POST['event22c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event22`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}

					if(!empty($_POST['event23c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event23`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}

					if(!empty($_POST['event24c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event24`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}
					if(!empty($_POST['event25c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event25`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}
					if(!empty($_POST['event26c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event26`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}
					if(!empty($_POST['event27c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event27`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}
					if(!empty($_POST['event28c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event28`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}
					if(!empty($_POST['event29c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event29`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}
					if(!empty($_POST['event30c']) && !empty($_POST['sub'])){
						$query="UPDATE `events` SET `event30`='1' WHERE `sid`='".mysql_real_escape_string($_SESSION['sid'])."'";
					}

					else{}					
					
}

?>

<!doctype html>
<html>
<head>
<link href="style.css" rel="stylesheet"/>
<link rel="stylesheet" href="bootstrap.css">
  <script src="jquery-1.11.3.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="jquery-1.11.3.min.js"></script>
  <script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>

</head>
<body>
	<div class="container">
	<header>
	
		<div class="container">
			<div class="text-left"></div>
				<div class="text-right">
				
					<h2>Encarta2K15</h2>
				</div>
			<hr></hr>
		</div>
		
	</header>
	 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="encarta_logo.jpg" height="60" width="60" alt="Cinque Terre"/></a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://encartambm.in/randomstringreg/adminpanel/admin.php">Home</a></li>
      </ul>
	   <ul class="nav navbar-nav navbar-right">
          <?php 
		  if(!loggedin()){
			  ?>
        <li><a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
           <?php
		   }
		   else if(loggedin()){
		   ?>
		   <li><a href="elogout.php" ><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        
		   <?php
		   }
		   ?>
	  </ul>
    </div>
  </div>
</nav>
<?php 
if(loggedin()){
?> 
	<form role="form" class="form-inline" action="admin.php" method="POST">
  <div class="form-group">
    <label for="sid">SID:</label>
    <input type="text" class="form-control" id="sid" name="sid" placeholder="Enter SID">
	 <button type="submit" class="btn btn-default">Submit</button>
  </div>
  </form>
<?php
	if(isset($_POST['sid'])){
	$sid=$_POST['sid'];
	if(!empty($sid)){
		$query="SELECT `event1`,`event2`,`event3`,`event4`,`event5`,`event6`,`event7`,`event8`,`event9`,`event10`, " .
		"`event11`,`event12`,`event13`,`event14`,`event15`,`event16`,`event17`,`event18`,`event19`,`event20`," .
		"`event21`,`event22`,`event23`,`event24`,`event25`,`event26`,`event27`,`event28`,`event29`,`event30`" . 
		" FROM `events` WHERE `sid`='".mysql_real_escape_string($sid)."'";
		if($query_run=mysql_query($query))
			$query_num_rows=mysql_num_rows($query_run);
		if($query_num_rows==0){
			?>
			<script>alert("Invalid SID");</script>
			<?php
			//echo "Invalid name/password combination";
		}
		else if($query_num_rows==1){
                $_SESSION['sid']=$sid;
			//$adminid=mysql_result($query_run,0,'adminid');
			//$_SESSION['adminid']=$adminid;
			//header('Location:admin.php');
			        $event1=mysql_result($query_run,0,'event1');
					$event2=mysql_result($query_run,0,'event2');
					$event3=mysql_result($query_run,0,'event3');
					$event4=mysql_result($query_run,0,'event4');
					$event5=mysql_result($query_run,0,'event5');
					$event6=mysql_result($query_run,0,'event6');
					$event7=mysql_result($query_run,0,'event7');
					$event8=mysql_result($query_run,0,'event8');
					$event9=mysql_result($query_run,0,'event9');
					$event10=mysql_result($query_run,0,'event10');
					$event11=mysql_result($query_run,0,'event11');
					$event12=mysql_result($query_run,0,'event12');
					$event13=mysql_result($query_run,0,'event13');
					$event14=mysql_result($query_run,0,'event14');
					$event15=mysql_result($query_run,0,'event15');
					$event16=mysql_result($query_run,0,'event16');
					$event17=mysql_result($query_run,0,'event17');
					$event18=mysql_result($query_run,0,'event18');
					$event19=mysql_result($query_run,0,'event19');
					$event20=mysql_result($query_run,0,'event20');
					$event21=mysql_result($query_run,0,'event21');
					$event22=mysql_result($query_run,0,'event22');
					$event23=mysql_result($query_run,0,'event23');
					$event24=mysql_result($query_run,0,'event24');
					$event25=mysql_result($query_run,0,'event25');
					$event26=mysql_result($query_run,0,'event26');
					$event27=mysql_result($query_run,0,'event27');
					$event28=mysql_result($query_run,0,'event28');
					$event29=mysql_result($query_run,0,'event29');
					$event30=mysql_result($query_run,0,'event30');

					?>
					
					
					</div>
					<div style="text-align:center; font-size:50px;"> <?php echo $_SESSION['sid']; ?> </div>
                    
                    <div>
			
					 <form action="admin.php" method="POST">
						 <div class="checkbox">
	                     	
	                     	<div>
								<h2 class="eventname">Event1</h2><?php if($event1){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>	
	                     	<label><input type="checkbox" name="event1c" <?php if($event1==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event2</h2><?php if($event2){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
							<label><input type="checkbox" name="event2c" <?php if($event2==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event3</h2><?php if($event1){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
						 	<label><input type="checkbox" name="event3c" <?php if($event3==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event4</h2><?php if($event4){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
							<label><input type="checkbox" name="event4c" <?php if($event4==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event5</h2><?php if($event5){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
							<label><input type="checkbox" name="event5c" <?php if($event5==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event6</h2><?php if($event6){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
							<label><input type="checkbox" name="event6c" <?php if($event6==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event7</h2><?php if($event7){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
							<label><input type="checkbox" name="event7c" <?php if($event7==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event8</h2><?php if($event8){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
							<label><input type="checkbox" name="event8c" <?php if($event8==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event9</h2><?php if($event9){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
							<label><input type="checkbox" name="event9c" <?php if($event9==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event10</h2><?php if($event10){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
							<label><input type="checkbox" name="event10c" <?php if($event10==1){echo "checked";} ?>>participate</label>
						 	<br>

        					<div>
								<h2 class="eventname">Event11</h2><?php if($event11){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>	
	                     	<label><input type="checkbox" name="event11c" <?php if($event11==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event12</h2><?php if($event12){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
							<label><input type="checkbox" name="event12c" <?php if($event12==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event13</h2><?php if($event11){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
						 	<label><input type="checkbox" name="event13c" <?php if($event13==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event14</h2><?php if($event14){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
							<label><input type="checkbox" name="event14c" <?php if($event14==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event15</h2><?php if($event15){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
							<label><input type="checkbox" name="event15c" <?php if($event15==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event16</h2><?php if($event16){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
							<label><input type="checkbox" name="event16c" <?php if($event16==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event17</h2><?php if($event17){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
							<label><input type="checkbox" name="event17c" <?php if($event17==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event18</h2><?php if($event18){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
							<label><input type="checkbox" name="event18c" <?php if($event18==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event19</h2><?php if($event19){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
							<label><input type="checkbox" name="event19c" <?php if($event19==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event20</h2><?php if($event20){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
							<label><input type="checkbox" name="event20c" <?php if($event20==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event21</h2><?php if($event21){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>	
	                     	<label><input type="checkbox" name="event11c" <?php if($event11==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event22</h2><?php if($event22){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
							<label><input type="checkbox" name="event12c" <?php if($event12==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event23</h2><?php if($event21){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
						 	<label><input type="checkbox" name="event23c" <?php if($event23==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event24</h2><?php if($event24){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
							<label><input type="checkbox" name="event24c" <?php if($event24==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event25</h2><?php if($event25){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
							<label><input type="checkbox" name="event25c" <?php if($event25==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event26</h2><?php if($event26){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
							<label><input type="checkbox" name="event26c" <?php if($event26==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event27</h2><?php if($event27){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
							<label><input type="checkbox" name="event27c" <?php if($event27==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event28</h2><?php if($event28){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
							<label><input type="checkbox" name="event28c" <?php if($event28==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event29</h2><?php if($event29){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
							<label><input type="checkbox" name="event29c" <?php if($event29==1){echo "checked";} ?>>participate</label>
						 	<br>

						 	<div>
								<h2 class="eventname">Event30</h2><?php if($event30){  ?>	<div class="led-green"></div>	<?php 	}else{ 	?><div class="led-red"></div><?php 	} ?>
							</div>
							<label><input type="checkbox" name="event30c" <?php if($event30==1){echo "checked";} ?>>participate</label>
						 	<br>

	                     </div>
						 <button type="submit" value="1" class="btn btn-default" name="sub">Submit</button>
					 </form>
					 </div>
					
					<?php				
		}	
	}else{
		?>
		<script>alert("Please enter sid")</script>
		<?php
	}
	
	}	
}


?>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="<?php echo $current_file ?>" method="POST">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter username" name="adminname">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password" name="adminpassword">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div>  
  </div>	
</body>
</html>