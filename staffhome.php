 <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
<?php
	include 'connection.php';
	//include 'staffindividual.php';
	session_start();
	$id=$_SESSION['uid'];
	$query="SELECT * FROM images WHERE uid='$id'";
	$result=mysql_query($query) or die("errorrr");
	$row=mysql_fetch_array($result);
	$staffflag1=0;
	$adddisc=0;
	$viewdisc=0;
	$allotback=0;
	$allotedbatch=0;
	$passupdate=0;
	if(isset($_GET['staffflag1']))
	{
		$staffflag1=$_GET['staffflag1'];
	}
	if(isset($_GET['adddisc']))
	{
		$adddisc=$_GET['adddisc'];
	}
	if(isset($_GET['viewdisc']))
	{
		$viewdisc=$_GET['viewdisc'];
	}
	if(isset($_GET['allotback']))
	{
		$allotback=$_GET['allotback'];
	}
	if(isset($_GET['allotedbatch']))
	{
		$allotedbatch=$_GET['allotedbatch'];
	}
	if(isset($_GET['passupdate']))
	{
		$passupdate=$_GET['passupdate'];
	}
	
?>
<html>
	<head>
		<title>Student Counselling System</title> 
	<style type="text/css">
	
	
	#gen-color{
	color:white;
	text-align:center;
	font:bold 14px/25px cambria;
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
/*Link Appearance
	ul#menu li a {
		text-decoration: none;
		color: white;
		//background: #666;
		padding: 8px;
		display:inline-block;
		font-size: ;
		height: 20px;
		width: 120px;
		text-align: center;
		background-color: Transparent;
	}*/
/*Make the parent of sub-menu relative*/
	ul#menu li {
		position: relative;
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
	#add_discussion	
	{
		
		width:1000px;
		height:150px;
		position:absolute;
		background-color:#574d41;
		top:200px;
		left:200px;
		border-top-right-radius: 20px;
		border-top-left-radius: 20px;
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
		width:125px;
		height:30;
		background-color:lightgreen;
	}
	#address {
		border: 1px solid #a1a1a1;
		border-radius:5px;
		width:310;
		height:50;
	}	
	a{
		text-decoration:none;
	}

	#address1 {
		border: 1px solid #a1a1a1;
		border-radius:5px;
		width:200;
		height:50;
	}	
	#selectyear_view{
		width:1000px;
		height:150px;
		position:absolute;
		background-color:#574d41;
		top:200px;
		left:200px;
		border-top-right-radius: 20px;
		border-top-left-radius: 20px;

	}
	#selectyear1{
		width:1000px;
		height:350px;
		position:absolute;
		background-color:#574d41;
		top:310px;
		left:200px;
		border-bottom-right-radius: 20px;
		border-bottom-left-radius: 20px;
	}
	#typediv{
		width:1000px;
		height:200px;
		position:absolute;
		background-color:#574d41;
		top:350px;
		left:200px;
		border-bottom-right-radius: 20px;
		border-bottom-left-radius: 20px;
	}
	#typediv1{
		width:1000px;
		height:200px;
		position:absolute;
		background-color:#574d41;
		top:353px;
		left:200px;
		border-bottom-right-radius: 20px;
		border-bottom-left-radius: 20px;
	}
	#batch_allot{
		width:1000px;
		height:;
		position:absolute;
		background-color:#574d41;
		top:200px;
		left:200px;
		border-radius:20px;
	}

	#add_batchwise
	{
		top:280px;
		left:10px;
		position:absolute;
	}
	#add_individual
	{
		top:280px;
		left:10px;
		position:absolute;
	}
	#staffimage
	{
		width:95px;
		height:100px;
		position:absolute;
		top:;
		left:900px;
		border: 1px solid #a1a1a1;
		border-radius:10px;
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
	#reset_div{
		background-color:#574d41;
		display:;
		position:absolute;
		top:215px;
		left:200px;
		width:1005px;
		height:auto;
		border-radius:25px;
		
	}
	.error
	{
		color:red;
		font-style:italic;
		font-size:20px;
		visibility:hidden;
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
#reports_details{
	background-color:#574d41;
	display:;
	position:absolute;
	top:332px;
	left:200px;
	width:1005px;
	height:auto;
	border-radius:25px;
}
#update_reports{
	background-color:#574d41;
	display:;
	position:absolute;
	top:332px;
	left:200px;
	width:1005px;
	height:auto;
	border-radius:25px;
}
	</style> 
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
						
						<li><a onclick="add_discussion()" >Add Discussion</a></li>
						<li><a onclick="view_discussion()" >View Discussion</a></li>
						<li><a onclick="view_details()" >Incharge</a></li>
						<li><a onclick="allotbatch1()" >Allot Batches</a></li>
						<li><a onclick="reset_div()" >Change Password</a></li>
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
		<font>Department of Computer Science and Engineering , CBIT</br> <center>Student Counselling System</center></font>
	</div>
	
	<div id="tabs">
		<ul id="menu" >
			<li><input id="subpid" type="button" onclick="add_discussion()" value="Add Discussion"/></li>
			<li><input id="subpid"type="button" onclick="view_discussion()" value="View Discussion"/></li>
			<li><input id="subpid"type="button" onclick="allotbatch1()" value="Allot Batches"/></li>
			<li><input type="button" id="subpid" value="Change Password" onclick="reset_div()"/></li>
			<li><a href="logout.php"><input id="subpid" type="button" value="Logout"/></a></li>
		</ul>
	</div>-->

	<div id="welcome">
		<h4 id="studentname" style="color:CC00FF"><font size="5px">WELCOME : <?php  echo strtoupper($_SESSION['uname']); ?></font></h4>
		<img id="staffimage" src="imagedisp.php?sno=<?php echo $id; ?>" alt=""></img>
	</div>

  <!-- view discussion start's-->
	<form action="viewdiscussion.php" method="post" name="viewdiscform">
		<div id="selectyear_view" style="display:none;">
			</br> <center><h4 id="gen-color"><font  size="5px">Discussions Held </font></h4><font color="white">
			<hr color="#E0E0E0">	
			<center><br/>
			<b>Select year :</b><select style="border-radius:5px; width:120px; border: 1px solid #a1a1a1" id="selectyear2" name="year1" onchange="return selecttype1()" >
				<option value="default" selected>Select Year</option>
				<option value="1">1'st year</option>
				<option value="2">2'nd year</option>
				<option value="3">3'rd year</option>
				<option value="4">4'th year</option>
				</select>&nbsp;&nbsp;&nbsp;
				<br/>
			</center>
			
		</div>
		<div id="typediv1" style="display:none;">
			<center>
			
			<table align="" style="width:25%" cellspacing="15" >
				<tr>
					<td>
						<b>Select Batch:</b>
					</td>
					<td><input type="checkbox" name="viewbatch[]" value="1" id="batch1" />Batch-1
					
					</td>
					
				</tr>
				<tr>
					<td>
					</td>
					<td>
						<input type="checkbox" name="viewbatch[]" value="2" id="batch1" />Batch-2
					</td>
				</tr>
				<tr>
					<td>
					</td>
					<td>
						<input type="checkbox" name="viewbatch[]" value="3" id="batch1" />Batch-3
					</td>
				</tr>
				<tr colspan="2">
					<td align="left">
						<input align="center" id="subpid1" type="submit" name="viewdiscussion"  value="Select" style="background-color:lightgreen" onclick="return checkview()" /><br/>
					</td>
				</tr>
			</table>
			
			</center> 
			
			<hr color="#E0E0E0">	
		</div>  
	</form>		

	<!-- Add Discussion -->
	<form action="staffindividual.php" method="post" name="adddiscform"></br> 
	<div id="add_discussion" style="display:none">
		
		<center></br>
			<h4 id="gen-color"><font  size="5px">Discussion Form</font></h4>
			<hr color="#E0E0E0"/>
		</center>
		<center>
			<span id="nameerror" class="error">Discussion Added Successfully</span></br>
			<b>Select year :</b><select style="border-radius:5px; width:120px; border: 1px solid #a1a1a1" id="addyear" name="year" onchange="return selecttype()" >
				<option value="default" selected> &nbsp;&nbsp;&nbsp;&nbsp;Select Year</option>
				<option value="1">1'st year</option>
				<option value="2">2'nd year</option>
				<option value="3">3'rd year</option>
				<option value="4">4'th year</option>
				</select>&nbsp;&nbsp;
				<br/>
		</center>
		
		
		
	</div>
	
	<div id="selectyear1" style="display:none;">
		
			<center><br/>
			
			</center>
	</div>
	
	<div id="typediv" style="display:none;">
			<center>
			
			<table align="" style="width:25%" cellspacing="15" >
				<tr>
					<td>
						<b>  Select Batch:</b>
					</td>
					<td><input type="checkbox" name="addbatch[]" value="1" id="batch" />Batch-1
					
					</td>
					
				</tr>
				<tr>
					<td>
					</td>
					<td>
						<input type="checkbox" name="addbatch[]" value="2" id="batch" />Batch-2
					</td>
				</tr>
				<tr>
					<td>
					</td>
					<td>
						<input type="checkbox" name="addbatch[]" value="3" id="batch" />Batch-3
					</td>
				</tr>
				<tr colspan="2">
					<td align="left">
						<input align="center" id="subpid1" type="submit" name="selectdiscussion"  value="Select" style="background-color:lightgreen" onclick="return checkadd()" /><br/>
					</td>
				</tr>
			</table>
			
			</center> 
			
			<hr color="#E0E0E0">	
		
	</div>  
	</form>
	<div id="reset_div" style="display:none">
		<form action="updatepassword.php" method="POST" >
			<center> <h2><font  style="align:center" color="white" >Change Your Password</h2></center>
			<hr color="#E0E0E0">
			<br/>
			<center><span id="passerror" class="error">Password Updated Successfully</span><br/></center>
			<table align="center" style="width:75%" cellspacing="10" >
				<tr >
					<td style="color:white"> <b>Old Password:</b></td>
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
    </div>
	
	<div id="batch_allot" style="display:none">
		<center>
			<h4 id="gen-color"><font  size="5px">Allot Batch</font></h4>
			<hr color="#E0E0E0">
			<form id="myform1" method="post" action="allotbatch.php">
				<table style="width:%" cellspacing="15" id="table-data">
					<tr>
						<center><font color="white"></br/>
						<span id="batcherror" class="error">Batches Alloted Successfully</span><br/></br/>
							<b>Select Year : </b><select style="border-radius:5px; width:120px; border: 1px solid #a1a1a1" id="year" name="year1"  >
								<option value="default">Select Year</option>
								<option value="1">1'st year</option>
								<option value="2">2'nd year</option>
								<option value="3">3'rd year</option>
								<option value="4">4'th year</option>
							</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<b>Select Semester : </b><select style="border-radius:5px; width:120px; border: 1px solid #a1a1a1" id="semester" name="semester1">
								<option  value="default">Select Sem</option>
								<option  value="1">I</option>
								<option value="2">II</option>
							</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<b>Select Branch : </b><select style="border-radius:5px; width:120px; border: 1px solid #a1a1a1 " onchange="checkandsubmit()" id="branch" name="branch1"  >
								<option value="default">Select Branch</option>
								<option value="CSE">CSE</option>
								<option value="IT">IT</option>
								<option value="ECE">ECE</option>
								<option value="EEE">EEE</option>
							</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
						</center>	
					</tr>
				</table>
			</form>
		</center>
	</div>
<div id="viewinfo" style="display:none;"></br><!--view info-->
		<center>
			
					<h2><font color="white" >xxxxxxxxxx</h2>
				<hr color="#E0E0E0">
				<div id="info-radios">
					<input name="radio_option" type="radio" id="radio-box" onClick="toggleTables('1')" value="radio1" checked="" /> 
						<font id="radio-box">View Students</font>
					<input name="radio_option" type="radio" id="radio-box" onClick="toggleTables('2')" value="radio2" checked="" /> 
						<font id="radio-box">View Reports</font>
					<input name="radio_option" type="radio" id="radio-box" onClick="toggleTables('3')" value="radio3" checked="" /> 
						<font id="radio-box">Update Reports</font>
						
				</div>
				<hr color="#E0E0E0">
				<br/>
			<br/>
			<br/>
		</center>
	</div>
	<div id="generalinfo" style="display:none;">
		<center>
		<h2><font color="white" >General Details</h2>
		<table width="80%"  align="center"  cellspacing="5" style="background-color:white;" >
			<?php
				
			?>
		</table>
		</center>
		<br/><br/>
	</div>
	<div id="reports_details" style="display:none;">
		<center>
		<h2><font color="white" >Reports Details</font></h2>
			<table width="80%" align="center" cellpadding="5" cellspacing="5" style="background-color:;" border="3">
			<tr> <th>S.No</th><th>Name</th><th>Roll No</th><th>Guide Marks</th><th>Incharge Marks</th><th>Total</th>
				<?php
					
							
							
				?>
			</table>
		</center>
		<br/><br/>
	</div>
	<div id="update_reports" style="display:none;">
		<center>
		<h2><font color="white" >Update Reports</h2>
		<table width="80%" align="center" cellpadding="5" cellspacing="5" style="background-color:;" border="3">
			<tr>
				<th id='radio_box1'>S.No</th><th id='radio_box1'>Roll No</th><th id='radio_box1'>Name</th><th id='radio_box1'>Marks</th>
			</tr>
			<?php
				
			?>
		</table>
		</center>
		<br/><br/>
	</div>
	<script type="text/javascript">
	
	var staffindiflag=<?php echo $staffflag1; ?>;
	var adddiscflag=<?php echo $adddisc; ?>;
	var viewdiscflag=<?php echo $viewdisc; ?>;
	var allotbackflag=<?php echo $allotback; ?>;
	var allotbatchflag=<?php echo $allotedbatch; ?>;
	var passupdateflag=<?php echo $passupdate; ?>;
	//alert(staffindiflag);
	if(staffindiflag==1)
	{
		add_discussion();
	}
	else
	{
		//window.location="staffhome.php";
	}
	if(adddiscflag==1)
	{
		document.getElementById('nameerror').style.visibility="visible";
		add_discussion();
	}
	else{
		document.getElementById('nameerror').style.visibility="hidden";
	}
	if(passupdateflag==1)
	{
		document.getElementById('passerror').style.visibility="visible";
		reset_div();
	}
	else{
		document.getElementById('passerror').style.visibility="hidden";
	}
	if(viewdiscflag==1)
	{
		//document.getElementById('nameerror').style.visibility="visible";
		view_discussion();
	}
	else{
		//document.getElementById('nameerror').style.visibility="hidden";
	}
	if(allotbatchflag==1)
	{
		document.getElementById('batcherror').style.visibility="visible";
		allotbatch1();
	}
	else{
		document.getElementById('batcherror').style.visibility="hidden";
	}
	if(allotbackflag==1)
	{
		//document.getElementById('nameerror').style.visibility="visible";
		allotbatch1();
	}
	else{
		//document.getElementById('nameerror').style.visibility="hidden";
	}
	function checkadd()
	{
		var check=document.getElementById("addyear").value;
		if(check != "default")
		{
			if(document.getElementById("batch")[1].checked == true)
			{
				alert("checked...");
				return true;
			}
			else
			{
				alert("check batch to add");
				return false;
			}
			
		}
		else
		{
			alert("Select year");
			return false;
		}
	}
	function checkview()
	{
		var check=document.getElementById("selectyear2").value;
		if(check != "default")
		{
			if(document.getElementById("batch1")[2].checked == true)
			{
				alert("checked...");
				return true;
			}
			else
			{
				alert("check batch to add");
				return false;
			}
			
		}
		else
		{
			alert("Select year");
			return false;
		}
	}
	function selecttype()
	{
		var year=document.getElementById("addyear").value;
		if(year == "default")
		{
			alert("Select Year");
		}
		else if(year=='1' || year=='2')
		{
			document.forms["adddiscform"].submit();
		}
		else{
			addtypediv();
		}
	}
	function selecttype1()
	{
		var year=document.getElementById("selectyear2").value;
		if(year == "default")
		{
			alert("Select Year");
		}
		else if(year=='1' || year=='2')
		{
			document.forms["viewdiscform"].submit();
		}
		else{
			addtypediv1();
		}
	}
	
	function view_discussion()
	{
		document.getElementById('selectyear_view').style.display="block";
		document.getElementById('add_discussion').style.display="none";
		//document.getElementById('selectyear1').style.display="none";
		document.getElementById('typediv').style.display="none";
		document.getElementById('typediv1').style.display="none";
		document.getElementById('reset_div').style.display="none";
		document.getElementById('batch_allot').style.display="none";
		document.getElementById('welcome').style.display="none";
		document.getElementById('viewinfo').style.display="none";
			document.getElementById('update_reports').style.display="none";
			document.getElementById('generalinfo').style.display="none";
			document.getElementById('reports_details').style.display="none";
	}
	var currenttime=new Date();
	var month=currenttime.getMonth()+1;
	var day=currenttime.getDate();
	var year=currenttime.getFullYear();
	document.getElementById("date").value=day + "-" + month +"-" + year; 

	function reset_div()
	{
		document.getElementById('selectyear_view').style.display="none";
		document.getElementById('add_discussion').style.display="none";
		//document.getElementById('selectyear1').style.display="none";
		document.getElementById('typediv').style.display="none";
		document.getElementById('typediv1').style.display="none";
		document.getElementById('reset_div').style.display="block";
		document.getElementById('batch_allot').style.display="none";
		document.getElementById('welcome').style.display="none";
		document.getElementById('viewinfo').style.display="none";
		document.getElementById('viewinfo').style.display="none";
			document.getElementById('update_reports').style.display="none";
			document.getElementById('generalinfo').style.display="none";
			document.getElementById('reports_details').style.display="none";
		
	}
	function add_discussion()
	{	
		document.getElementById('add_discussion').style.display="block";
		document.getElementById('selectyear_view').style.display="none";
		//document.getElementById('selectyear1').style.display="block";
		document.getElementById('typediv').style.display="none";
		document.getElementById('typediv1').style.display="none";
		document.getElementById('reset_div').style.display="none";
		document.getElementById('batch_allot').style.display="none";
		document.getElementById('welcome').style.display="none";
		document.getElementById('viewinfo').style.display="none";	
document.getElementById('viewinfo').style.display="none";
			document.getElementById('update_reports').style.display="none";
			document.getElementById('generalinfo').style.display="none";
			document.getElementById('reports_details').style.display="none";		
	}
	function allotbatch1()
	{	
		document.getElementById('batch_allot').style.display="block";	
		document.getElementById('add_discussion').style.display="none";
		document.getElementById('selectyear_view').style.display="none";
		//document.getElementById('selectyear1').style.display="none";
		document.getElementById('typediv').style.display="none";
		document.getElementById('typediv1').style.display="none";
		document.getElementById('reset_div').style.display="none";
		document.getElementById('welcome').style.display="none";
		document.getElementById('viewinfo').style.display="none";
		document.getElementById('viewinfo').style.display="none";
			document.getElementById('update_reports').style.display="none";
			document.getElementById('generalinfo').style.display="none";
			document.getElementById('reports_details').style.display="none";
		
	}
	function addtypediv()
	{	
		document.getElementById('batch_allot').style.display="none";	
		document.getElementById('add_discussion').style.display="block";
		document.getElementById('selectyear_view').style.display="none";
		//document.getElementById('selectyear1').style.display="block";
		document.getElementById('typediv').style.display="block";
		document.getElementById('typediv1').style.display="none";
		document.getElementById('reset_div').style.display="none";
		document.getElementById('welcome').style.display="none";
		document.getElementById('viewinfo').style.display="none";
		document.getElementById('viewinfo').style.display="none";
			document.getElementById('update_reports').style.display="none";
			document.getElementById('generalinfo').style.display="none";
			document.getElementById('reports_details').style.display="none";
		
	}
	function addtypediv1()
	{	
		document.getElementById('batch_allot').style.display="none";	
		document.getElementById('add_discussion').style.display="none";
		document.getElementById('selectyear_view').style.display="block";
		//document.getElementById('selectyear1').style.display="none";
		document.getElementById('typediv1').style.display="block";
		document.getElementById('typediv').style.display="none";
		document.getElementById('reset_div').style.display="none";
		document.getElementById('welcome').style.display="none";
		document.getElementById('viewinfo').style.display="none";
		document.getElementById('viewinfo').style.display="none";
			document.getElementById('update_reports').style.display="none";
			document.getElementById('generalinfo').style.display="none";
			document.getElementById('reports_details').style.display="none";
		
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
	function checkandsubmit()
	{
		if(document.getElementById('year').value != "default")
		{
			if(document.getElementById('semester').value != "default")
			{
				if(document.getElementById('branch').value != "default")
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
	function checkandsubmittype()
	{
		//alert("in function");
		if(document.getElementById('year1').value != "default")
		{
			if(document.getElementById('type1').value != "default")
			{
				document.forms["adddiscform"].submit();
			}
			else
			{
				alert("Select Type correctly");
			}
			
		}
		else
		{
			alert("Select Year correctly");
		}
	}
	function view_details()
	{
		document.getElementById('welcome').style.display="none";
		document.getElementById('reset_div').style.display="none";
		document.getElementById('viewinfo').style.display="block";
		document.getElementById('view_discussion').style.display="none";
		document.getElementById('welcome').style.display="none";
		document.getElementById('contact_div').style.display="none";
		document.getElementById('generalinfo').style.display="none";
		document.getElementById('reports_details').style.display="none";
		document.getElementById('update_reports').style.display="none";
		document.getElementById('viewinfo').style.display="none";
			document.getElementById('update_reports').style.display="none";
			document.getElementById('generalinfo').style.display="none";
			document.getElementById('reports_details').style.display="none";
	}
	function toggleTables(which)
	{
		
		if(which == "1") {
			document.getElementById('viewinfo').style.display="block";
			document.getElementById('generalinfo').style.display="block";
			document.getElementById('reports_details').style.display="none";
			document.getElementById('update_reports').style.display="none";
			
		document.getElementById('welcome').style.display="none";
		document.getElementById('reset_div').style.display="none";
		document.getElementById('view_discussion').style.display="none";
		document.getElementById('welcome').style.display="none";
		document.getElementById('contact_div').style.display="none";
		document.getElementById('generalinfo').style.display="none";
		document.getElementById('reports_details').style.display="none";
		document.getElementById('update_reports').style.display="none";
			
			
		}
		if(which == "2") {
			document.getElementById('viewinfo').style.display="block";
			document.getElementById('reports_details').style.display="block";
			document.getElementById('generalinfo').style.display="none";
			document.getElementById('update_reports').style.display="none";
			document.getElementById('welcome').style.display="none";
		document.getElementById('reset_div').style.display="none";
		document.getElementById('view_discussion').style.display="none";
		document.getElementById('welcome').style.display="none";
		document.getElementById('contact_div').style.display="none";
		document.getElementById('generalinfo').style.display="none";
		document.getElementById('reports_details').style.display="none";
		document.getElementById('update_reports').style.display="none";
			
		}
		if(which == "3") {
			document.getElementById('viewinfo').style.display="block";
			document.getElementById('update_reports').style.display="block";
			document.getElementById('generalinfo').style.display="none";
			document.getElementById('reports_details').style.display="none";
			document.getElementById('welcome').style.display="none";
		document.getElementById('reset_div').style.display="none";
		document.getElementById('view_discussion').style.display="none";
		document.getElementById('welcome').style.display="none";
		document.getElementById('contact_div').style.display="none";
		document.getElementById('generalinfo').style.display="none";
		document.getElementById('reports_details').style.display="none";
		document.getElementById('update_reports').style.display="none";
		}
	}
	</script>
</html>