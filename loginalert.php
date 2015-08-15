<?php 
?>
<html>
<head>
<title>Login Page</title>
 <style type="text/css">
#head {
	position:absolute;
	top: px;
	left:80;
	color:red;
	background-color:;
}
ul.ppt {
	position: relative;
}
.ppt li {
	list-style-type:none;
	position: absolute;
	top:0;
	left: 0px;
}
.ppt img {
	border: 0px solid #e7e7e7;
	padding: 0px;
	background-color: ;
	margin: 0 3px 0 0;
	width: 1368px;
	height: 500px;	
}
#center1 {
    display: inline-block;
	position: absolute;
	left:-5px;
	top:80px;
    margin: 5 auto;
	border: 5 px solid #e7e7e7;
	margin: 0 3px 0 0;
    width:1345px;
    height: 400px;
    background: ;
}
#textarea{
	position: absolute;
	top:200px;
	left:500px;
    width:550px;
    height: 350px;
    background-color:white;
	border-radius:25px;
}
#pid {
	border: 1px solid #a1a1a1;
	border-radius:5px;
	width:200;
	height:30;
}
#passwd {
	border: 1px solid #a1a1a1;
	border-radius:5px;
	width:200;
	height:30;
}
#foot {
	position:absolute;
	top:630px;
	left:400px;
	font-size:15px;
}
.error
{
	color:red;
	font-style:italic;
	font-size:15px;
	visibility:hidden;
}
.error1
{
	color:red;
	font-style:italic;
	font-size:15px;
	
}
</style>
</head>
<body>
<?php
	
	if(isset($_POST['submit1']))
	{
		if(isset($_REQUEST['pid']))
		{
			if(isset($_REQUEST["pass"]))
			{
				session_start();
				include 'connection.php';
				header("Cache-Control: no-cache, must-revalidate");
				$pinno = $_POST['pid'];
				$password = $_POST['pass'];
				$_SESSION['uid']= $pinno;
				$result=mysql_query("SELECT * FROM users_tb where uid='$pinno'") or die(" Not able open the table");
				$flag=0;
				while($row=mysql_fetch_array($result))
				{
					if(($row['uid']==$pinno) && ($row['passwd']==$password) && ($row['type']=="student"))
					{
						$_SESSION['uname']=$row['uname'];
						$flag=1;
						header("location:studenthome.php");
					}
					elseif(($row['uid']==$pinno) && ($row['passwd']==$password) && ($row['type']=="staff"))
					{
						$_SESSION['uname']=$row['uname'];
						$flag=1;
						header("location:staffhome.php");
					}
					elseif(($row['uid']==$pinno) && ($row['passwd']==$password) && ($row['type']=="admin"))
					{
						$_SESSION['uname']=$row['uname'];
						$flag=1;
						header("location:scsadmin.php");
					}
					else
					{
						
					}
					
				}
				if($flag == 0)
				{
					header("location:loginalert.php");
				}
				
			}
			else
			{
				header("location:loginalert.php");
			}
		}
		else
		{
			header("location:loginalert.php");
		}
	}
	else
	{
?>
	<div id="head">
		<font face="verdana" size="px"><h1>Student Counselling System</h1>
	</div>        
	<div id="center1">
		<ul class="ppt">
			<li><img src="images/cb1.jpg" alt=""></img></li>
		<li><img src="images/cb2.jpg" alt=""></img></li>
		<li><img src="images/cb3.jpg" alt=""></img></li>
		<li><img src="images/cb4.jpg" alt=""></img></li>
		<li><img src="images/cb5.jpg" alt=""></img></li>
		</ul>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript">
		$('.ppt li:gt(0)').hide();
		$('.ppt li:last').addClass('last');
		var cur = $('.ppt li:first');
		function animate() {
			cur.fadeOut( 1000 );
			if ( cur.attr('class') == 'last' )
				cur = $('.ppt li:first');
			else
				cur = cur.next();
				cur.fadeIn( 1000 );
		}
		$(function() {
			setInterval( "animate()", 3000 );
		} );
		function validate()
		{
			//alert("in validate");
			var uname=document.getElementById("pid");
			var password=document.getElementById("passwd");
			
			if(uname.value == "")
			{ 
				document.getElementById('nameerror').style.visibility="visible";
				document.getElementById('loginerror').style.visibility="hidden";
				return false;
			}
			else
			{
				document.getElementById('nameerror').style.visibility="hidden";
				//return true;
			}
			if(password.value == "")
			{ 
				document.getElementById('passerror').style.visibility="visible";
				document.getElementById('loginerror').style.visibility="hidden";
				return false;
			}
			else
			{
				document.getElementById('passerror').style.visibility="hidden";
				//return true;
			}
			return true;
		}
		function showerror()
		{
			alert("in error");
			document.getElementById("loginerror").style.visibility="visible";
		}
	</script>
	</div>     
	<div id="textarea" >
		<center><h4>Sign in</h4>
		<p id="loginerror" class="error1">User doesn't exists</p>
			<hr color="#E0E0E0">
			<div id="tablesubheads" >
			<form name="myform" action="scslogin.php" method="post" onsubmit="return validate()">
				<table style="width:100%" cellspacing="15">
				<tr>
				<td> User Name :</td>
				<td><input id="pid" type="text" name="pid" maxlength="16" placeholder="  User Name" </td>
				<td><span id="nameerror" class="error">This is required</span></td>
				</tr>
				<tr>
				<td> Password &nbsp; : </td>
				<td width="200"><input id="passwd" type="password" name="pass" maxlength="16" placeholder="  Password"</td>
				<td><span id="passerror" class="error">This is required</span></td>
				</tr></table>
				<table cellpadding="10">
				<tr>
				<td> <input type="checkbox" name="vehicle" value="Bike"> Remember Me<br> </td>
				<td width="200"><input id="pid" type="submit" name="submit1" value="Login" style="background-color:lightgreen" maxlength="10"</td>
				</tr>
				</table>
				<hr color="#E0E0E0">
			</form>
		</center>
	</div>
	</div>  
	<div id="foot">
	</div>
	<?php 
	}
	?>
	</body>
</html>	