<?php
	include "base.php";
	
	if(!isset($_SESSION["adminLOGGEDIN"]))
		die("Access Denied");
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) 
{
	if(!empty($_POST["ans"]) && !empty($_POST["level"]))
	{
		 $result=mysqli_query($conn,"INSERT INTO levels values('".$_POST["level"]."','".md5($_POST["ans"])."');");
		
	if($result)
		echo '<script>alert("Success");</script>';
	else echo '<script>alert("Error");</script>';
	}
	else echo '<script>alert("Empty");</script>';
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["hintb"])) 
{
	if(!empty($_POST["hintn"]) && !empty($_POST["hint"]))
	{
		 $result=mysqli_query($conn,"INSERT INTO hints values('".$_POST["levelh"]."','".$_POST["hintn"]."','".$_POST["hint"]."');");
	if($result)
		echo '<script>alert("Success");</script>';
	else echo '<script>alert("Error");</script>';
	}
	else echo "empty";
}

	if($_SESSION["adminLOGGEDIN"]!=1)
		die("Access Denied");
	else
	{
?>
<html>
<head>

<link href="css/bootstrap.min.css" rel="stylesheet">
<title>AP</title></head>
<body>
<br/><br/><br/>

<div class="row">
<div class="col-lg-5" style="margin-left:5%">
<h1>Update Levels</h1>
<form class="form-horizontal" action="ap.php" method="POST">
<h4>
  Level:
  <input type="text" name="level" id="level"><br>
  <br>
  Answer: 
  <input type="text" name="ans" id="ans">
  <br><br>
  <input type="submit" name="submit" id="submit" value="Update">
  </h4>
</form>
</div>
<div class="col-lg-5" style="margin-left:5%">

<h1>Update Hints</h1>
<form action="ap.php" method="POST">
<h4>
  Level:
  <input type="text" name="levelh" id="levelh"><br>
  <br>
  Hint No.: 
  <input type="text" name="hintn" id="hintn">
  <br><br>
  Hint: 
  <input type="text" name="hint" id="hint">
  <br><br>
  <input type="submit" name="hintb"id="hintb" value="Update">
  </h4>
</form>
</div></div><br/>
<a href="logout.php" style="margin:25px;"><button>Logout</button></a>
</body>
</html>
	<?php } ?>