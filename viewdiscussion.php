<?php
	session_start();
	include "connection.php";
	
?>

<html>
	<head>
		<title>Student Counselling System</title> 
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" /> 

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
	#view_discussion{
		background-color:#574d41;
		display:;
		position:absolute;
		top:200px;
		left:198px;
		width:1005px;
		height:px;
		border-radius:25px;
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
			top: 150px;
			left: 195px;
			width: 1010px;
			height: auto;
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
		height: 20px;
		width: 120px;
		text-align: center;
		background-color: Transparent;
	}
	/*Make the parent of sub-menu relative*/
	ul#menu li {
		position: relative;
	}
	table{
		color:black;
	}
	#subpid {
		border: 1px solid #a1a1a1;
		border-radius:5px;
		width:110px;
		height:30;
		background-color:lightgreen;
	}

	#staffimage
	{
		width:95px;
		height:100px;
		position:absolute;
		top:5;
		left:900px;
		border: 1px solid #a1a1a1;
		border-radius:10px;
		
	}
	th{ 
		background: #9DE6FF;
	}
	 .view tr:nth-child(odd){ 
		background: #D8D8D8;
	}
	.view tr:nth-child(even){
		background: white;
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
						<li><a onclick=printPage()>Print</a></li>
						<li><a href="staffhome.php?viewdisc=1" >Back</a></li>
						
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
			<li><a href="staffhome.php?viewdisc=1"><input id="subpid" type="button" value="Back"/></a></li>
			<li><a href="logout.php"><input id="subpid" type="button" value="Logout"/></a></li>
		</ul>
	</div>
	-->
	<?php		
		$id=$_SESSION['uid'];
		$year=$_POST['year1'];
		//$type=$_POST['type1'];	
		
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
			echo "<div id='view_discussion'>
				</br>
				<center><h2><font color='white' >Individual Discussions Held</h2>
				<hr color='#E0E0E0'>
				</br>
				<table class='CSSTableGenerator' width='80%' align='center'  cellspacing='5'  style='background-color:white;' >
				<tr>";
			echo "<tr>
				<th> Roll Number </th><th> Date(D/M/Y) </th><th>Topic Name</th><th>Marks</th><th>Remarks</th>
				</tr>";
			while($i<=$cnt)
			{
				$row=mysql_fetch_array($result);
			
				$rno=$row['sid'];
				$result1=mysql_query("select * from discussions_tb where rollno='$rno'") or die(mysql_error());
				while($row1=mysql_fetch_array($result1) )
				{
					echo "<tr>
						<td>".$row1['rollno']."</td><td>".$row1['date']."</td><td> ".$row1['topic']."</td><td> ".$row1['marks']."</td><td> ".$row1['remarks']."</td>
						</tr>";
				}
				$i++;
			}
		}
		else
		{
			$batchcnt= $_POST['viewbatch'];
			$count=count($batchcnt);
			
			echo "<div id='view_discussion'>
				</br>
				<center><h2><font color='white' >Batch wise Discussions Held</font></h2>
				<hr color='#E0E0E0'>
				</br>
				<table width='90%' class='CSSTableGenerator' align='center'   style='background-color:white ;' >
				<tr>";
			echo "<tr>
				<th> Batch No </th><th>  Date </th><th> Roll No </th><th>Topic Name</th><th>Marks</th><th>Remarks</th>
				</tr>";
			
			
				
			
			for($i=0;$i<$count;$i++)
			{
				$batch=$batchcnt[$i];
				//echo $batch;
												
				$students=mysql_query("SELECT sid,sname from stddetails_tb where sid in(select sid from allotment where fid='$id' && batchno='$batch') && current_year='$year' && semester='$semvalue'");
				$cnt=mysql_num_rows($students);
				for($j=0;$j<$cnt;$j++)
				{
					$row2=mysql_fetch_array($students);
					$pin=$row2['sid'];
					$discresult=mysql_query("SELECT * FROM discussions_tb WHERE rollno='$pin'") or die("Error in viewing");
					
					while($discs=mysql_fetch_array($discresult) )
					{
						echo "<tr>
							<td>".$batch."</td><td>".$discs['date']."</td><td>".$discs['rollno']."</td><td> ".$discs['topic']."</td><td> ".$discs['marks']."</td><td> ".$discs['remarks']."</td>
							</tr>";
					}
				}
			}		
				
			
		}
		echo "</table> <br/></div>";
		
		//header("location:staffhome.php");
		
		
	?>
	<script>
function printPage()
{
   var html="<html>";
   html+= document.getElementById("view_discussion").innerHTML;

   html+="</html>";

   var printWin = window.open('','','left=0,top=0,width=1,height=1,toolbar=0,scrollbars=0,status  =0');
   printWin.document.write(html);
   printWin.document.close();
   printWin.focus();
   printWin.print();
   printWin.close();
}
</script>
</html>