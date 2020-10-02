<?php
	include "base.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	if(!empty($_POST["lemail"]) and !empty($_POST["lpwd"]))
	{
		$email=$_POST["lemail"];
		$password=$_POST["lpwd"];
		$a='SELECT * FROM users WHERE email="'.$email.'" AND password="'.$password.'";';
		echo $a;
		$result=mysqli_query($conn,$a);
		if($result and mysqli_num_rows($result)==1)
		{
			echo "hiii 11";
			$_SESSION['LOGGEDIN']=1;
			$_SESSION['email']=$email;
			$_SESSION['level']=0;
			echo "You have successfully logged in. You will be redirected automatically.. or <a href=\"level".$_SESSION['level'].".php\">Click here</a>";
			echo "<meta content=\"2;level".$_SESSION['level'].".php\" http-equiv=\"refresh\">";
		}
		 
	}
}	
?>