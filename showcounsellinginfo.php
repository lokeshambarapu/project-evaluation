<?php 
session_start();
include "connection.php";
//include "updatemarks.php";
header("Cache-Control: no-cache, must-revalidate");

?>
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" /> 
<style type="text/css">
a{
text-decoration:none;
}

#aca-pid {
		border: 1px solid #a1a1a1;
		border-radius:5px;
		width:150;
		height:25;
	}
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
	.CSSTableGenerator {
	margin:0px;padding:0px;
	width:100%;
	
	border:1px solid #000000;
	

	
	
}.CSSTableGenerator table{
    border-collapse: collapse;
      
	width:100%;
	height:100%;

}

.CSSTableGenerator tr:nth-child(odd){ background-color:#E6E6E6; }
.CSSTableGenerator tr:nth-child(even)    { background-color:#ffffff; }.CSSTableGenerator td{
	vertical-align:middle;
	border:1px solid #000000;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:7px;
	font-size:13px;
	font-family:Arial;
	font-weight:normal;
	color:#000000;
}



	table {
  border-spacing: 0.5rem;
  border-collapse: collapse;
}
table{
color:black;
}
#homeback{
		position: absolute;
		left: 0px;
		top: 0px;
		width: 1345px;
		height: 650px;
		background-image: url("images/bg1.jpg");
	}
	#homefront{
		position: absolute;
		top: 150px;
		left: 200px;
		width: 1000px;
		height:px;
		background-color: white;
		border-radius: 25px;
	}
	#logo{
		display:;
		position:absolute;
		top: 20px;
		left: 200px;
		width:103px;
		height:80px;
		border-radius: 5px;
		background-color: ;
		
	}
	#logodiv{
		position:absolute;
		top: 20px;
		left: 324px;
		font-size:px;
		color:white;
		font:bold 28px/40px cambria;
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
.view tr:nth-child(odd){ 
		background: #D8D8D8;
	}
	.view tr:nth-child(even){
		background: white;
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
  tr:nth-child(odd){ 
		background: #D8D8D8;
	}
	th{ 
		background: #9DE6FF;
	}
	 tr:nth-child(even){
		background: white;
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
			<li><a href="hod.php?hodback=1"><input id="subpid"type="button" value="Back"/></li>
			<li><a href="logout.php"><input id="subpid" type="button" value="Logout"/></a></li>
		</ul>
	</div>-->
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
						<li><a href="hod.php?hodback=1" >Back</a></li>
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
<div id="allotstudent"></br>
<center>
<h4 id="gen-color"><font  size="5px">Counselling Information</font></h4></br>
	<hr color="#E0E0E0">
	
	<!--<table style="width:%" cellspacing="15" id="table-data" style="background-color:;">
		<tr>
		<td>-->
		<center><font color="white">
			<?php
				$id=$_SESSION['uid'];
				$year=$_POST['hodyear'];
				$sem=$_POST['hodsem'];
				$branchrow=mysql_query("SELECT dept FROM faculty_tb WHERE fid='$id'");
				$branch=mysql_fetch_array($branchrow);
				$dept=$branch['dept'];
			?>
			Year : <input id="" type="text" name="year" value="<?php echo $year; ?>">
			Semester : <input id="" type="text" name="year" value="<?php echo $sem; ?>">
		<hr color="#E0E0E0">	
		</td>
		
		</tr>
		
		<tr>
		<td>
			<?php
				
				$i=1;
				$query="SELECT sid,sname from stddetails_tb where current_year='$year' && semester='$sem' && branch='$dept'";
					$result1=mysql_query($query);
					echo "<form action='' method='post'>";
					echo "<table width='100% class='CSSTableGenerator' cellpadding='5' cellspacing='5' style='background-color:;' border='1'>
					<tr>
					<th>S.No</th>
					<th>Roll No</th>
					<th>Name</th>
					<th>No of Counselling</th>
					<th>Percentage(%)</th>
					<th>Counsellor</th>
					</tr>";
					while($row=mysql_fetch_assoc($result1))
					{
						$sid=$row['sid'];
						$sname=$row['sname'];
						$query2="SELECT * FROM performance_tb WHERE (rno='$sid') && (year='$year') && (semester='$sem') && (branch='$dept')";
						$discresult=mysql_query($query2) or die("error error");
						while($disc=mysql_fetch_assoc($discresult))
						{
							echo"
							<tr>
							<td>".$i."</td>
							<td>".$disc['rno']."  </td>
							<td>".$sname."   </td>
							<td>".$disc['batchcount']."  </td>";
							
							$per=(($disc['attended'])/($disc['batchcount']))*100;
							
							echo "<td>".$per." </td>";
							
							$query3="SELECT * FROM allotment WHERE sid='$sid'";
							$allotresult=mysql_query($query3);
							while($fid=mysql_fetch_assoc($allotresult))
							{	
								$fidno=$fid['fid'];
								$fnameresult=mysql_query("SELECT fname FROM faculty_tb WHERE fid='$fidno'");
								$fnamerow=mysql_fetch_assoc($fnameresult);
								$fname=$fnamerow['fname'];
								
								echo "<td>".$fname."   </td>							
									</tr>";
							}
						}
						$i++;
					}
					echo "</td>
					</table> </center>";
				
			?>
		</td>
		</tr>
		</table>
		</center>
	
	</center>
</div>

</body>

<script type="text/javascript">
var marksflag=<?php echo $marksflag; ?>;
	if(marksflag==0)
	{
		//window.location="
	}
</script>
</html>








