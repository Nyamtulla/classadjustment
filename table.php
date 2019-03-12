<?php
	require 'dbconfig/config.php';
?>
<html>
<head>
   <title>time table</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body bgcolor="skyblue">
<H1><FONT COLOR="DARKCYAN"><CENTER>FACULTY TIME TABLE</FONT></H1>
<form  action="table.php" method="post">
<label><b>Faculty ID:</b></label><br>
<input name="id" class="inputvalues" type="text" /><br>
<table border="2" align="center">

<tr>
 <td align="center">
 <td>1
 <td>2
 <td>3
 <td>4
 <td>5
 <td>6
 <td>7
 <td>8
</tr>
<tr>
 <td align="center">MONDAY
 <td align="center"><input name="m1" type="text" value="0" /><br>
 <td align="center"><input name="m2" type="text" value="0"/><br>
 <td align="center"><input name="m3" type="text" value="0"/><br>
 <td align="center"><input name="m4" type="text" value="0"/><br>
 <td align="center"><input name="m5" type="text" value="0"/><br>
 <td align="center"><input name="m6" type="text" value="0"/><br>
 <td align="center"><input name="m7" type="text" value="0"/><br>
 <td align="center"><input name="m8" type="text" value="0"/><br>
</tr>
<tr>
 <td align="center">TUESDAY
 <td align="center"><input name="t1" type="text" value="0"/><br>
 <td align="center"><input name="t2" type="text" value="0"/><br>
 <td align="center"><input name="t3" type="text" value="0"/><br>
 <td align="center"><input name="t4" type="text" value="0"/><br>
 <td align="center"><input name="t5" type="text" value="0"/><br>
 <td align="center"><input name="t6" type="text" value="0"/><br>
 <td align="center"><input name="t7" type="text" value="0"/><br>
 <td align="center"><input name="t8" type="text" value="0"/><br>
</tr>
<tr>
 <td align="center">WEDNESDAY
 <td align="center"><input name="w1" type="text"value="0" /><br>
 <td align="center"><input name="w2" type="text"value="0" ><br>
 <td align="center"><input name="w3" type="text"value="0" /><br>
 <td align="center"><input name="w4" type="text"value="0" /><br>
 <td align="center"><input name="w5" type="text"value="0" /><br>
 <td align="center"><input name="w6" type="text"value="0" /><br>
 <td align="center"><input name="w7" type="text" value="0"/><br>
 <td align="center"><input name="w8" type="text" value="0"/><br>
</tr>
<tr>
 <td align="center">THURSDAY
 <td align="center"><input name="th1" type="text" value="0"/><br>
 <td align="center"><input name="th2" type="text" value="0"/><br>
 <td align="center"><input name="th3" type="text" value="0"/><br>
 <td align="center"><input name="th4" type="text" value="0"/><br>
 <td align="center"><input name="th5" type="text"value="0" /><br>
 <td align="center"><input name="th6" type="text"value="0" /><br>
 <td align="center"><input name="th7" type="text"value="0" /><br>
 <td align="center"><input name="th8" type="text"value="0" /><br>
</tr>
<tr>
 <td align="center">FRIDAY
 <td align="center"><input name="f1" type="text"value="0" /><br>
 <td align="center"><input name="f2" type="text" value="0"/><br>
 <td align="center"><input name="f3" type="text" value="0"/><br>
 <td align="center"><input name="f4" type="text" value="0"/><br>
 <td align="center"><input name="f5" type="text" value="0"/><br>
 <td align="center"><input name="f6" type="text" value="0"/><br>
 <td align="center"><input name="f7" type="text" value="0"/><br>
 <td align="center"><input name="f8" type="text" value="0"/><br>
</tr>
<tr>
 <td align="center">SATURDAY
 <td align="center"><input name="s1" type="text" value="0"/><br>
 <td align="center"><input name="s2" type="text" value="0"/><br>
 <td align="center"><input name="s3" type="text" value="0"/><br>
 <td align="center"><input name="s4" type="text" value="0"/><br>
 <td align="center"><input name="s5" type="text" value="0"/><br>
 <td align="center"><input name="s6" type="text" value="0"/><br>
 <td align="center"><input name="s7" type="text" value="0"/><br>
 <td align="center"><input name="s8" type="text" value="0"/><br>
</tr>
</table><br>
</div>
<center><input name="login_btn" type="submit" id="login_btn" value="SAVE"/><br></center>
</form>
		<?php
		if(isset($_POST['login_btn']))
		{
			$id=$_POST['id'];
			$m1=$_POST['m1'];
			$m2=$_POST['m2'];
			$m3=$_POST['m3'];
			$m4=$_POST['m4'];
			$m5=$_POST['m5'];
			$m6=$_POST['m6'];
			$m7=$_POST['m7'];
			$m8=$_POST['m8'];
			$t1=$_POST['t1'];
			$t2=$_POST['t2'];
			$t3=$_POST['t3'];
			$t4=$_POST['t4'];
			$t5=$_POST['t5'];
			$t6=$_POST['t6'];
			$t7=$_POST['t7'];
			$t8=$_POST['t8'];
			$w1=$_POST['w1'];
			$w2=$_POST['w2'];
			$w3=$_POST['w3'];
			$w4=$_POST['w4'];
			$w5=$_POST['w5'];
			$w6=$_POST['w6'];
			$w7=$_POST['w7'];
			$w8=$_POST['w8'];
			$th1=$_POST['th1'];
			$th2=$_POST['th2'];
			$th3=$_POST['th3'];
			$th4=$_POST['th4'];
			$th5=$_POST['th5'];
			$th6=$_POST['th6'];
			$th7=$_POST['th7'];
			$th8=$_POST['th8'];
			$f1=$_POST['f1'];
			$f2=$_POST['f2'];
			$f3=$_POST['f3'];
			$f4=$_POST['f4'];
			$f5=$_POST['f5'];
			$f6=$_POST['f6'];
			$f7=$_POST['f7'];
			$f8=$_POST['f8'];
			$s1=$_POST['s1'];
			$s2=$_POST['s2'];
			$s3=$_POST['s3'];
			$s4=$_POST['s4'];
			$s5=$_POST['s5'];
			$s6=$_POST['s6'];
			$s7=$_POST['s7'];
			$s8=$_POST['s8'];
				$monday= "insert into ftt values('1','$id','$m1','$m2','$m3','$m4','$m5','$m6','$m7','$m8')";
				$tuesday= "insert into ftt values('2','$id','$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8')";
				$wednessday= "insert into ftt values('3','$id','$w1','$w2','$w3','$w4','$w5','$w6','$w7','$w8')";
				$thursday= "insert into ftt values('4','$id','$th1','$th2','$th3','$th4','$th5','$th6','$th7','$th8')";
				$fryday= "insert into ftt values('5','$id','$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8')";
				$saturday= "insert into ftt values('6','$id','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8')";
						if($monday_run = mysqli_query($con,$monday)){
						echo "mon";}
						if($tuesday_run = mysqli_query($con,$tuesday)){
						echo "tue";}
						if($wednessday_run = mysqli_query($con,$wednessday)){
						echo "wed";}
						if($fryday_run = mysqli_query($con,$fryday)){
						echo "fry";}
						if($thursday_run = mysqli_query($con,$thursday)){
						echo "thurs";}
						if($saturday_run = mysqli_query($con,$saturday)){
						echo "sat";}
		}
		?>
</body>
</html>