<?php
	session_start();
	include "connection.php";
	if(isset($_GET['sno']))
	{
		$sno=$_GET['sno'];
		//echo $sno;
		$result=mysql_query("SELECT * FROM images WHERE uid='$sno'");
		while($row=mysql_fetch_array($result))
		{
			header("Content-type: image/jpg");
			echo $row['image'];
		}
	}
?>