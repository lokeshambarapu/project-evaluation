<?php
	session_start();
	include "connection.php";
			
	if(isset($_POST['yearsubmit']) or isset($_POST['batchsubmit']))
	{
		$id=$_SESSION['uid'];
		$year=$_SESSION['year'];
		$date1=$_POST['date1'];
		$dept=mysql_query("SELECT dept FROM faculty_tb WHERE fid='$id'");
		$deptrow=mysql_fetch_array($dept);
		$deptvalue=$deptrow['dept'];
		$semester=mysql_query("SELECT sem FROM currentsem_tb ");
		$semrow=mysql_fetch_array($semester);
		$semvalue=$semrow['sem'];
		if($year == "1" || $year == "2")
		{
			
			$result=mysql_query("SELECT sid from stddetails_tb where sid in(select sid from allotment where fid='$id') && current_year='$year' && semester='$semvalue'");
			$cnt=mysql_num_rows($result) or die("Error in select");
			$i=1;
		
			while($i<=$cnt)
			{
				echo "in while";
				$pin=$_POST['pid11'][$i];
				//$sname=$_POST['sname11'][$i];
				$topic=$_POST['topic11'][$i];
				//echo $topic;
				$remarks=$_POST['remarks11'][$i];
				$marks=$_POST['marks11'][$i];
				$attendance=$_POST['attendance11'][$i];
				$query="INSERT INTO discussions_tb (rollno,topic,remarks,marks,date) VALUES ('$pin','$topic','$remarks','$marks','$date1')";
				$result=mysql_query($query) or die("Error in adding Discussion");
				echo "before if";
				$sem=mysql_query("SELECT semester,branch FROM stddetails_tb WHERE sid='$pin'");
				$semrow=mysql_fetch_array($sem);
				$semvalue=$semrow['semester'];
				$branchvalue=$semrow['branch'];
				if($attendance == 'yes')
				{
					$query1="UPDATE performance_tb SET batchcount=batchcount+1 , attended=attended+1 WHERE rno='$pin' && year='$year' && semester='$semvalue' && branch='$branchvalue'";
					$result=mysql_query($query1) or die("Error in adding Discussion");
				}
				else{
					$query1="UPDATE performance_tb SET batchcount=batchcount+1 WHERE rno='$pin' && year='$year' && semester='$semvalue' && branch='$branchvalue'";
					$result=mysql_query($query1) or die("Error in adding Discussion");
				}
				echo "after if";
				
				//echo $pin;
				$i++;
			}
		}		
		else
		{	
			//echo "batch wise";
			$batchcnt= $_SESSION['batch'];
			$count=count($batchcnt);
			$students= $_SESSION['stdcnt'];
			
			$k=0;
			for($i=0;$i<$count;$i++)
			{
				$batch=$batchcnt[$i];
												
				$students=mysql_query("SELECT sid,sname from stddetails_tb where sid in(select sid from allotment where fid='$id' && batchno='$batch') && current_year='$year' && semester='$semvalue'");
				$cnt=mysql_num_rows($students);
				for($j=0;$j<$cnt;$j++)
				{
					$pinrow=mysql_fetch_array($students);
					$pin1=$pinrow['sid'];
					$topic1=$_POST['topic22'][$k];
					$remarks1=$_POST['remarks22'][$k];
					$marks1=$_POST['marks22'][$k];
					$attendance1=$_POST['attendance22'][$k];
					
					$query="INSERT INTO discussions_tb (rollno,topic,remarks,marks,date) VALUES ('$pin1','$topic1','$remarks1','$marks1','$date1')";
					$result=mysql_query($query) or die("Error in adding Discussion");
				
					if($attendance1 == 'yes')
					{
						$query1="UPDATE performance_tb SET batchcount=batchcount+1 , attended=attended+1 WHERE rno='$pin1' && year='$year' && semester='$semvalue' && branch='$deptvalue'";
						$result=mysql_query($query1) or die("Error in adding Discussion");
					}
					else{
						$query1="UPDATE performance_tb SET batchcount=batchcount+1 WHERE rno='$pin1' && year='$year' && semester='$semvalue' && branch='$deptvalue'";
						$result=mysql_query($query1) or die("Error in adding Discussion");
					}
					$k++;
				}
			
			}
		}
		$id=$_SESSION['uid'];
		$sname=$_SESSION['uname'];
		$date=$_POST['date1'];
		
		mysql_query("INSERT INTO logfile (sno,date,uid,uname,action) VALUES ('','$date','$id','$sname','Added Discussion')") or die("failed");
		header("location:staffhome.php?adddisc=1");
		
	}

?>