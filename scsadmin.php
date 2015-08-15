<?php 
session_start();
include "connection.php";
include "addteacher.php";
include "updategeneralinfo.php";
header("Cache-Control: no-cache, must-revalidate");
$alloted=0;
$acaalert=0;
$adminback2=0;
$acasuccess=0;
if(isset($_GET['alloted']))
{
	$alloted=$_GET['alloted'];
}
if(isset($_GET['acaalert']))
{
	
	$acaalert=$_GET['acaalert'];
}
if(isset($_GET['adminback2']))
{
	$adminback2=$_GET['adminback2'];
}
if(isset($_GET['acasuccess']))
{
	$acasuccess=$_GET['acasuccess'];
}
if(isset($_POST['year1']))//!== "") && ($_POST['semester1']!== "") && ($_POST['branch1']!== "") )
{
	$_SESSION['year']=$_POST['year1'];
	$_SESSION['sem']=$_POST['semester1'];
	$_SESSION['branch']=$_POST['branch1'];
	header("Location: allotstudent.php");
	
}
else
{
?>

<html>
	<head>
		<title>Student Counselling System</title>
		 <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
<style type="text/css">
#radio-box{
color:white;
}
a{
text-decoration:none;
}
#address {
	border: 1px solid #a1a1a1;
	border-radius:5px;
	width:540;
	height:50;
}
#general_info{
	position: absolute;
	font-size:15px;
	padding:3px;
	font-family:scan-serif;	
	top:100px;
	left:0px;
    width:989px;
    height:px;
    background-color:#574d41;
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
    background-color:#574d41;
	border-radius:20px;
}
#acadamic_info{
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
	width:170px;
	height:30;
	background-color:lightgreen;
}	
table{
color:white;
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
	top:200px;
	left:200px;
    width:989px;
    height:px;
    background-color:#574d41;
	border-radius:20px;
}
#studentadd{
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
	top:200px;
	left:200px;
    width:989px;
    height:px;
    background-color:#606060;
	border-radius:20px;
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
						<li class="active"><a href="scsadmin.php">Home</a></li>
						
						<li><a onclick="teacheradd()" >Create Teacher</a></li>
						<li><a onclick="studentadd()" >Create Student</a></li>
						<li><a onclick="allotstudent()" >Allot Student</a></li>
						<li><a onclick="addacainfo()" >Add Academic Info</a></li>
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
			<h4 id="studentname" style="color:CC00FF"><font size="5px">WELCOME : ADMIN</font></h4>
			<img id="staffimage" src="images/msd.jpg" alt=""></img>
		</div>
		
		<div id="teacheradd" style="display:none">
			<center>
				<h4 id="gen-color"><font  size="5px">Create Teacher</font></h4>
				<hr color="#E0E0E0">
				<center><span id="talerterror" class="error" style="color:red">Staff Already exists</span><br/></center>
				<center><span id="tadderror" class="error" style="color:red" >Staff Added Successfully</span><br/></center>
				<form action="" name="registration1" method="post" onsubmit="return Validateteacher()">
					<table style="width:%" cellspacing="15"  id="table-data">
						<tr>	
							<td id="table-color" ><b> Staff Name:</b></td>
							<td><input id="pid" type="text" name="tname" onchange="return allLetter()"></td>
							<td id="table-color"><b> Staff ID:</b></td>
							<td><input id="pid" type="text" name="tid" onchange="return userid_validation()"></td>
						</tr>
						<tr>
							<td id="table-color"><b> Email ID  :</b> </td>
							<td><input id="pid" type="text" name="temail" onchange="return ValidateEmail()"></td>
							<td id="table-color"><b>Department : </b></td>
									<td id="table-color">
											<select style="border-radius:px; width:120px; border: 1px solid #a1a1a1 " onchange="return Validatedept()" id="pid" name="tdepartment"  >
											<option value="default">Select Dept</option>
											<option value="CSE">CSE</option>
											<option value="IT">IT</option>
											<option value="ECE">ECE</option>
											<option value="EEE">EEE</option>
											</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						</tr>
						<tr>
							<td id="table-color"><b> Type   :</b> </td>
									<td id="table-color">
											<select style="border-radius:5px; width:120px; border: 1px solid #a1a1a1 " onchange="return Validatedept()" id="pid" name="type"  >
											<option value="staff">Staff</option>
											<option value="hod">HOD</option>
											</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
									</td>
									<td id="table-color"><b>Photo: </b></td>
										<td>	<input type="file" name="image"></td>
						</tr>
						
					</table>
					<br/>
					<hr color="#E0E0E0">
					<input id="subpid" type="submit" name="teacher" value="Submit" style="background-color:lightgreen" />
				</form>
			</center>
		</div>
		<div id="studentadd" style="display:none">
			<center>
				<h4 id="gen-color"><font  size="5px">Create Student</font></h4>
				<hr color="#E0E0E0">
				<div id="info-radios">
					<input name="radio_option" type="radio" id="radio-box" onClick="toggleTables('1')" value="radio1" checked="checked" /> 
							<font id="radio-box">Add General-Information</font>
					<input name="radio_option" type="radio" id="radio-box" onClick="toggleTables('2')" value="radio2"  /> 
							<font id="radio-box">Add Educational-Information</font>
					
				</div>
		
		
				<!-- General-Information -->
			
				<div id="general_info" style="display:none" >
					<center>
						<h4 id="gen-color"><font  size="5px">General Information</font></h4>
						<hr color="#E0E0E0">
						<center><span id="stdalerterror" class="error" style="color:red">Student Already exists</span><br/></center>
						<center><span id="stdadderror" class="error" style="color:red">Student Added Successfully</span><br/></center>
						<form action="" name="registration2" method="post">
							<table style="width:%" cellspacing="15" id="table-data">
								<tr>
									<td id="table-color" > <b>Student Name &nbsp;&nbsp;&nbsp;:</td>
									<td><input id="pid" type="text" name="sname" onchange="return allLetter1()"></td>
									<td id="table-color"> <b>Roll Number &nbsp;&nbsp;:</td>
									<td><input id="pid" type="text" name="rno" onchange="return userid_validation1()"></td>
								</tr>
								<tr>
									<td id="table-color"> <b>Father's Name &nbsp;&nbsp;  : </td>
									<td><input id="pid" type="text" name="fname" onchange="return allLetter2()"></td>
									<td id="table-color"> <b>Admission No  : </td>
									<td><input id="pid" type="text" name="admno" onchange="return numbers()"></td>
								</tr>
								<tr>
									<td id="table-color"><b>Branch : </td>
									<td id="table-color">
											<select style="border-radius:5px; width:120px; border: 1px solid #a1a1a1 " onchange="return Validatebranch()" id="branch" name="branch"  >
											<option value="default">Select Branch</option>
											<option value="CSE">CSE</option>
											<option value="IT">IT</option>
											<option value="ECE">ECE</option>
											<option value="EEE">EEE</option>
											</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td id="table-color"> <b>Email ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
									<td><input id="pid" type="text" name="email" onchange="return ValidateEmail1()"></td>
								</tr>
								<tr>
									<td id="table-color"><b>Parent's Phone #&nbsp;&nbsp;:</b></td>
									<td><input id="pid" type="text" name="fmobile" onchange="return numbers1()"</td>
									<td id="table-color"><b>Phone #&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
									<td><input id="pid" type="text" name="mobile" onchange="return numbers2()"</td>
								</tr>
								<tr>
									<td id="table-color"><b>Photo: </b></td>
									<td>	<input type="file" name="image"></td>
								</tr>
							</table>
							<table style="width:%" cellspacing="15" id="table-data">
								<tr>
								
									<td id="table-color"> <b>Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
									<td><textarea id="address" size="100" rows="1.5" cols="48" name="addr" onchange="return alphanumeric()"/></textarea></td>
								</tr>
							</table>
							<hr color="#E0E0E0">
														
					
				</div>

				<!-- Educationl-Information -->
				<div id="educational_info" style="display:none;">
					<center>
						<h4 id="gen-color"><font  size="5px">Educational Details</font></h4>
						<hr color="#E0E0E0">
						
							<table  text-align="center" cellspacing="15" id="table-data" >
								<tr>
									<td id="edu-tr" >Class</td>
									<td id="edu-tr" >Board</td>
									<td id="edu-tr" >Year of passing</td>
									<td id="edu-tr" >Percentage/grade</td>
								</tr>
								<tr>
									<td id="edu-tr">
										High-School :
									</td>
									<td>
										<select style="border-radius:5px; width:120px; border: 1px solid #a1a1a1" id="tboard" name="tboard" onchange="return Validatetboard()">
											<option  value="default" selected>Select Board</option>
											<option  value="SSC">SSC</option>
											<option value="CBSE">CBSE</option>
											<option value="ICSE">ICSE</option>
										</select>
									</td>
									<td><input id="pid" type="text" name="tyear" onchange="return Validatetyear()"></td>
									<td><input id="pid" type="text" name="tgrade" onchange="return Validatetgrade()"></td>
								</tr>
								<tr>
									<td id="edu-tr">
										10+2/Diploma :
									</td>
									<td>
										<select style="border-radius:5px; width:120px; border: 1px solid #a1a1a1" id="ipeboard" name="ipeboard" onchange="return Validateipeboard()">
											<option  value="default" selected>Select Board</option>
											<option  value="STATE">STATE</option>
											<option value="SBTET">SBTET</option>
											
										</select>
									</td>
									<td><input id="pid" type="text" name="ipeyear" onchange="return Validateipeyear()"> </td>
									<td><input id="pid" type="text" name="ipegrade""return Validateipegrade()"></td>
								</tr>
							</table>
							<font color="white">Select Education Type :</font>
									<input name="radio_option"  type="radio" id="radio-box" onClick="ecet_table()" value="ECET" checked="none" /> 
									<font id="radio-box" >ECET</font>
									<input name="radio_option" type="radio" id="radio-box" onClick="eamcet_table()" value="EAMCET" checked="none" /> 
									<font id="radio-box">EAMCET</font>
									<input name="radio_option" type="radio" id="radio-box" onClick="none()" value="NONE" checked="none" /> 
									<font id="radio-box">None</font>
									
									<table   text-align="center" cellspacing="15" id="eamcet_table" style="display:none">
									<tr>
										<td id="edu-tr" >Exam-Name</td>
										<td id="edu-tr" >Board</td>
										<td id="edu-tr" >Year of passing</td>
										<td id="edu-tr" >Rank</td>
									</tr>
									<tr>
										<td id="edu-tr" >JEE-main</td>
										<td><input id="pid" type="text" name="jeeboard"  ></td>
										<td><input id="pid" type="text" name="jeeyear"></td>
										<td><input id="pid" type="text" name="jeegrade"> </td>
									</tr>
									<tr>
										<td id="edu-tr" > JEE advanced</td>
										<td><input id="pid" type="text" name="jeeadvboard" > </td>
										<td><input id="pid" type="text" name="jeeadvyear"> </td>
										<td><input id="pid" type="text" name="jeeadvgrade"> </td>
									</tr>
									<tr>
										<td id="edu-tr" >Talent  exams</td>
										<td><input id="pid" type="text" name="eboard1" > </td>
										<td><input id="pid" type="text" name="eyear1"> </td>
										<td><input id="pid" type="text" name="egrade1"> </td>
									</tr>

									</table>
									
									<table  align="center" text-align="center" cellspacing="15" id="ecet_table" style="display:none" >
									<tr>
										<td id="edu-tr" >Exam-Name</td>
										<td id="edu-tr" >Board</td>
										<td id="edu-tr" >Year of passing</td>
										<td id="edu-tr" >Rank</td>
									</tr>
									<tr>
										<td id="edu-tr" >Talent Exam</td>
										<td><input id="pid" type="text" name="talentboard"> </td>
										<td><input id="pid" type="text" name="talentyear"> </td>
										<td><input id="pid" type="text" name="talentgrade"> </td>
									</tr>
									</table>
									
									<hr color="#E0E0E0">
								<input id="subpid" type="submit" name="student" value="Submit" style="background-color:lightgreen" />
						</form>
					</center>
				</div>
				<!-- Academic-Information -->
				
			</div>
			<div id="acadamic_info" style="display:none;">
					<center>
					<h4 id="gen-color"><font  size="5px">Add Academic Information</font></h4>
						<hr color="#E0E0E0">
						<center><span id="acasuccesserror" style="color:red" class="error">Information Updated Successfully</span><br/></center>
						<center><span id="acaalerterror" style="color:red" class="error">Information already exists</span><br/><br/></center>
							<form id="acaform" method="post" action="showstdlist.php">
								<table style="width:%" cellspacing="15" id="table-data">
									<tr>
										<center><font color="white">
											Select Year : <select style="border-radius:5px; width:120px; border: 1px solid #a1a1a1" id="addyear" name="addyear"  >
											<option value="default">Select Year</option>
											<option value="1">1'st year</option>
											<option value="2">2'nd year</option>
											<option value="3">3'rd year</option>
											<option value="4">4'th year</option>
											</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											Select Semester : <select style="border-radius:5px; width:120px; border: 1px solid #a1a1a1" id="addsem" name="addsem">
											<option  value="default">Select Sem</option>
											<option  value="1">I</option>
											<option value="2">II</option>
											</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											Select Branch : <select style="border-radius:5px; width:120px; border: 1px solid #a1a1a1 " onchange="checkandsubmit()" id="addbranch" name="addbranch"  >
											<option value="default">Select Branch</option>
											<option value="CSE">CSE</option>
											<option value="IT">IT</option>
											<option value="ECE">ECE</option>
											<option value="EEE">EEE</option>
											</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										</center>	
									</tr>
								</table>
							</form>
					</center>
				</div>	
			<div id="allotstudent" style="display:none">
			<center>
			<h4 id="gen-color"><font  size="5px">Allot Student</font></h4>
			<hr color="#E0E0E0"><br/>
			<center><span id="stdallotederror" class="error">Student Alloted Successfully</span><br/><br/></center>
			<form id="myform1" method="post" action="allotstudent.php">
				<table style="width:%" cellspacing="15" id="table-data">
					<tr>
						<center><font color="white">
							<b>Select Year : </b><select style="border-radius:5px; width:120px; border: 1px solid #a1a1a1" id="year1" name="year1"  >
							<option value="default">Select Year</option>
							<option value="1">1'st year</option>
							<option value="2">2'nd year</option>
							<option value="3">3'rd year</option>
							<option value="4">4'th year</option>
							</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<b>Select Semester : </b><select style="border-radius:5px; width:120px; border: 1px solid #a1a1a1" id="semester1" name="semester1">
							<option  value="default">Select Sem</option>
							<option  value="1">I</option>
							<option value="2">II</option>
							</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<b>Select Branch : </b><select style="border-radius:5px; width:120px; border: 1px solid #a1a1a1 " onchange="checkandsubmit1()" id="branch1" name="branch1"  >
							<option value="default">Select Branch</option>
							<option value="CSE">CSE</option>
							<option value="IT">IT</option>
							<option value="ECE">ECE</option>
							<option value="EEE">EEE</option>
							</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
						</center>
						<br/>
					</tr>
				</table>
			</form>
			</center>
		</div>

		</body>

	<script type="text/javascript">
		var flag1=<?php echo $stdflag; ?>;
		var flag2=<?php echo $tflag; ?>;
		var talertflag=<?php echo $talert; ?>;
		var stdalertflag=<?php echo $stdalert; ?>;
		var allotedflag=<?php echo $alloted; ?>;
		var acaalertflag=<?php echo $acaalert; ?>;
		var adminback2flag=<?php echo $adminback2; ?>;
		var acasuccessflag=<?php echo $acasuccess; ?>;
		if(flag1==1)
		{
			document.getElementById('stdadderror').style.visibility="visible";
			studentadd();
		}
		else{
			document.getElementById('stdadderror').style.visibility="hidden";
		}
		if(allotedflag==1)
		{
			
			document.getElementById('stdallotederror').style.visibility="visible";
			allotstudent();
		}
		else{
			document.getElementById('stdallotederror').style.visibility="hidden";
		}
		if(adminback2flag==1)
		{
			acadamic_info();
		}
		else{
			//document.getElementById('stdallotederror').style.visibility="hidden";
		}
		if(acaalertflag==1)
		{
			document.getElementById('acaalerterror').style.visibility="visible";
			addacainfo();
		}
		else{
			document.getElementById('acaalerterror').style.visibility="hidden";
		}
		if(acasuccessflag==1)
		{
			
			document.getElementById('acasuccesserror').style.visibility="visible";
			addacainfo();
		}
		else{
			document.getElementById('acasuccesserror').style.visibility="hidden";
		}
		if(flag2==1)
		{
			document.getElementById('tadderror').style.visibility="visible";
			teacheradd();
		}
		else{
			document.getElementById('tadderror').style.visibility="hidden";
		}
		if(talertflag==1)
		{
			document.getElementById('talerterror').style.visibility="visible";
			teacheradd();
		}
		else{
			document.getElementById('talerterror').style.visibility="hidden";
		}
		if(stdalertflag==1)
		{
			document.getElementById('stdalerterror').style.visibility="visible";
			studentadd();
		}
		else{
			document.getElementById('stdalerterror').style.visibility="hidden";
		}
		function userid_validation()
		{
			var id = document.registration1.tid;
			var uid_len = id.value.length;
			var numbers = /^[0-9\s-]+$/;
			if (uid_len == 0)
			{
				alert("User Id should not be empty");
				id.focus();
				return false;
			}	
			if(id.value.match(numbers))
			{
				document.registration1.temail.focus();
				return true;
			}
			else
			{
				alert("User Id should contain only numbers");
				id.focus();
				return flase;
			}
		}
		function allLetter()
		{ 
			var uname = document.registration1.tname;
			var letters = /^[A-Za-z\s-, ]+$/;
			
			if(uname.value == "")
			{
				alert("Teacher name shouldn't be empty");
				uname.focus();
				return false;
			}
			if(uname.value.match(letters))
			{
				// Focus goes to next field i.e. Address.
				document.registration1.tid.focus();
				return true;
			}
			else
			{
				alert('Username must have alphabet characters only');
				uname.focus();
				return false;
			}
		}
		function Validatedept()
		{ 
			var dept = document.registration1.tdepartment;
			var letters = /^[A-Za-z]+$/;
			if(dept.value.match(letters))
			{
				// Focus goes to next field i.e. Address.
				//document.registration1.tid.focus();
				return true;
			}
			else
			{
				alert('Department-name must have alphabet characters only');
				dept.focus();
				return false;
			}
		}

		// This function will validate Email.
		function ValidateEmail()
		{
			var uemail = document.registration1.temail;
			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if(uemail.value.match(mailformat))
			{
				document.registration1.tdepartment.focus();
				return true;
			}
			else
			{
				alert("You have entered an invalid email address!");
				uemail.focus();
				return false;
			}
		} 
		//Create student validation
		//sname validation
		function allLetter1()
		{ 
			var uname = document.registration2.sname;
			var letters = /^[A-Za-z]+$/;
			if (uname.value == "")
			{
				alert("Student Name should not be empty");
				uname.focus();
				return false;
				
			}
			if(uname.value.match(letters))
			{
				document.registration2.rno.focus();
				return true;
			}
			else
			{
				alert('Student-name must have alphabet characters only');
				uname.focus();
				return false;
			}
		}
		//rno validation
		function userid_validation1()
		{
			var id = document.registration2.rno;
			var uid_len = id.value.length;
			var numbers = /^[0-9]+$/;
			if (uid_len == 0)
			{
				alert("User Id should not be empty");
				return false;
				id.focus();
			}	
			if(id.value.match(numbers))
			{
				document.registration2.fname.focus();
				
				return true;
				
			}
			else
			{
				alert("User Id should contain only numbers");
				id.focus();
				return flase;
			}
		}
		//fname validation
		function allLetter2()
		{ 
			var uname = document.registration2.fname;
			var letters = /^[A-Za-z]+$/;
			if(uname.value.match(letters))
			{
				document.registration2.admno.focus();
				return true;
			}
			else
			{
				alert('Father-name must have alphabet characters only');
				uname.focus();
				return false;
			}
		}
		//admno validation
		function numbers()
		{
			var adm=document.registration2.admno;
			var number=/^[0-9]+([-])*[0-9]+$/;
			if(adm.value.match(number))
			{
				document.registration2.branch.focus();
				return true;
			}
			else
			{
				alert("Admission number must contain digits");
				adm.focus();
				return false;
			}
		}
		//branch validation
		function Validatebranch()
		{ 
			var branch = document.registration2.branch;
			var letters = /^[A-Za-z]+$/;
			if(branch.value.match(letters))
			{
				document.registration2.email.focus();
				return true;
			}
			else
			{
				alert('Branch-name must have alphabet characters only');
				branch.focus();
				return false;
			}
		}
		// This function will validate Email.
		function ValidateEmail1()
		{
			var uemail = document.registration2.email;
			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if(uemail.value.match(mailformat))
			{
				document.registration2.fmobile.focus();
				return true;
			}
			else
			{
				alert("You have entered an invalid email address!");
				uemail.focus();
				return false;
			}
		}
		//fmobile validation
		function numbers1()
		{
			var mobileno=document.registration2.fmobile;
			var number=/^([+])*[0-9]+([-])*[0-9]+$/;
			var num_len = mobileno.value.length;
			if(mobileno.value.match(number) && ((num_len>=10 && num_len<=14)))
			{
				document.registration2.mobile.focus();
				return true;
			}
			else
			{
				alert("Mobile number must contain digits between 10 to 14");
				mobileno.focus();
				return false;
			}
		}
		//mobile validation
		function numbers2()
		{
			var mobileno=document.registration2.mobile;
			var number=/^([+])*[0-9]+([-])*[0-9]+$/;
			var num_len = mobileno.value.length;
			if(mobileno.value.match(number) && ((num_len>=10 && num_len<=14)))
			{
				document.registration2.addr.focus();
				return true;
			}
			else
			{
				alert("Mobile number must contain digits between 10 to 14");
				mobileno.focus();
				return false;
			}
		}

		// This function will validate Address.
		function alphanumeric()
		{ 
			var uadd = document.registration2.addr;
			var letters = /^([0-9a-zA-Z]+[-,\/]*[0-9a-zA-Z]+[-,\/]*)+$/;
			if(uadd.value.match(letters))
			{
				// Focus goes to next field i.e. Country.
				//document.registration2.tboard.focus();
				return true;
			}
			else
			{
				alert("User address must have alphanumeric characters and ( -,");
				uadd.focus();
				return false;
			}
		}
		//tboard validation
		function Validatetboard()
		{ 
			if(document.getElementById('tboard').value != "default")
			{
				document.registration2.tyear.focus();
				return true;
			}
			else
			{
				alert('Select type of Board');
				document.getElementById('tboard').focus();
				return false;
			}
		}
		//tyear validation
		function Validatetyear()
		{
			var year=document.registration2.tyear;
			var number=/^[0-9]+$/;
			var num_len = year.value.length;
			if(document.getElementById("tboard").value != "default")
			{
				if(year.value.match(number) && (num_len==4 ))
				{
					document.registration2.tgrade.focus();
					return true;
				}
				else
				{
					alert("Year must contain 4 digits like YYYY");
					year.focus();
					return false;
				}
			}
			else
			{
				alert('Select type of Board');
				document.getElementById('tboard').focus();
				return false;
			}
		}
		//tgrade validation
		function Validatetgrade()
		{
			var grade=document.registration2.tgrade;
			var number=/^[0-9]+([.]?[0-9])*$/;
			var num_len = grade.value.length;
			if(grade.value.match(number) && (num_len<=5 && num_len>1))
			{
				document.registration2.ipeboard.focus();
				return true;
			}
			else
			{
				alert("Grade must be minimum of 2 digits or max of 5 characters (Ex: 85.36)");
				grade.focus();
				return false;
			}
		}
		//ipeboard validation
		function Validateipeboard()
		{ 
			var board = document.registration2.ipeboard;
			var letters = /^[A-Za-z]+$/;
			if(board.value.match(letters))
			{
				document.registration2.ipeyear.focus();
				return true;
			}
			else
			{
				alert('Board-name must have alphabet characters only');
				board.focus();
				return false;
			}
		}
		//ipeyear validation
		function Validateipeyear()
		{
			var year=document.registration2.ipeyear;
			var number=/^[0-9]+$/;
			var num_len = year.value.length;
			if(document.getElementById("ipeboard").value != "default")
			{
				if(year.value.match(number) && (num_len==4 ))
				{
					document.registration2.ipegrade.focus();
					return true;
				}
				else
				{
					alert("Year must contain 4 digits like YYYY");
					year.focus();
					return false;
				}
			}
			else
			{
				alert('Select type of Board');
				document.getElementById('ipeboard').focus();
				return false;
			}
		}
		//ipegrade validation
		function Validateipegrade()
		{
			var grade=document.registration2.ipegrade;
			var number=/^[0-9]+([.]?[0-9])*$/;
			var num_len = grade.value.length;
			if(grade.value.match(number) && (num_len<=5 && num_len>1))
			{
				//document.registration2..focus();
				return true;
			}
			else
			{
				alert("Grade must be minimum of 2 digits or max of 5 characters (Ex: 85.36)");
				grade.focus();
				return false;
			}
		}
			function hodadd()
		{
			document.getElementById('hodadd').style.display="block";
			document.getElementById('teacheradd').style.display="none";
			document.getElementById('studentadd').style.display="none";
			document.getElementById('allotstudent').style.display="none";
			document.getElementById('welcome').style.display="none";
			document.getElementById('acadamic_info').style.display="none";
			document.getElementById('general_info').style.display = "none";
		}
		function teacheradd()
		{
			document.getElementById('teacheradd').style.display="block";
			document.getElementById('studentadd').style.display="none";
			document.getElementById('allotstudent').style.display="none";
			document.getElementById('welcome').style.display="none";
			document.getElementById('acadamic_info').style.display="none";
			document.getElementById('general_info').style.display = "none";
		}
		function studentadd()
		{
			
			document.getElementById('teacheradd').style.display="none";
			document.getElementById('general_info').style.display = "block";
			document.getElementById('studentadd').style.display="block";
			document.getElementById('allotstudent').style.display="none";
			document.getElementById('welcome').style.display="none";
			document.getElementById('acadamic_info').style.display="none";
			document.getElementById('hodadd').style.display="none";
			
		}
		function allotstudent()
		{
			document.getElementById('general_info').style.display = "none";
			document.getElementById('teacheradd').style.display="none";
			document.getElementById('studentadd').style.display="none";
			document.getElementById('allotstudent').style.display="block";
			document.getElementById('welcome').style.display="none";
			document.getElementById('acadamic_info').style.display="none";
			document.getElementById('hodadd').style.display="none";
			
		}
		function addacainfo()
		{
			document.getElementById('general_info').style.display = "none";
			document.getElementById('teacheradd').style.display="none";
			document.getElementById('allotstudent').style.display="none";
			document.getElementById('studentadd').style.display="none";
			document.getElementById('acadamic_info').style.display="block";
			document.getElementById('welcome').style.display="none";
			document.getElementById('hodadd').style.display="none";
			
			
		}
		function checkandsubmit1()
		{
			if(document.getElementById('year1').value != "default")
			{
				if(document.getElementById('semester1').value != "default")
				{
					if(document.getElementById('branch1').value != "default")
					{
						document.forms["myform1"].submit();
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
		function checkandsubmit()
		{
			
			if(document.getElementById('addyear').value != "default")
			{
				if(document.getElementById('addsem').value != "default")
				{
					if(document.getElementById('addbranch').value != "default")
					{
						document.forms["acaform"].submit();
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
		function Validateteacher()
		{
			var flag=1;
			if(document.getElementByName('tname').value == "")
			{
				alert("Fill all the details");
				flag=0;
			}
			if(document.getElementByName('tid').value == "")
			{
				alert("Fill all the details");
				flag=0;
			}
			if(document.getElementByName('temail').value == "")
			{
				alert("Fill all the details");
				flag=0;
			}
			if(document.getElementByName('tname').value == "default")
			{
				alert("Fill all the details");
				flag=0;
			}
			if(flag==1)
			{
				document.forms["registration1"].submit();
			}
		}

		function toggleTables(which)
		{
			if(which == "1") {
				document.getElementById('general_info').style.display = "block";
				document.getElementById('educational_info').style.display = "none";
				document.getElementById('acadamic_info').style.display = "none";
				document.getElementById('allotstudent').style.display="none";
				document.getElementById('welcome').style.display="none";
			}
			if(which == "2") {
				document.getElementById('general_info').style.display = "none";
				document.getElementById('educational_info').style.display = "block";
				document.getElementById('acadamic_info').style.display = "none";
				document.getElementById('allotstudent').style.display="none";
				document.getElementById('welcome').style.display="none";
			}
			if(which == "3") {
				document.getElementById('general_info').style.display = "none";
				document.getElementById('educational_info').style.display = "none";
				document.getElementById('acadamic_info').style.display = "block";
				document.getElementById('allotstudent').style.display="none";
				document.getElementById('welcome').style.display="none";
					
				}
		 }
		function toggleTables1(which)
		{
			if(which == "1") {
				document.getElementById('year1').style.display = "table";
				document.getElementById('year2').style.display = "none";
				document.getElementById('year3').style.display = "none";
				document.getElementById('year4').style.display = "none";
				
				}
				if(which == "2") {
					document.getElementById('year1').style.display = "none";
					document.getElementById('year2').style.display = "table";
					document.getElementById('year3').style.display = "none";
					document.getElementById('year4').style.display = "none";
					
				}
				if(which == "3") {
					document.getElementById('year1').style.display = "none";
					document.getElementById('year2').style.display = "none";
					document.getElementById('year3').style.display = "table";
					document.getElementById('year4').style.display = "none";
					
				}
			if(which == "4") {
					document.getElementById('year1').style.display = "none";
					document.getElementById('year2').style.display = "none";
					document.getElementById('year3').style.display = "none";
					document.getElementById('year4').style.display = "table";
				}
				
		}

		function eamcet_table()
		{
			
			document.getElementById('eamcet_table').style.display="table";
			document.getElementById('teacheradd').style.display="none";
			document.getElementById('studentadd').style.display="block";
			document.getElementById('allotstudent').style.display="none";
			document.getElementById('welcome').style.display="none";
			document.getElementById('ecet_table').style.display="none";
			
		}
		function ecet_table()
		{
			
			document.getElementById('ecet_table').style.display="table";
			document.getElementById('eamcet_table').style.display="none";
			document.getElementById('teacheradd').style.display="none";
			document.getElementById('studentadd').style.display="block";
			document.getElementById('allotstudent').style.display="none";
			document.getElementById('welcome').style.display="none";
			
		}
		function none()
		{
			
			document.getElementById('ecet_table').style.display="none";
			document.getElementById('eamcet_table').style.display="none";
			document.getElementById('teacheradd').style.display="none";
			document.getElementById('studentadd').style.display="block";
			document.getElementById('allotstudent').style.display="none";
			document.getElementById('welcome').style.display="none";
			
		}


	</script>
</html>
<?php
}
?>







