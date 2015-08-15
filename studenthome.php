<?php 
session_start();
include "connection.php";
include ('updateproblem.php');
header("Cache-Control: no-cache, must-revalidate");
    $pinno=$_SESSION['uid'];
	$passupdate=0;
	$contact=0;
	if(isset($_GET['passupdate']))
	{
		$passupdate=$_GET['passupdate'];
	}
	if(isset($_GET['contact']))
	{
		$contact=$_GET['contact'];
	}
?>
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" /> 
<style type="text/css">

table, th, td {
 //border: 1px solid black;
 // border-collapse: collapse;
  color:white;
  text-align: center;
}
#radio-box{
color:white;
}
#radio_box1{
			background-color:#E8E8E8 ;
			text-align:center;
		}
#subpid {
	border: 1px solid #a1a1a1;
	border-radius:5px;
	width:100px;
	height:30;
}
#tabs
{
	position:absolute;
	left:200px;
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

/*Make the parent of sub-menu relative*/
	ul#menu li {
		position: relative;
	}

table td {
color:black;
}
table th {
color:black;
}
#homeback{
	position: relative;
	left: 0px;
	top: 0px;
	width: 1350px;
	height: 850px;
	background-image: url("images/bg1.jpg");
}
#homefront{
	position: absolute;
	top: 150px;
	left: 200px;
	width: 1000px;
	//height: 1500px;
	background-color: red;
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

#view_discussion{
	background-color:#574d41;
	display:;
	position:absolute;
	top:200px;
	left:200px;
	width:1005px;
	height:px;
	border-radius:25px;
}

#contact_div{
	background-color:#574d41;
	display:;
	position:absolute;
	top:200px;
	left:200px;
	width:1005px;
	height:auto;
	border-radius:25px;
}

#reset_div{
	background-color:#574d41;
	display:;
	position:absolute;
	top:200px;
	left:200px;
	width:1005px;
	height:auto;
	border-radius:25px;
}

#viewinfo{
	background-color:#574d41;
	display:;
	position:absolute;
	top:200px;
	left:200px;
	width:1005px;
	height:auto;
	border-radius:25px;
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
#address {
	border: 1px solid #a1a1a1;
	border-radius:5px;
	width:540;
	height:50;
}
#table-data {
	color:white;
	text-align:center;
}

#generalinfo{
	background-color:#574d41;
	display:;
	position:absolute;
	top:332px;
	left:200px;
	width:1005px;
	height:auto;
	border-radius:25px;
}
#educationalinfo{
	background-color:#574d41;
	display:;
	position:absolute;
	top:332px;
	left:200px;
	width:1005px;
	height:auto;
	border-radius:25px;
}
#academicinfo{
	background-color:#574d41;
	display:;
	position:absolute;
	top:332px;
	left:200px;
	width:1005px;
	height:auto;
	border-radius:25px;
}
#subpid {
	border: 1px solid #a1a1a1;
	border-radius:5px;
	width:115px;
	height:30;
	background-color:lightgreen;
}
#subpid1 {
	border: 1px solid #a1a1a1;
	border-radius:5px;
	width:120px;
	height:30;
	background-color:lightgreen;
	left:400px;
	position:absolute;
}
#showpass {
	border: 1px solid #a1a1a1;
	border-radius:5px;
	width:120px;
	height:30;
	background-color:lightgreen;
	align:left;
	//left:400px;
	//position:absolute;
}
#staffimage
{
	width:95px;
	height:100px;
	position:absolute;
	top:10;
	left:850px;
	border: 1px solid #a1a1a1;
	border-radius:10px;
	
}
#studentname{
	position:relative;
	top:30px;
	left:175px;
	//font:bold 14px/25px cambria;
	
}
a {
decoration:none;
}
#welcome
{
	width:980px;
	height:120px;
	position:absolute;
	top:200;
	left:205px;
	border: 3px solid #a1a1a1;
	border-radius:10px;
	border-color:black
	
}

#pid {
	border: 1px solid #a1a1a1;
	border-radius:5px;
	width:200;
	height:25;
}
#pid1 {
	border: 1px solid #a1a1a1;
	border-radius:5px;
	width:200;
	height:25;
}
a{
text-decoration:none;
}
.error
	{
		color:red;
		font-style:italic;
		font-size:25px;
		visibility:hidden;
	}
	 .view tr:nth-child(odd){ 
		background: #D8D8D8;
	}
	.view tr:nth-child(even){
		background: white;
	}
</style>
<html>
	<head>
		<title>Student Counselling System</title> 
	</head>

	<!--<div id="homeback">
	</div>
	
	<div id="homefront">
	</div>
	
	<div id="logo">
		<img src="images/vilaslogo.gif" alt=""></img>
	</div>
	
	<div id="logodiv">
		<font id="deptname">Department of Computer Science and Engineering,CBIT</font></br> <center>Student Counselling System</center></font>
	</div>
	
	<div id="tabs">
		<ul id="menu" >
			<li><input type="button" id="subpid" onclick="view_details()" value="View Details"/></li>
			<li><input type="button" id="subpid" value="View Discussions" onclick="view_discussion()"/></li>
			<li><input type="button" id="subpid" value="Contact" onclick="contact_div()"/></li>
			<li><input type="button" id="subpid" value="Reset Password" onclick="reset_div()"/></li>
			<li><a href="logout.php"><input type="button" id="subpid" value="Logout"/></a></li>
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
						<li class="active"><a href="studenthome.php">Home</a></li>
						<li class="adetails"><a  onclick="view_details()" >View Details</a></li>
						<li class="adiscussions"><a onclick="view_discussion()" >View Discussions</a></li>
						<li class="acontact"><a onclick="contact_div()" >Contact</a></li>
						<li class="areset"><a onclick="reset_div()" >Reset Password</a></li>
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
	<style>
		
	
	</style>
		<h4 id="studentname" style="color:CC00FF"><font size="5px">WELCOME : <?php echo strtoupper($_SESSION['uname']); ?></font></h4>
			<img id="staffimage" src="imagedisp.php?sno=<?php echo $pinno; ?>"  alt=""></img>
	</div>
	   
	<div id="contact_div" style="display:none">
	<style>
		
	
	</style>
		<form action="" method="POST" >
			<center> <h2><font  style="align:center" color="white" >About Problem</h2></center>
			<hr color="#E0E0E0">
			<!--<center><span id="requesterror" class="error">Request sent Successfully</span></center>-->
			<table align="center" style="width:75%" cellspacing="15" >
				<tr>
					<td style="color:white"> Problem &nbsp;&nbsp;&nbsp:</td>
					<td><textarea id="address" size="100" rows="1.5" cols="48" name="addr"/></textarea></td>
				</tr>
			</table>
			<hr color="#E0E0E0">
			<input align="center" id="subpid1" type="submit" name="submitprb" value="Submit" style="background-color:lightgreen" />
			<br/><br/>
		</form>
	</div>
	
	<div id="reset_div" style="display:none">
	<style>
		
	
	</style>
		<form action="updatepassword.php" method="POST" >
			<center> <h2><font  style="align:center" color="white" >Reset Your Password</h2></center>
			<hr color="#E0E0E0">
			<center><span id="passerror" class="error">Password Updated Successfully</span></center>
			<table align="center" style="width:75%" cellspacing="10" >
				<tr>
					<td style="color:white"><b> Old Password:</b></td>
					<td align="left"><input type="password" id="pid" name="oldpass"/>
					</td>
					<td>
					</td>
				</tr>
				<tr>
					<td style="color:white"><b> New Password:</b></td>
					<td align="left"><input type="password" id="pid1" name="newpass"/><td>
					<td align="left">
						<input  id="showpass" type="button" name="show" onclick="togglePassword()" value="Show Password" style="background-color:lightgreen" />
					</td>
				</tr>
				<tr>
					<td>
					</td>
					<td align="left">
						<input align="center" id="subpid1" type="submit" name="password"  value="Change Password" style="background-color:lightgreen" /><br/>
					</td>
				</tr>
			</table>
			<hr color="#E0E0E0">
		</form>
		<br/><br/>
	</div>
	   
	<div id="viewinfo" style="display:none;"></br><!--view info-->
	<style type="text/css">
		
	</style>
		<center>
			
					<h2><font color="white" >Student Details</h2>
				<hr color="#E0E0E0">
				<div id="info-radios">
					<input name="radio_option" type="radio" id="radio-box" onClick="toggleTables('1')" value="radio1" checked="" /> 
						<font id="radio-box">General-Information</font>
					<input name="radio_option" type="radio" id="radio-box" onClick="toggleTables('2')" value="radio2" checked="" /> 
						<font id="radio-box">Educational-Information</font>
					<input name="radio_option" type="radio" id="radio-box" onClick="toggleTables('3')" value="radio3" checked="" /> 
						<font id="radio-box">Academic-Information</font>
						
				</div>
				<hr color="#E0E0E0">
				<br/>
			</fieldset>
			<br/>
			<br/>
		</center>
	</div>
	<div id="generalinfo" style="display:none;">
		<center>
		<h2><font color="white" >General Details</h2>
		<table width="80%"  align="center"  cellspacing="5" style="background-color:white;" >
			<?php
				$result=mysql_query("SELECT * FROM stddetails_tb WHERE sid='$pinno' ");
				while($row=mysql_fetch_array($result))
				{
					echo "<tr>
						<th id='radio_box1'>Student Name </th><td > ".$row['sname']."</td>
						<th id='radio_box1'>Roll No </th><td> ".$row['sid']."</td>
						</tr>";
					echo "<tr>
						<th id='radio_box1'>Father Name </th><td> ".$row['fname']."</td>
						<th id='radio_box1'>Admission No </th><td> ".$row['admission_no']."</td>
						</tr>";
					echo "<tr>
						<th id='radio_box1'>Branch </th><td> ".$row['branch']."</td>
						<th id='radio_box1'>E-mail </th><td> ".$row['student_email']."</td>
						</tr>";
					echo "<tr>
						<th id='radio_box1'>Father's phno #</th><td> ".$row['father_phone']."</td>
						<th id='radio_box1'>Phone No #</th><td> ".$row['student_phone']."</td>
						</tr>";
					echo "<tr >
						<th id='radio_box1'>Address</th><td colspan='3'> ".$row['address']."</td>
						</tr>";
				}
				?>
		</table>
		</center>
		<br/><br/>
	</div>
	<div id="educationalinfo" style="display:none;">
		<center>
		<h2><font color="white" >Educational Details</font></h2>
			<table width="80%" align="center" cellpadding="5" cellspacing="5" style="background-color:white;" border="3">
				<?php
					$result=mysql_query("SELECT * FROM ipemarks_tb WHERE sid='$pinno'");
					$result1=mysql_query("SELECT type FROM stddetails_tb WHERE sid='$pinno'");
					$row1=mysql_fetch_array($result1);
					$examtype=$row1['type'];
					if($examtype == "EAMCET")
					{
						while($row=mysql_fetch_array($result))
						{
							echo "<tr>
								<th id='radio_box1'>Class </th><th id='radio_box1'>Board </th><th id='radio_box1'>Year of Passing </th><th id='radio_box1'>Percentage/Grade/Rank </th> 
								</tr>";
							echo "<tr>
								<th id='radio_box1'>10th </th><td> ".$row['tenth_board']."</td><td> ".$row['tenth_year']."</td><td> ".$row['tenth_grade']."</td>
								</tr>";
							echo "<tr>
								<th id='radio_box1'>10+2 </th><td> ".$row['inter_board']."</td><td> ".$row['inter_year']."</td><td> ".$row['inter_grade']."</td>
								</tr>";
							echo "<tr>
								<th id='radio_box1'>Eamcet </th><td> ".$row['eamcet_board']."</td><td> ".$row['eamcet_year']."</td><td> ".$row['eamcet_grade']."</td>
								</tr>";
							echo "<tr>
								<th id='radio_box1'>JEE-main </th><td> ".$row['jeemain_board']."</td><td> ".$row['jeemain_year']."</td><td> ".$row['jeemain_grade']."</td>
								</tr>";
							echo "<tr>
								<th id='radio_box1'>JEE-advanced </th><td> ".$row['jeeadvanced_board']."</td><td> ".$row['jeeadvanced_year']."</td><td> ".$row['jeeadvanced_grade']."</td>
								</tr>";
							echo "<tr>
								<th id='radio_box1'>Talent-exam </th><td> ".$row['talentexam_board']."</td><td> ".$row['talentexam_year']."</td><td> ".$row['talentexam_grade']."</td>
								</tr>";
						}
					}
					else
					{
						while($row=mysql_fetch_array($result))
						{
							echo "<tr>
								<th id='radio_box1'>Class </th><th id='radio_box1'>Board </th><th id='radio_box1'>Year of Passing </th><th id='radio_box1'>Percentage/Grade </th> 
								</tr>";
							echo "<tr>
								<th id='radio_box1'>10th </th><td> ".$row['tenth_board']."</td><td> ".$row['tenth_year']."</td><td> ".$row['tenth_grade']."</td>
								</tr>";
							echo "<tr>
								<th id='radio_box1'>Diploma </th><td> ".$row['inter_board']."</td><td> ".$row['inter_year']."</td><td> ".$row['inter_grade']."</td>
								</tr>";
							echo "<tr>
								<th id='radio_box1'>ECET-exam </th><td> ".$row['talentexam_board']."</td><td> ".$row['talentexam_year']."</td><td> ".$row['talentexam_grade']."</td>
								</tr>";
						}
					}
				?>
			</table>
		</center>
		<br/><br/>
	</div>
	<div id="academicinfo" style="display:none;">
		<center>
		<h2><font color="white" >Academic Details</h2>
		<table width="80%" align="center" cellpadding="5" cellspacing="5" style="background-color:white;" border="3">
			<tr>
				<th id='radio_box1'> Year </th><th id='radio_box1'> Semester </th><th id='radio_box1'>Attendance</th><th id='radio_box1'>Marks</th><th id='radio_box1'>Backlogs</th>
			</tr>
			<?php
				$result=mysql_query("SELECT * FROM bemarks_tb WHERE sid='$pinno'");
				while($row=mysql_fetch_array($result))
				{
					echo "<tr>
						<td>".$row['year']."</td><td> ".$row['semester']."</td>
						<td>".$row['attendance']."</td><td> ".$row['marks']."</td><td> ".$row['backlogs']."</td>
						</tr>";
				}
			?>
		</table>
		</center>
		<br/><br/>
	</div><!--viewinfo-->
	
	<div id="view_discussion" style="display:none;"><!--view info-->
		<center>
		
				<h2><font color="white" >Discussions Held</h2>
			
			<table class="view"width="80%" align="center" cellspacing="5" style="background-color:white;" >
				<tr>
					<th> Date </th><th>Topic Name</th><th>Marks</th><th>Remarks</th>
				</tr>
				<?php
					$result=mysql_query("SELECT * FROM discussions_tb WHERE rollno='$pinno' ");
					while($row=mysql_fetch_array($result))
					{
						echo "<tr>
							<td>".$row['date']."</td><td> ".$row['topic']."</td><td> ".$row['marks']."</td><td> ".$row['remarks']."</td>
							</tr>";
					}
				?>
			</table>
		
		</center>
		<br/><br/>
	</div>
	<script type="text/javascript">
	 var deptname=document.getElementById('deptname');
	
	//alert(deptname.innerHTML);
	
	var probflag=<?php echo $problemflag;?>;
	var passupdateflag=<?php echo $passupdate; ?>;
	if(probflag=='1')
	{
		document.getElementById('requesterror').style.visibility="visible";
		contact_div();
	}
	else{
		document.getElementById('requesterror').style.visibility="hidden";
	}
	if(passupdateflag=='1')
	{
		document.getElementById('passerror').style.visibility="visible";
		reset_div();
	}
	else{
		document.getElementById('passerror').style.visibility="hidden";
	}
	function view_details()
	{
		document.getElementById('reset_div').style.display="none";
		document.getElementById('viewinfo').style.display="block";
		document.getElementById('view_discussion').style.display="none";
		document.getElementById('welcome').style.display="none";
		document.getElementById('contact_div').style.display="none";
		document.getElementById('generalinfo').style.display="none";
		document.getElementById('educationalinfo').style.display="none";
		document.getElementById('academicinfo').style.display="none";
	}
	function contact_div()
	{
		document.getElementById('reset_div').style.display="none";
		document.getElementById('contact_div').style.display="block";
		document.getElementById('welcome').style.display="none";
		document.getElementById('view_discussion').style.display="none";
		document.getElementById('viewinfo').style.display="none";
		document.getElementById('generalinfo').style.display="none";
		document.getElementById('educationalinfo').style.display="none";
		document.getElementById('academicinfo').style.display="none";
	}
	function reset_div()
	{
		document.getElementById('reset_div').style.display="block";
		document.getElementById('contact_div').style.display="none";
		document.getElementById('welcome').style.display="none";
		document.getElementById('view_discussion').style.display="none";
		document.getElementById('viewinfo').style.display="none";
		document.getElementById('generalinfo').style.display="none";
		document.getElementById('educationalinfo').style.display="none";
		document.getElementById('academicinfo').style.display="none";
	}

	function view_discussion()
	{
		document.getElementById('viewinfo').style.display="none";
		document.getElementById('view_discussion').style.display="block";
		document.getElementById('reset_div').style.display="none";
		document.getElementById('welcome').style.display="none";
		document.getElementById('contact_div').style.display="none";
		document.getElementById('generalinfo').style.display="none";
		document.getElementById('educationalinfo').style.display="none";
		document.getElementById('academicinfo').style.display="none";
	}
	function toggleTables(which)
	{
		if(which == "1") {
			document.getElementById('viewinfo').style.display="block";
			document.getElementById('view_discussion').style.display="none";
			document.getElementById('reset_div').style.display="none";
			document.getElementById('welcome').style.display="none";
			document.getElementById('contact_div').style.display="none";
			document.getElementById('generalinfo').style.display="block";
			document.getElementById('educationalinfo').style.display="none";
			document.getElementById('academicinfo').style.display="none";
		}
		if(which == "2") {
			document.getElementById('viewinfo').style.display="block";
			document.getElementById('view_discussion').style.display="none";
			document.getElementById('reset_div').style.display="none";
			document.getElementById('welcome').style.display="none";
			document.getElementById('contact_div').style.display="none";
			document.getElementById('generalinfo').style.display="none";
			document.getElementById('educationalinfo').style.display="block";
			document.getElementById('academicinfo').style.display="none";
		}
		if(which == "3") {
			document.getElementById('viewinfo').style.display="block";
			document.getElementById('view_discussion').style.display="none";
			document.getElementById('reset_div').style.display="none";
			document.getElementById('welcome').style.display="none";
			document.getElementById('contact_div').style.display="none";
			document.getElementById('generalinfo').style.display="none";
			document.getElementById('educationalinfo').style.display="none";
			document.getElementById('academicinfo').style.display="block";
		}
	}
	function togglePassword()
	{
		var upass = document.getElementById('pid1');
		var toggleBtn = document.getElementById('showpass');
		if(upass.type == "password")
		{
			upass.type = "text";
			toggleBtn.value = "Hide Password";
		}
		else
		{
			upass.type = "password";
			toggleBtn.value = "Show Password";
		}
	}

	</script>
</html>









