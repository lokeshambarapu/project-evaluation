<?php 
//session_start();
include "connection.php";
//include "updatemarks.php";
header("Cache-Control: no-cache, must-revalidate");

?>
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
<style type="text/css">
#subpid {
	border: 1px solid #a1a1a1;
	border-radius:5px;
	width:100px;
	height:30;
	background-color:lightgreen;
}
#subpid1 {
	border: 1px solid #a1a1a1;
	border-radius:5px;
	width:100px;
	height:30;
	background-color:#EEE2E2;
}
#tabs
	{
		position:absolute;
		left:250px;
		top: 110px;
	}
	#menu {
		padding:3;
		margin: 3;	
	}
	ul#menu li {
		
		display: inline-block;
	}
	
table{
color:black;
}

#gen-color{
	color:white;
	text-align:center;
	font:bold 14px/25px cambria;
	
}

#pid {
	border: 1px solid #a1a1a1;
	border-radius:5px;
	width:200;
	height:25;
}
#table-data {
	color:white;
	text-align:center;
}
#edu-tr {
	border:3px solid #a1a1a1;
	background-color:;	
}


#teacheradd{
	position: absolute;
	font-size:15px;
	padding:3px;
	font-family:scan-serif;	
	top:160px;
	left:200px;
    width:989px;
    height:px;
    background-color:#606060;
	border-radius:20px;
}
#studentadd{
	position: absolute;
	font-size:15px;
	padding:3px;
	font-family:scan-serif;	
	top:160px;
	left:200px;
    width:989px;
    height:px;
    background-color:#606060;
	border-radius:20px;
}

#allotstudent{
	position: absolute;
	font-size:15px;
	padding:1x;
	font-family:scan-serif;	
	top:200px;
	left:200px;
    width:1010px;
    height:px;
    background-color:#574d41;
	border-radius:20px;
}
#helloadmin{
	position: absolute;
	font-size:15px;
	padding:1x;
	font-family:scan-serif;	
	top:160px;
	left:200px;
    width:989px;
    height:px;
    background-color:#606060;
	border-radius:20px;
}
a{
text-decoration:none;
}

</style>
<html>
<head>
<title>Student Counselling System</title> 
</head>
<body>
<!--<div id="homeback">
</div>
<div id="homefront">
</div>
<div id="logo">
	<img src="images/vilaslogo.gif" alt=""></img>
</div>
	<div id="logodiv">
			<font>Department of Computer Science and Engineering,CBIT</br> <center>Student Counselling System</center></font>
	</div>
<div id="tabs">
		<ul id="menu" >
			<li><a href="scsadmin.php?adminback2=1"><input id="subpid"type="button" value="Back"/></li>
			<li><a href="logout.php"><input id="subpid" type="button" value="Logout"/></a></li>
		</ul>
	</div>
-->
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
						<li class="active"><a href="scsadmin.php?adminback2=1">Back</a></li>
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
<div id="allotstudent">
<center>
<h4 id="gen-color"><font  size="5px">Update Marks</font></h4>
	<hr color="#E0E0E0">
	
	<table style="width:%" cellspacing="15" id="table-data" style="background-color:white;">
		<tr>
		<td>
		<center><font color="white">
			<?php
				
				$_SESSION['year']=$_POST['addyear'];
				$_SESSION['sem']=$_POST['addsem'];
				$_SESSION['branch']=$_POST['addbranch'];
			?>
			Year : <input id="" type="text" name="year" value="<?php echo $_SESSION['year']?>">
			Semester : <input id="" type="text" name="year" value="<?php echo $_SESSION['sem'];?>">
			Branch : <input id="pid" type="text" name="year" value="<?php echo $_SESSION['branch'];?>">
		</td>
		</tr>
		<tr>
		<td>
			<?php
				
				$year2=$_SESSION['year'];
				$sem2=$_SESSION['sem'];
				$branch2=$_SESSION['branch'];
				$i=1;
				$query="SELECT sid from stddetails_tb where current_year='$year2' && semester='$sem2' && branch='$branch2'";
					$result1=mysql_query($query);
				if(mysql_num_rows($result1)>0)
				{
					header("Location:scsadmin.php?acaalert=1");
				}
				else
				{
					echo "<form action='updatemarks.php' method='post'>";
					echo "<table id='add_individual' width='% class='imagetable'  style='background-color:white;' border='1'>
					<tr>
					<th>S.No</th>
					<th>Student ID</th>
					<th>Attendance(%)</th>
					<th>Marks(%)</th>
					<th>Backlogs</th>
					<th>Total-Backlogs</th>
					</tr>";
					while($row=mysql_fetch_array($result1))
					{
						echo"
						<tr>
						<td>".$i."</td>
						<td><input id='subpid1' type='text' name='pid33[$i]' value=".$row['sid']." > </td>
						<td><input id='subpid1'  type='text' name='attendance33[$i]' />  </td>
						<td><input id='subpid1'  type='text' name='marks33[$i]' />  </td>
						<td><input id='subpid1'  type='text' name='backlogs[$i]' />  </td>
						<td><input id='subpid1'  type='text' name='tbacklogs[$i]' />  </td>
						
						</tr>";
						$i++;
					}
					echo "<td colspan='6' style='text-align:center'><input id='subpid' type='submit' name='updatemarks' value='Update' style='background-color:lightgreen' /></td>
					</table> </center>";
					
				}
				$_SESSION['cnt']=--$i;
		
				echo "</div></form>";
	
		
			?>
		</td>
		</tr>
		</table>
		</center>
	
	</center>
</div>

</body>

<script type="text/javascript">

</script>
</html>








