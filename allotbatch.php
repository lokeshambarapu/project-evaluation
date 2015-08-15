<?php 
session_start();
include "connection.php";
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
		list-style-type: none;
		display: inline-block;
	}
	ul#menu li a:hover{
		background-color: green;
	}
a{
text-decoration:none;
}

#aca-pid {
		border: 1px solid #a1a1a1;
		border-radius:5px;
		width:150;
		height:25;
		text-align:center;
	}	
table{
color:black;
}
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
		height: 470px;
		//background-color:white ;
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

#allotstudent{
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
</style>
<html>
<head>
<title>Student Counselling System</title> 
</head>
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
						<li><a href="staffhome.php?allotback=1" >Back</a></li>
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
		<li><a href="staffhome.php?allotback=1"><input id="subpid"type="button" onclick="" value="Back"/></li>
		<li><a href="logout.php"><input id="subpid" type="button" value="Logout"/></a></li>
	
	</ul>
</div>-->

<div id="allotstudent">
<center>
<h4 id="gen-color"><font  size="5px">Allot Student</font></h4>
	<hr color="#E0E0E0">
	
	<table style="width:%" cellspacing="15" id="table-data">
		<tr>
		<td>
		<center><font color="white">
			<?php
				
				$_SESSION['year']=$_POST['year1'];
				$_SESSION['sem']=$_POST['semester1'];
				$_SESSION['branch']=$_POST['branch1'];
			?>
			Year : <input id='aca-pid' type="text" name="allotyear" value="<?php echo $_SESSION['year']?> year">
			Semester : <input id='aca-pid' type="text" name="allotsem" value="<?php echo $_SESSION['sem'];?> sem">
			Branch : <input id='aca-pid' type="text" name="allotbranch" value="<?php echo $_SESSION['branch'];?>">
		</td>
		</tr>
		<tr>
		<td>
			<?php
				
				$year2=$_SESSION['year'];
				$sem2=$_SESSION['sem'];
				$branch2=$_SESSION['branch'];
				$uid=$_SESSION['uid'];
				$i=1;
				$query="SELECT sid from stddetails_tb where (current_year='$year2') && (semester='$sem2') && (branch='$branch2') && (sid in (SELECT sid FROM allotment WHERE fid='$uid'))";
					$result1=mysql_query($query);
					echo "<form action='allotingbatch.php' method='post'>";
					echo "<table  width='80%' align='center' cellpadding='5' cellspacing='5' style='background-color:white;' border='5'>
					<tr>
					<th>S.No</th>
					<th>Student ID</th>
					<th>Batch No</th>
					</tr>";
					while($row=mysql_fetch_array($result1))
					{
						$pin=$row['sid'];
						$resultfid=mysql_query("SELECT batchno FROM allotment WHERE sid='$pin'");
						
						echo "<tr >
							<td>".$i."</td><td><input id='aca-pid' type='text' name='pid[$i]' value=".$row['sid']." disabled> </td>";
						if(mysql_num_rows($resultfid)>0)
						{
							$fidno=mysql_fetch_array($resultfid);
							echo "<td><input id='aca-pid'  type='text' name='batch[$i]' value=".$fidno['batchno']." />  </td>
							</tr>";
						}
						else
						{
							echo "<td><input id='aca-pid'  type='text' name='batch[$i]' placeholder='BatchId'/>  </td>
							</tr>";
						}
						
						
						$i++;
					}
					echo "<td colspan='6' style='text-align:center'><input id='subpid' type='submit' name='allotbatch' value='Allot Batches' style='background-color:lightgreen' /></td>
					</table> </center></form>";
				
				//else
				{
				
				}
				$_SESSION['cnt1']=--$i;
		
//echo "</div>";
	
		
			?>
		</td>
		</tr>
		</table>
		</center>
	
	</center>
</div>

</body>

<script type="text/javascript">
/*function teacheradd()
	{
		
		document.getElementById('teacheradd').style.display="block";
		document.getElementById('studentadd').style.display="none";
		document.getElementById('allotstudent').style.display="none";
		
	}
	function studentadd()
	{
		
		document.getElementById('teacheradd').style.display="none";
		document.getElementById('studentadd').style.display="block";
		document.getElementById('allotstudent').style.display="none";
		
	}
	function allotstudent()
	{
		
		document.getElementById('teacheradd').style.display="none";
		document.getElementById('studentadd').style.display="none";
		document.getElementById('allotstudent').style.display="block";
		
	}
	function checkandsubmit()
	{
		//alert("in if");
		if(document.getElementById('year').value > 0)
		{
			
			if(document.getElementById('semester').value > 0)
			{
				if(document.getElementById('branch').value > 0)
				{
					document.forms["myform"].submit();
					if(document.forms["myform"].submit())
					{
						//alert("OK");
					}
					else
					{
						//alert("error in submit");
					}
				}
				else
				{
					alert("Select Branch correctly");
				}
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
*/
</script>
</html>








