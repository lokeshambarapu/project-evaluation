<?php
	//session_start();
	
	$tflag='0';
	$talert=0;
	if(isset($_REQUEST['teacher']))
	{
		include('connection.php');
		$name=$_POST['tname'];
		$id=$_POST['tid'];
		$email=$_POST['temail'];
		$department=$_POST['tdepartment'];
		$type=$_POST['type'];
		
		$image =addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name=addslashes($_FILES['image']['name']);
		mysql_query("insert into images values('$id','$image')") or die("error");
		
		$user=mysql_query("SELECT * FROM users_tb WHERE uid='$id'") or die("Error in selecting");
		$count=mysql_num_rows($user);
		if($count==0)
		{		
			$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
			$password = substr( str_shuffle( $chars ), 0, 8 );
		
			$query="INSERT INTO users_tb (uid,uname,email,passwd,type) VALUES ('$id','$name', '$email','$password','$type' )";
			mysql_query($query);
			
			
			$query="INSERT INTO faculty_tb (fid,fname,dept,email) VALUES ('$id','$name','$department','$email')";
			mysql_query($query);
			$tflag='1';
			//header("Location:addteacheralert.php");
		}
		else
		{
			$talert=1;
		}
	}
	
?>