<?php

	session_start();
	include "connection.php";
?>
<html>

<head>
<title>Student Counselling System</title>
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" /> 
<style type="text/css">
	#homeback{
		position: absolute;
		left: 0px;
		top: 0px;
		width: 1350px;
		height: 650px;
		background-image: url("images/bg1.jpg");
	}
	#homefront{
		position: absolute;
		top: 145px;
		left: 195px;
		width: 1010px;
		height: 485px;
		background-color:white ;
		border-radius: 25px;
	}
	#logo{
		display:;
		position:absolute;
		top: px;
		left: 200px;
		width:103px;
		height:80px;
		border-radius: 5px;
		background-color: ;
		
	}
a{
text-decoration:none;
}

	#gen-color{
	color:white;
	text-align:center;
	font:bold 14px/25px cambria;
	
}
	#logodiv{
		position:absolute;
		top: 20px;
		left: 324px;
		font-size:px;
		color:white;
		font:bold 28px/40px cambria;
	}
	#tabs
	{
		position:absolute;
		left:220px;
		top: 96px;
	}
	#menu {
		padding:3;
		margin: 3;	
	}
	ul#menu li {
		list-style-type: none;
		display: inline-block;
	}
	ul#menu li a:hover{
		background-color: ;
	}
/*Link Appearance*/
	ul#menu li a {
		text-decoration: none;
		color: white;
		//background: #666;
		padding: 8px;
		display:inline-block;
		font-size: ;
		//height: 20px;
		//width: 120px;
		text-align: center;
		background-color: Transparent;
	}
/*Make the parent of sub-menu relative*/
	ul#menu li {
		position: relative;
	}
	#add_discussion	
	{
		position:absolute;
		text-align:center;
		top:200px;
		left:200px;
		height:;
		width:1000px;
		background-color:#574d41;
		border-radius-top:20px;
		color:white;
		border-top-left-radius: 20px;
		border-top-right-radius: 20px;
		
	border-bottom-right-radius: 20px;
	border-bottom-left-radius: 20px;

		
	}
	#radio-box{
		color:white;
	}
	#aca-pid {
		border: 1px solid #a1a1a1;
		border-radius:5px;
		width:150;
		height:25;
	}
	#marksid {
		border: 1px solid #a1a1a1;
		border-radius:5px;
		width:50;
		height:25;
	}
	table{
	color:white;
}
#subpid {
	border: 1px solid #a1a1a1;
	border-radius:5px;
	width:110px;
	height:30;
	background-color:lightgreen;
}
#address {
	border: 1px solid #a1a1a1;
	border-radius:5px;
	width:;
	height:;
}	
#address1 {
	border: 1px solid #a1a1a1;
	border-radius:5px;
	width:;
	height:;
}	
#selectyear_view{
	width:1000px;
	height:450px;
	position:absolute;
	background-color:#606060;
	top:150px;
	left:200px;
	border-radius:20px;
	}
#selectyear1{
	width:1000px;
	height:50px;
	position:absolute;
	background-color:#574d41;
	top:310px;
	left:200px;
	
	
	}
	
#selectbatch_individual{
	width:px;
	height:400px;
	position:absolute;
	background-color:;
	top:250px;
	left:800px;
	border-radius:20px;
	}
	#selectbatch_individual1{
	width:px;
	height:px;
	position:absolute;
	background-color:;
	top:300px;
	left:800px;
	border-radius:20px;
	}	
#view_batchwise{
	width:1000px;
	height:px;
	position:absolute;
	background-color:;
	top:260px;
	left:220px;
	border-radius:20px;
	}
#view_individual{
	width:1000px;
	height:px;
	position:absolute;
	background-color:;
	top:300px;
	left:220px;
	border-radius:20px;
	}
#add_batchwise
{
	top:230px;
	left:10px;
	position:absolute;
}
#add_individual
{
	top:160px;
	left:px;
	color:;
	position:absolute;
	background-color:#574d41;
	border-bottom-right-radius: 20px;
	border-bottom-left-radius: 20px;
	
	
	
}
#staffimage
{
	width:95px;
	height:90px;
	position:absolute;
	top:5;
	left:900px;
	border: 1px solid #a1a1a1;
	border-radius:10px;
	
}
</style> 
</head>

<!--<div id="homeback">
</div>
<div id="homefront">
</div>
<div id="logo">
	<img src="images/vilaslogo.gif" alt=""></img>
</div>
<div id="logodiv">
			<font>Department of Computer Science and Engineering , CBIT</br> <center>Student Counselling System</center></font>
</div>

	<div id="tabs">
		<ul id="menu" >
			<li><a href="staffhome.php?staffflag1=1"><input id="subpid"type="button" value="Back"/></li>
			<li><a href="logout.php"><input id="subpid" type="button" value="Logout"/></a></li>
		</ul>
	</div>

-->
<body>
	<div class="header">
	     <div class="wrap">
			<div class="top-header">
				<div class="logo">
					<a href="scsadmin.php"><img src="images/cbit.png" title="logo" /></a>
				</div>
				
				<div class="clear"> </div>
			</div>
			<!---start-top-nav---->
			<div class="top-nav">
				<div class="top-nav-left">
					<ul>
						<li class="active"><a href="staffhome.php">Home</a></li>
						<li><a href="staffhome.php?staffflag1=1" >Back</a></li>
						<li><a href="logout.php">Logout</a></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="top-nav-right">
					<form>
						
					</form>
				</div>
				<div class="clear"> </div>
			</div>
			<!---End-top-nav---->
		</div>
	</div>
<?php

	//session_start();
	include "connection.php";
	$id=$_SESSION['uid'];	
	$i=1;
	$year=$_POST['year'];
	//$dat=$_POST['discdate'];
	
	$_SESSION['year']=$year;
	$semester=mysql_query("SELECT sem FROM currentsem_tb ");
	$semrow=mysql_fetch_array($semester);
	$semvalue=$semrow['sem'];
	echo "<form action='adddiscussion.php' method='post' onsubmit='return checkfields()'>";
		echo "<div id='add_discussion' >
				<img id='staffimage' src='imagedisp.php?sno=".$_SESSION['uid']."' alt=''></img>
				<center>
					<h4 id='gen-color'><font  size='5px'>Discussion Form</font></h4>
					<h4 id='gen-color'><font  size='5px'>Discussion Held on &nbsp <input type='text' id='date' name='date2' value='' ></font></h4>
				</center>
				<hr color='#E0E0E0'><center>";
		
	if($year == "1" || $year == "2")
	{	
		echo "<table id='add_individual' width='100%' class='imagetable' cellpadding='5' cellspacing='5' border='3' style='background-color:#574d41;'>
			<tr>
			<th>S.No</th>
			<th>Student ID</th>
			<th>Student Name</th>
			<th>Topic</th>
			<th>Remarks</th>
			<th>Attendance</th>
			<th>Marks</th>
			</tr>";
		$result=mysql_query("SELECT * from stddetails_tb where sid in(select sid from allotment where fid='$id') && current_year='$year' && semester='$semvalue'");
					
		while($row=mysql_fetch_array($result))
		{
			echo"
				<tr>
				<td>".$i."</td><td>".$row['sid']."</td>
				<td>".$row['sname']."</td>
				<td ><textarea id='' style='border-radius:5px; border: 1px solid #a1a1a1' rows='1' cols='20' name='topic11[$i]'/></textarea></td>";
			$sid=$row['sid'];
			$msg="";
			$result1=mysql_query("SELECT * FROM discussions_tb WHERE (rollno='$sid') && (topic='Request') ");
			if(mysql_num_rows($result1)>0)
			{
				while($row1=mysql_fetch_array($result1))
				{
					$msg.=$row1['remarks'];
				}
				mysql_query("DELETE FROM discussions_tb WHERE rollno='$sid' && topic='Request' ") or die("error");
				echo "<td><textarea id='address'  rows='1' cols='30' name='remarks11[$i]'/>".$msg."</textarea></td>";
			}
			else
			{
				echo "<td><textarea id='address'  rows='1' cols='20' name='remarks11[$i]'/></textarea></td>";
			}
			echo "<td><input id='attendance'  type='radio' name='attendance11[$i]' value='yes'/>P <input id='attendance'  type='radio' name='attendance11[$i]' value='no'/>A  </td><td><input id='marksid'  type='text' name='marks11[$i]' />  </td>
				</tr>";
			$i++;
		}
		echo "<td colspan='6' style='text-align:center'><input id='subpid' type='submit' name='yearsubmit' value='Submit' style='background-color:lightgreen' /></td>
				</table></center> ";
		
	}
	else
	{
		$batchno = $_POST['addbatch'];
		$_SESSION['batch']=$batchno;
		$N = count($batchno);
		echo "<table id='add_individual' width='100%' class='imagetable' cellpadding='5' cellspacing='5' border='3' style='background-color:#574d41;'>
			<tr>
			<th>Batch.No</th>
			<th>Student ID</th>
			<th>Student Name</th>
			<th>Topic</th>
			<th>Remarks</th>
			<th>Attendance</th>
			<th>Marks</th>
			</tr>";
		$k=0;
		for($i=0;$i<$N;$i++)
		{
			$batch=$batchno[$i];
			$students=mysql_query("SELECT sid,sname from stddetails_tb where sid in(select sid from allotment where fid='$id' && batchno='$batch') && current_year='$year' && semester='$semvalue'");
			$cnt=mysql_num_rows($students);
			for($j=0;$j<$cnt;$j++)
			{
				while($row=mysql_fetch_array($students))
				{
					echo"
						<tr>
						<td>".($i+1)."</td><td>".$row['sid']."  </td>
						<td>".$row['sname']."  </td>
						<td ><textarea id='' style='border-radius:5px; border: 1px solid #a1a1a1' rows='1' cols='20' name='topic22[$k]'/></textarea></td>";
					$sid=$row['sid'];
					$msg="";
					$result1=mysql_query("SELECT * FROM discussions_tb WHERE (rollno='$sid') && (topic='Request') ");
					if(mysql_num_rows($result1)>0)
					{
						while($row1=mysql_fetch_array($result1))
							{
								$msg.=$row1['remarks'];
							}
							mysql_query("DELETE FROM discussions_tb WHERE rollno='$sid' && topic='Request' ") or die("error");
							echo "<td><textarea id='address'  rows='1' cols='20' name='remarks22[$k]'/>".$msg."</textarea></td>";
					}
					else
					{
						echo "<td><textarea id='address'  rows='1' cols='20' name='remarks22[$k]'/></textarea></td>";
					}
					echo "<td><input id='attendance'  type='radio' name='attendance22[$k]' value='yes'/>P <input id='attendance'  type='radio' name='attendance22[$k]' value='no'/>A  </td><td><input id='marksid'  type='text' name='marks22[$k]' />  </td>
						</tr>";
					$k++;
				}
			}
		}
		$_SESSION['stdcnt']=$k;
			
			echo "<td colspan='6' style='text-align:center'><input id='subpid' type='submit' name='batchsubmit' value='Submit' style='background-color:lightgreen' /></td>
					</table> ";
	}
	
	echo "</div></form>";
	
			
?>
	<div id="selectyear1">
		</br> <center><font color="white">
		Select year : <select style="border-radius:5px; width:120px; border: 1px solid #a1a1a1" value="year" >
			<option><?php echo $year." year";?></option>
		</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Selected Batches : <input id='selected'  type='text' name='selected' value="<?php if($year>2){
																						 for($i=0; $i < $N; $i++ )
																						{
																						  echo("B-".$batchno[$i]);
																						  if($N>1 && $i<$N-1)
																						  echo ", ";
																						}
																						echo ".";
																						}
																						else{
																							echo "NO-Batches";
																						}
																					?>"/>
																					</br>
		
		
	</div>  



	<script type="text/javascript">
	
	var currenttime=new Date();
	var month=currenttime.getMonth()+1;
	var day=currenttime.getDate();
	var year=currenttime.getFullYear();
	document.getElementById("date").value=day + "-" + month +"-" + year; 
	
	</script>
</html>
