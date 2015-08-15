<?php
	//session_start();
	//include "connection.php";
	//header("Cache-Control: no-cache, must-revalidate");
	$stdflag='0';
	$stdalert=0;
	if(isset($_POST['student']))
	{
		$sname=strtoupper($_POST['sname']);
		$rno=$_POST['rno'];
		$fname=strtoupper($_POST['fname']);
		$admno=$_POST['admno'];
		$branch=strtoupper($_POST['branch']);
		$email=$_POST['email'];
		$fmobile=$_POST['fmobile'];
		$mobile=$_POST['mobile'];
		$addr=$_POST['addr'];
		$tboard=$_POST['tboard'];
		$tyear=$_POST['tyear'];
		$tgrade=$_POST['tgrade'];
		$ipeboard=$_POST['ipeboard'];
		$ipeyear=$_POST['ipeyear'];
		$ipegrade=$_POST['ipegrade'];
		
		$type=$_POST['radio_option'];
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
		$password = substr( str_shuffle( $chars ), 0, 8 );
		$query1="SELECT * FROM stddetails_tb WHERE sid='$rno'";
		$result1 = mysql_query($query1) or die("error.....");
		$count=mysql_num_rows($result1);
		if($count==0)
		{
			$query2="INSERT INTO stddetails_tb (sid,admission_no,branch,sname,fname,student_email,student_phone,father_phone,address,type) VALUES ('$rno','$admno','$branch','$sname','$fname','$email','$mobile','$fmobile','$addr','$type')";
			$result2=mysql_query($query2) or die("no success in std--".$count);
			
			$query="INSERT INTO users_tb (uid,uname,email,passwd,type) VALUES ('$rno','$sname', '$email','$password','student' )";
			mysql_query($query);
			if($type=="ECET")
			{
				
				$talentboard=$_POST['talentboard'];
				$talentyear=$_POST['talentyear'];
				$talentgrade=$_POST['talentgrade'];
				$query3="INSERT INTO ipemarks_tb (sid,tenth_board,tenth_year,tenth_grade,inter_board,inter_year,inter_grade,talentexam_board,talentexam_year,talentexam_grade) VALUES 
				('$rno','$tboard', '$tyear','$tgrade','$ipeboard', '$ipeyear','$ipegrade','$talentboard', '$talentyear','$talentgrade')";
				mysql_query($query3) or die("no success in ecet query");
			}
			else
			{
				$eboard=$_POST['eboard1'];
				$eyear=$_POST['eyear1'];
				$egrade=$_POST['egrade1'];
				$jeeboard=$_POST['jeeboard'];
				$jeeyear=$_POST['jeeyear'];
				$jeegrade=$_POST['jeegrade'];
				$jeeadvboard=$_POST['jeeadvboard'];
				$jeeadvyear=$_POST['jeeadvyear'];
				$jeeadvgrade=$_POST['jeeadvgrade'];
				
				$query2="INSERT INTO ipemarks_tb (sid,tenth_board,tenth_year,tenth_grade,inter_board,inter_year,inter_grade,eamcet_board,eamcet_year,eamcet_grade,jeemain_board,jeemain_year,jeemain_grade,jeeadvanced_board,jeeadvanced_year,jeeadvanced_grade) VALUES 
				('$rno','$tboard', '$tyear','$tgrade','$ipeboard', '$ipeyear','$ipegrade','$eboard', '$eyear','$egrade','$jeeboard', '$jeeyear','$jeegrade','$jeeadvboard', '$jeeadvyear','$jeeadvgrade')";
				mysql_query($query2);
			}
		$stdflag='1';
		}
		else
		{
			$stdalert=1;
		}
		
	}
		
	//header("Location: scsadmin.php");

?>