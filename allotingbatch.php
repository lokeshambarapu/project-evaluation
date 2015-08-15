<?php
	session_start();
	include "connection.php";
	header("Cache-Control: no-cache, must-revalidate");
	$year2=$_SESSION['year'];
	$sem2=$_SESSION['sem'];
	$branch2=$_SESSION['branch'];
	$uid=$_SESSION['uid'];
	$value=$_SESSION['cnt1'];
	$query="SELECT sid from stddetails_tb where (current_year='$year2') && (semester='$sem2') && (branch='$branch2') && (sid in (SELECT sid FROM allotment WHERE fid='$uid'))";
	$result1=mysql_query($query);
	$i=1;
	if(isset($_POST['allotbatch']))
	{
		while($i<=$value)
		{	
			$row=mysql_fetch_array($result1);
			$pin=$row['sid'];
			$bid=$_POST['batch'][$i];		
			
			$query="UPDATE allotment SET batchno='$bid' WHERE sid='$pin'";
			echo $pin."	".$bid;
			$result=mysql_query($query) or die("error in updation");
			$i++;
		}
		
	}
	$id=$_SESSION['uid'];
	$sname=$_SESSION['uname'];
	$date=date('y-m-d');
	mysql_query("INSERT INTO logfile (sno,date,uid,uname,action) VALUES ('','$date','$id','$sname','Alloted Batches')") or die("failed");
	header("Location: staffhome.php?allotedbatch=1");
?>