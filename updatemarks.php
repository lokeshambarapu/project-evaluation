<?php
	
	session_start();
	include "connection.php";
	header("Cache-Control: no-cache, must-revalidate");
	$year2=$_SESSION['year'];
	$sem2=$_SESSION['sem'];
	$branch2=$_SESSION['branch'];
	$cnt=$_SESSION['cnt'];
	$i=1;
	while($i<=$cnt)
	{
		$pin=$_POST['pid33'][$i];
		$attd=$_POST['attendance33'][$i];
		$marks=$_POST['marks33'][$i];
		$backlogs=$_POST['backlogs'][$i];
		$tbacklogs=$_POST['tbacklogs'][$i];
		$query2="INSERT INTO bemarks_tb (sid,year,semester,attendance,marks,backlogs,tbacklogs) VALUES ('$pin','$year2','$sem2','$attd','$marks','$backlogs','$tbacklogs')";
		$result2=mysql_query($query2) or die("no success");
		$query3="UPDATE bemarks_tb SET tbacklogs = tbacklogs+'$backlogs' where sid = '$pin'";
		$result3=mysql_query($query3);
		
		$i++;
	}
	header("Location: scsadmin.php?acasuccess=1");

?>