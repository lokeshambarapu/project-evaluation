<html>
<head>
	<title>Project Mangement System</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body background="bg.jpg" class="body">
<?php
	if(isset($_REQUEST["submit"]))
	{
	?>
	<table>
	<tr>
	<td><img style='height: 95px; width: 130px; margin-right: 250px;'   src="snist_logo.jpg" alt="snist logo"></td>
	<td><h2><font color="7CFC00" >Sreenidhi Institute Of Science & Technology</h2>
	<h2><center>Project Management System</center></h2>
	<td></td>
	</tr>
	</table>
	<table>
	<tr>
	<td>
	<div class="content" style="background-color:yellow;height:30px;width:970px;margin-left:100px;margin-right:220px;">
	<marquee><font color="" > Welcome to  </marquee>
	</div>
	</td>
	</tr>

	</table>
	<table style="margin-left: 100px">
	<tr>
	<td >
		<header class="mainHeader" margin-left: 180px>
		<nav ><ul>
			<li><a href="studenthome.php">Home</a></li>
			<li><a href="studentdetails.php">View Details</a></li>
			<li><a href="viewprogress.php">View Progress</a></li>
			<li class="active"><a href="upload.php">Upload Progress</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul></nav>
	</header>
</td>
</tr>
</table>
<table style="margin-left: 25px">
<tr>
<td>
<div id="content" style="background-color:#EEEEEE;height:400px;width:800px;float:left;margin-left:80px;">
	<center><div style="width:50%;">
		<?php
	
		include "connection.php";
		$pinno=$_SESSION['pin'];
		$date=date("d-m-y");
		$image =addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name=addslashes($_FILES['image']['name']);
		mysql_query("insert into files values('','$date','$pinno','$image_name','$image')") or die("error");
		header("location:uploadalert.php");
		?>
		</table>
	</fieldset>
	</div>
	</center>
</div>
</td>
<td>
<div id="menu" style="background-color:cyan;height:400px;width:300px;float:left;margin-left: 10px">
<aside class="top-sidebar" style="background-color:cyan;">
	<article>
		<ul class="menu">
			<li><h3><a href="http://www.sreenidhi.edu.in/contact_us.aspx" target="_blank">Contact us</a></h3></li>
			<li><h3><a href="http://www.sreenidhi.edu.in/About_SNIST.aspx" target="_blank">About us</a></h3></li>
</ul>

			
	</article>
</aside>
</div>
</td>
</tr>
</table>
</center>
<?php
	}
	else
	{
	?>
<table>
<tr>
<td><img style='height: 95px; width: 130px; margin-right: 250px;'   src="snist_logo.jpg" alt="snist logo"></td>
<td><h2><font color="7CFC00" >Sreenidhi Institute Of Science & Technology</h2>
<h2><center>Project Management System</center></h2>
<td></td>
</tr>
</table>
<table>
<tr>
<td>
<div class="content" style="background-color:yellow;height:30px;width:970px;margin-left:100px;margin-right:220px;">
<marquee><font color="" > Welcome to <?php session_start(); echo $_SESSION['stdname']; ?> </marquee>
</div>
</td>
</tr>

</table>
<table style="margin-left: 100px">
<tr>
<td >
	<header class="mainHeader" margin-left: 180px>
		<nav ><ul>
			<li><a href="studenthome.php">Home</a></li>
			<li><a href="studentdetails.php">View Details</a></li>
			<li><a href="viewprogress.php">View Progress</a></li>
			<li class="active"><a href="upload.php">Upload Progress</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul></nav>
	</header>
</td>
</tr>
</table>
<table style="margin-left: 25px">
<tr>
<td>
<div id="content" style="background-color:#EEEEEE;height:400px;width:800px;float:left;margin-left:80px;">
	<center><div style="width:80%;">
	<fieldset>
		<legend style="color:brown; font-weightbold;">
			<h2><font color="CC0099" >Upload your files here</h2>
		</legend>
		<table>
			<form action="upload.php" method="POST" enctype="multipart/form-data">
			<tr><td>Student Pin </td><td>: <input type="text" name="studentpin"></td></tr>
			<tr><td>Project Incharge Name </td><td>: <input type="text" name="inchargename" ></td></tr>
			<tr><td>Mentor Name </td><td>: <input type="text" name="mentorname" ></td></tr>
			<tr><td>File  </td><td>: <input type="file" name="image"></td></tr>
			<tr><td></td><td margin-left="10"> <input type="submit" name="submit" value="submit"></td></tr>
		</table>
	</fieldset>
	</div>
	</center>
</div>
</td>
<td>
<div id="menu" style="background-color:cyan;height:400px;width:300px;float:left;margin-left: 10px">
<aside class="top-sidebar" style="background-color:cyan;">
	<article>
		<ul class="menu">
			<br><br><br><li><h3><a href="http://www.sreenidhi.edu.in/About_SNIST.aspx" target="_blank">About us</a></h3></li>
			<li><h3><a href="http://www.sreenidhi.edu.in/contact_us.aspx" target="_blank">Contact us</a></h3></li>
</ul>

			
	</article>
</aside>
</div>
</td>
</tr>
</table>
</center>
</body>
</html>
<?php
}
?>