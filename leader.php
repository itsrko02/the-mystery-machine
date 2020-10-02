<?php
	include "base.php";
	$_SESSION["result"]=mysqli_query($conn,"SELECT * FROM users ORDER BY level DESC,time;");
	if($_SESSION["result"])
	{
		$r=mysqli_num_rows($_SESSION["result"]);
	}
	else die("Some error occured, please try later");
?>	