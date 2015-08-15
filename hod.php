<?php 
session_start();
include "connection.php";
$hodback=0;
if(isset($_GET['hodback']))
{
	$hodback=$_GET['hodback'];
}
?>
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" /> 
<html>
	<head>
		<title>Student Counselling System</title>
<style type="text/css">
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
#aca-pid {
		border: 1px solid #a1a1a1;
		border-radius:5px;
		width:150;
		height:25;
	}
#radio-box{
color:white;
}
a{
text-decoration:none;
}
#general_info{
	position: absolute;
	font-size:15px;
	padding:3px;
	font-family:scan-serif;	
	top:100px;
	left:0px;
    width:989px;
    height:380px;
    background-color:#52D3CE;
	border-radius:20px;
}
#educational_info{
	position: absolute;
	font-size:15px;
	padding:3px;
	font-family:scan-serif;	
	top:100px;
	left:0px;
    width:989px;
    height:auto;
    background-color:#52D3CE;
	border-radius:20px;
}
#view_info{
	position: absolute;
	font-size:15px;
	padding:3px;
	font-family:scan-serif;	
	top:200px;
	left:200px;
    width:989px;
    height:px;
    background-color:#574d41;
	border-radius:20px;
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
	width:150px;
	height:30;
	background-color:lightgreen;
}
#tabs
	{
		position:absolute;
		left:250px;
		top: 125px;
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
		top: px;
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
		color:#484848 ;
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
	top:175px;
	left:200px;
    width:989px;
    height:px;
    background-color:#52D3CE;
	border-radius:20px;
}
#studentadd{
	position: absolute;
	font-size:15px;
	padding:3px;
	font-family:scan-serif;	
	top:175px;
	left:200px;
    width:989px;
    height:px;
    background-color:#52D3CE;
	border-radius:20px;
}

#viewlog{
	position: absolute;
	font-size:15px;
	padding:1x;
	font-family:scan-serif;	
	top:200px;
	left:200px;
    width:989px;
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

	#staffimage
{
	width:90px;
	height:100px;
	position:absolute;
	top:10;
	left:850px;
	border: px solid #a1a1a1;
	border-radius:10px;
	
}#studentname{
	position:relative;
top:30px;
	
	left:175px;
	//font:bold 14px/25px cambria;
	
}
#welcome
{
	width:980px;
	height:120px;
	position:absolute;
	top:200px;
	left:205px;
	border: 3px solid #a1a1a1;
	border-radius:10px;
	border-color:black
	
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
#eamcet_table
{
	left:px;
	position: relative;
	text-align:center;
}
#ecet_table
{
	left:px;
	position: relative;
	text-align:center;
}

</style>

	<script type="text/javascript">
		var tflag=<?php echo $tflag; ?>;
		//alert(tflag);
	</script>
	</head>
	<body>
	<!--	<div id="homeback">
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
				<li><input id="subpid1" type="button"  value="View Discussions" onclick="viewdetails()" /></li>
				<li><input id="subpid" type="button"  value="Log File" onclick="logfile()" /></li>
				<a href="scslogin.php" ><li><input id="subpid" type="button"  value="Logout" onclick="" /></li></a>
				
				
			</ul>
		</div>-->
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
						<li class="active"><a href="hod.php">Home</a></li>
						<li><a onclick="viewdetails()" >View Discussions</a></li>
						<li><a onclick="logfile()" >Log File</a></li>
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
				
		<div id="welcome">
			<h4 id="studentname" style="color:CC00FF"><font size="5px">WELCOME : HOD</font></h4>
			<img id="staffimage" src="images/hod.jpg" alt=""></img>
		</div>
		<div id="view_info" style="display:none;">
			<center>
			<h4 id="gen-color"><font  size="5px">Counselling Information</font></h4>
			<hr color="#E0E0E0">
			<form name="hodform" method="post" action="showcounsellinginfo.php">
				<table style="width:%" cellspacing="15" id="table-data">
					<tr>
						<center><font color="white">
						<b>Select Year : </b><select style="border-radius:5px; width:120px; border: 1px solid #a1a1a1" id="year" name="hodyear"  >
						<option value="default">Select Year</option>
						<option value="1">1'st year</option>
						<option value="2">2'nd year</option>
						<option value="3">3'rd year</option>
						<option value="4">4'th year</option>
						</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<b>Select Semester : </b><select style="border-radius:5px; width:120px; border: 1px solid #a1a1a1" id="semester" onchange="return checkandsubmit()" name="hodsem">
						<option  value="default">Select Sem</option>
						<option  value="1">I</option>
						<option value="2">II</option>
						</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</center>	
					</tr>
				</table>
			</form>
			</center>
		</div>	
		<div id="viewlog" style="display:none">
		<center>
		<h4 id="gen-color"><font  size="5px">Counselling Details</font></h4>
		<hr color="#E0E0E0">
	
		<table style="width:100%" cellspacing="15" id="table-data" style="background-color:white;">
		
		<tr>
		<td>
			<?php
				
				$i=1;
				$query="SELECT * from logfile ";
				$result1=mysql_query($query);
				echo "<table width='100%' class='CSSTableGenerator' cellpadding='5' cellspacing='5' style='background-color:;' border='1'>
					<tr>
					<th>S.No</th>
					<th>Date</th>
					<th>User ID</th>
					<th>User Name</th>
					<th>Action</th>
					</tr>";
				while($row=mysql_fetch_array($result1))
				{
					echo"
						<tr>
						<td>".$i."  </td>
						<td>".$row['date']."   </td>
						<td>".$row['uid']."  </td>
						<td>".$row['uname']."   </td>
						<td>".$row['action']."  </td>
						
						</tr>";
						$i++;
				}
					
			?>
		</td>
		</tr>
		</table>
		</center>
	
	</center>
</div>
</body>

	<script type="text/javascript"> 
	var hodbackflag=<?php echo $hodback; ?>;
	if(hodbackflag==1)
	{
		viewdetails();
	}
		function viewdetails()
		{
			document.getElementById('view_info').style.display = "block";
			document.getElementById('welcome').style.display = "none";
			document.getElementById('viewlog').style.display = "none";
		}
		function logfile()
		{
			document.getElementById('viewlog').style.display = "block";
			document.getElementById('view_info').style.display = "none";
			document.getElementById('welcome').style.display = "none";
			
		}
		
		function checkandsubmit()
		{
			if(document.getElementById('year').value != "default")
			{
				if(document.getElementById('semester').value != "default")
				{
					document.forms["hodform"].submit();
				}
				else
				{
					alert("Select Semester correctly");
				}
			}
			else
			{
				alert("Select Year correctly");
			}
		}
	</script>
</html>
<?php

?>







