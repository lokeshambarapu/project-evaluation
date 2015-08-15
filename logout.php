<?php
session_start();
unset($_SESSION);
header("Cache-Control: no-cache, must-revalidate");
if(session_destroy())
{
	header("Location:scslogin.php");
}
?>