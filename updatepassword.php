<?php 
	if(isset($_POST['password']))
	{
		session_start();
		include 'connection.php';
		header("Cache-Control: no-cache, must-revalidate");
		$pinno = $_SESSION['uid'];
		$newpass=$_POST['newpass'];		
		$query="SELECT * FROM users_tb WHERE uid='$pinno'";
		$result=mysql_query($query) or die("failed");
		$row=mysql_fetch_array($result);
		
		if($_POST['oldpass'] == $row['passwd'])
		{
			$query2="UPDATE users_tb SET passwd='$newpass' WHERE uid='$pinno'";
			mysql_query($query2) or die("error in updating");
			//header("Location: studenthome.php");
		}
		else
		{
			echo '<script type="text/javascript">alert("password does not match");</script>';
			
		}
		$uname=$_SESSION['uname'];
		$date=date("y-m-d");
		echo $uname;
		mysql_query("INSERT INTO logfile (sno,date,uid,uname,action) VALUES ('','$date','$pinno','$uname','Changed password')") or die("failed");
		if($row['type']=='student')
		{
			header("Location:studenthome.php?passupdate=1");
		}
		else
		{
			header("Location:staffhome.php?passupdate=1");
		}
		
	}

?>