<?php 
	$problemflag='0';
	
	if(isset($_POST['submitprb']))
	{
	//	session_start();
		include 'connection.php';
		header("Cache-Control: no-cache, must-revalidate");
		$pinno = $_SESSION['uid'];
		$info = $_POST['addr'];
		$day = date("Y-m-d");
		
		$query="INSERT INTO discussions_tb (rollno,topic,date,remarks) VALUES ('$pinno','Request','$day','$info')";
		mysql_query($query) or die("failed");
		//header("Location: studenthome.php");
		$problemflag='1';
		
	}

?>