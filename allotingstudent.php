<?php
	session_start();
	include "connection.php";
	header("Cache-Control: no-cache, must-revalidate");
	$year2=$_SESSION['year'];
	$sem2=$_SESSION['sem'];
	$branch2=$_SESSION['branch'];
	$cnt=$_SESSION['cnt'];
	$i=1;
	if(isset($_POST['submit']))
	{
		while($i<=$cnt)
		{
			$pin=$_POST['pid'][$i];
			$fid=$_POST['faculty'][$i];
			$query="INSERT INTO allotment (sid,fid) VALUES ('$pin','$fid')";
			$result=mysql_query($query);
			$i++;
		}
		header("Location: scsadmin.php?alloted=1");
	}
	
	

?>