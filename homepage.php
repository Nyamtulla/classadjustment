<?php
	session_start();
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
	
		<center>
			<h3>Welcome
				<?php echo $_SESSION['username'] ?>
			</h3>
			<?php echo '<img class="avatar" src="'.$_SESSION["imglink"].'">';?>
	<div style="float:right">
	<form align="right" name="form1" method="post" action="homepage.php">
		<label class="logoutLblPos">
		<input name="logout" type="submit" id="logout_btn" value="Log Out"/><br>
		</label>
	</form>
	</div>
		</center>
	
		<form class="myform" action="homepage.php" method="post" >
		<label><b>Faculty Id:</b></label><br>
			<input name="fid" type="text" class="inputvalues" placeholder="your id" required/><br>
		<h3>Enter From And To Dates Of Leave</h3>
			<label><b>From Date:</b></label><br>
			<input name="fd" type="date" class="inputvalues" placeholder="from date" required/><br>
			<label><b>To Date:</b></label><br>
			<input name="td" type="date" class="inputvalues" placeholder="To date" required/><br>
			<input name="submit_btn" type="submit" id="signup_btn" value="Submit"/><br>
		</form>
		
		<?php
			if(isset($_POST['submit_btn']))
			{
			$fdate=$_POST['fd'];
			$tdate=$_POST['td'];
			$fid=$_POST['fid'];
			$fday = date('w', strtotime($fdate));
			$tday= date('w', strtotime($tdate));
			$date1 =strtotime($fdate);
			$date2 = strtotime($tdate);
			$days  = (($date2-$date1)/86400)+1;
			echo $days;
			echo "days";
			echo $fid;
			for( $i=0;$i<$days;$i++){
				echo '<br>';
				if($fday=='0'){$fday++;}
				$first="select a.id from ftt as a,ftt as b where a.id!='$fid' and a.day='$fday' and a.first='0' ";
				$first_run = mysqli_query($con,$first);
				if($first_run){
				$row = mysqli_fetch_array($first_run,MYSQLI_NUM);
				echo '<br>'.$fday.'day'.$row[0];
				}
				else{
				echo 'ni'.$i;}
				$second="select a.id from ftt as a,ftt as b where a.id!='$fid' and a.day='$fday' and a.second='0' ";
				$second_run = mysqli_query($con,$second);
				if($second_run){
				$row = mysqli_fetch_array($second_run,MYSQLI_NUM);
				echo '<br>'.$fday.'day'.$row[0];
				}
				else{
				echo "ni";}
				$third="select a.id from ftt as a,ftt as b where a.id!='$fid' and a.day='$fday' and a.third='0' ";
				$third_run = mysqli_query($con,$third);
				if($third_run){
				$row = mysqli_fetch_array($third_run,MYSQLI_NUM);
				echo '<br>'.$fday.'day'.$row[0];
				}
				else{
				echo "ni";}
				$fourth="select a.id from ftt as a,ftt as b where a.id!='$fid' and a.day='$fday' and a.fourth='0' ";
				$fourth_run = mysqli_query($con,$fourth);
				if($fourth_run){
				$row = mysqli_fetch_array($fourth_run,MYSQLI_NUM);
				echo '<br>'.$fday.'day'.$row[0];
				}
				else{
				echo "ni";}
				$fifth="select a.id from ftt as a,ftt as b where a.id!='$fid' and a.day='$fday' and a.fifth='0' ";
				$fifth_run = mysqli_query($con,$fifth);
				if($fifth_run){
				$row = mysqli_fetch_array($fifth_run,MYSQLI_NUM);
				echo '<br>'.$fday.'day'.$row[0];
				}
				else{
				echo "ni";}
				$sixth="select a.id from ftt as a,ftt as b where a.id!='$fid' and a.day='$fday' and a.sixth='0' ";
				$sixth_run = mysqli_query($con,$sixth);
				if($first_run){
				$row = mysqli_fetch_array($sixth_run,MYSQLI_NUM);
				echo '<br>'.$fday.'day'.$row[0];
				}
				else{
				echo "ni";}
				$seventh="select a.id from ftt as a,ftt as b where a.id!='$fid' and a.day='$fday' and a.seventh='0' ";
				$seventh_run = mysqli_query($con,$seventh);
				if($seventh_run){
				$row = mysqli_fetch_array($seventh_run,MYSQLI_NUM);
				echo '<br>'.$fday.'day'.$row[0];
				}
				else{
				echo "ni";}
				$eighth="select a.id from ftt as a,ftt as b where a.id!='$fid' and a.day='$fday' and a.eighth='0' ";
				$eirhth_run = mysqli_query($con,$eighth);
				if($eirhth_run){
				$row = mysqli_fetch_array($eirhth_run,MYSQLI_NUM);
				echo '<br>'.$fday.'day'.$row[0];
				}
				else{
				echo "ni";}
				$fday++;
			}
			}
		?>
</body>
</html>