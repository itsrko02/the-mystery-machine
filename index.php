<?php include "base.php";
	
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>The Mystery Machine | CES</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<style>
	.btn:hover
	{
		background-color:#ffffff;
		color:#26bb8e;
		border-color:#ffffff;
	}
	
	</style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#" target="_blank">
                    <span class="light">The Mystery Machine</span> | CES
                </a> 
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			
                <ul class="nav navbar-nav">
                   
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="#"data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="leaderboard.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Leaderboard</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#" target="_blank"><i class="fa fa-facebook-square" style="font-size:20px;"></i></a>
                    </li>
                </ul>
            </div>
             <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<div class="modal fade" id="suc" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center" style="color:#005300;">Success</h4>
        </div>
        <div class="modal-body">
          <p style="color:#A9A9A9;">You have been successfully registered. Please login using email and password.</p>
        </div>
				</div>
			</div>
			</div>
			
			<div class="modal fade" id="loggedin" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center" style="color:#009300;">Please wait...</h4>
        </div>
        <div class="modal-body">
          <p style="color:#A9A9A9;"><?php echo "You have successfully logged in. Please wait, you will be redirected automatically.."?></p>
        </div>
				</div>
			</div>
			</div>
			<div class="modal fade" id="loginfailed" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center" style="color:#ff0000;">Failed</h4>
        </div>
        <div class="modal-body">
          <p style="color:#A9A9A9;"><?php echo "Login failed. Please check your e-mail and password..."?></p>
        </div>
				</div>
			</div>
			</div>
			
			
			<div class="modal fade" id="mailnotfound" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-center" style="color:#ff0000;">Error</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p style="color:#A9A9A9;"><?php echo "Email address not found. Please register first..."?></p>
        </div>
				</div>
			</div>
			</div>
			<div class="modal fade" id="mailsent" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center" style="color:#009300;">Success</h4>
        </div>
        <div class="modal-body">
          <p style="color:#A9A9A9;">Email sent successfully. Please check your spam folder too.</p>
        </div>
				</div>
			</div>
			</div>
			
			<div class="modal fade" id="fail" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center" style="color:#ff0000;">Failure</h4>
        </div>
        <div class="modal-body">
          <p>Some error occurred. Please try again later or contact the admins.</p>
        </div>
				</div>
			</div>
			</div>
	<div id="login" class="modal fade" role="dialog">
	<div class="modal-dialog modal-md" style="color:#000000;">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:#5F5F5F;border-top-left-radius:4px;border-top-right-radius:4px">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#f5f5f0;"><span class="glyphicon glyphicon-log-in"></span> &nbsp;Login</h4>
      </div>
      <div class="modal-body">
	   <br/>
        <form class="form-horizontal" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<div class="form-group">
					<label class="control-label col-sm-4" for="email">Email: </label>
						<div class="col-sm-6">
						<input type="email" class="form-control" name="lemail" id="lemail" placeholder="Enter Email">
						</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Password: </label>
						<div class="col-sm-6">
						<input type="password" class="form-control" name="lpwd" id="lpwd" placeholder="Enter password">
						</div>
					</div>
					<a href="#" data-toggle="modal" data-target="#forgotpassword" onclick="$('#login').modal('hide');" style="margin-left:200px; color:#ff0000;">Forgot Password ? </a>
					<div class="form-group">
						<div class="col-sm-offset-8 col-sm-4">
						<button class="btn btn-primary btn-md" style="border-radius:5px;" onclick="chck()">Login</button>
						</div>
		</div>
		</form>
      </div>
    </div>
	</div>
	</div>
	<div id="forgotpassword" class="modal fade" role="dialog">
	<div class="modal-dialog modal-md" style="color:#000000;">
    <!-- Modal content-->
        <div class="modal-content">
      <div class="modal-header" style="background-color:#5F5F5F;border-top-left-radius:4px;border-top-right-radius:4px">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#f5f5f0;"><span class="glyphicon glyphicon-log-in"></span> &nbsp;Login</h4>
      </div>
      <div class="modal-body">
	   <br/>
        <form class="form-horizontal" role="form" action="fp.php" method="post">
					<div class="form-group">
					<label class="control-label col-sm-4" for="email">Email: </label>
						<div class="col-sm-6">
						<input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
						</div>
					</div>
            
            
            <div class="form-group">
					<label class="control-label col-sm-4" for="email">Phone: </label>
						<div class="col-sm-6">
						<input type="number" class="form-control" name="phone" id="phone" placeholder="Enter Phone No.">
						</div>
					</div>
            
           
            
            <div class="form-group">
					<label class="control-label col-sm-4" for="pass">New Password: </label>
						<div class="col-sm-6">
						<input type="password" class="form-control" name="pass" id="pass" placeholder="Enter New Password">
						</div>
					</div>
            
            <div class="form-group">
					<label class="control-label col-sm-4" for="cpass">Retype New Password: </label>
						<div class="col-sm-6">
						<input type="password" class="form-control" name="cpass" id="cpass" placeholder="Confirm New Password">
						</div>
					</div>
            
            
					<div class="form-group">
						<div class="col-sm-offset-8 col-sm-4">
						<button type="submit" name="fsubmit" id="fsubmit" class="btn btn-primary btn-md" style="border-radius:5px;">Submit</button>
						</div>
		</div>
		</form>
          

          
          
          
          
      </div>
    </div>
	</div>
	</div>
    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body" style="vertical-align:middle;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">The Mystery Machine</h1>
                        <p class="intro-text">Brought to you by Ennexus'20.</p>
                        <a href="#register" class="page-scroll"> <button class="btn btn-primary btn-lg" style="border-radius:5px;">Register</button></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About Section -->
    <section id="register" class="container content-section text-center" style="font-size:20px; padding-top:120px;">
		<div class="row" style=" padding-top:50px; background-image:url('img/im.jpg'); border-radius:7px;">
		<h1>Register</h1>
            <div class="col-lg-8 col-lg-offset-2">
				<form class="form-horizontal" role="form" action="index.php#register" method="post">
					<div class="form-group">
					<label class="control-label col-sm-4" for="name">Name : </label>
						<div class="col-sm-8">
						<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" pattern="[a-zA-Z0-9._@ ]+" required>
						</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-4" for="pwd">E-Mail : </label>
						<div class="col-sm-8">
						<input type="email" class="form-control" name="email" id="email" placeholder="Enter E-Mail" required><?php if($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['regist']) and mysqli_num_rows(mysqli_query($conn,"SELECT * from users where email='".$_POST["email"]."';"))) echo "<div class=\"alert alert-danger fade in\" style=\"font-size:16px;\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>E-Mail already taken</div>";?>
						</div>
					</div><div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Password : </label>
						<div class="col-sm-8">
						<input type="Password" class="form-control" name="pwd" id="pwd" placeholder="Enter Password" required>
						</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-4" for="cpwd">Retype Password : </label>
						<div class="col-sm-8">
						<input type="Password" class="form-control" name="cpwd" id="cpwd" placeholder="Retype Password" required><?php if($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['regist']) and $_POST["pwd"]!=$_POST["cpwd"]) echo "<div class=\"alert alert-danger fade in\" style=\"font-size:16px;\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>Passwords do not match</div>";?>
						</div>
					</div>
                    
                    <div class="form-group">
					<label class="control-label col-sm-4" for="phone">Phone No. : </label>
						<div class="col-sm-8">
						<input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Phone No." pattern="[a-zA-Z0-9._@-]+" required>
						</div>
					</div>
                    
					<div class="form-group">
					<label class="control-label col-sm-4" for="college">College : </label>
						<div class="col-sm-8">
						<input type="text" class="form-control" id="college" name="college" placeholder="Enter College" pattern="[a-zA-Z0-9._@ ]+" required>
						</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-4" for="branch">Branch : </label>
						<div class="col-sm-8">
						<input type="text" class="form-control" id="branch" name="branch" placeholder="Enter Branch" pattern="[a-zA-Z0-9._@-]+" required>
						</div>
					</div>
					<div>
					<label class="control-label col-sm-4" for="year">Year : </label>
						<div class="col-sm-1" style="color:#808080;">
						<select name="year" id="year" style="width:250%;border-radius:4px;">
							<option value="1" selected>I</option>
							<option value="2">II</option>
							<option value="3">III</option>
							<option value="4">IV</option>
						</select>
						</div>
					</div>
					<br/><br/>
					<div class="form-group">
					<label class="control-label col-sm-4" for="captcha">Captcha : </label>
						<div class="col-sm-1">
						<img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'>
						</div>
						<div class="col-sm-3 col-lg-offset-1">
						<input type="text" class="form-control" id="captcha_code" name="captcha_code" placeholder="Enter Captcha" pattern="[a-zA-Z0-9._@-]+" title="Please enter a valid captcha" required>
						</div>
						<div class="col-sm-3">
						<p style="font-size:16px;"><a href='javascript: refreshCaptcha();'>Refresh</a> captcha.</p>
						</div>
						
					</div>
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-8">
						<br/>
						<button type="submit" id="regist" name="regist" class="btn btn-primary btn-lg" style="border-radius:5px;">Submit</button>
					</div>
		</div>
				</form>
			</div>
        </div>
    </section>
<br/><br/>
    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Ennexus 2020</p>
        </div>
    </footer>
	<script type='text/javascript'>
function refreshCaptcha(){
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
	<script>
$(document).ready(function(){
    $('#cpwd').keyup(function(){
        if($('#pwd').val()!=$('#cpwd').val())
			jalert('error');
    });
});
</script>
	<?php
	
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	if(!empty($_POST["lemail"]) and !empty($_POST["lpwd"]))
	{
		$email=$_POST["lemail"];
		$password=md5($_POST["lpwd"]);
		$result=mysqli_query($conn,"SELECT * FROM users WHERE email='".$email."' AND password='".$password."';");
		if($result and mysqli_num_rows($result)==1)
		{
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			$_SESSION['LOGGEDIN']=1;
			$_SESSION['email']=$email;
			$_SESSION['level']=$row['level'];
			$_SESSION['nr']=$row['notification'];
			echo '<script>window.onload=function(){$(\'#loggedin\').modal();}</script>';
			echo "<meta content=\"2;level".$_SESSION['level'].".php\" http-equiv=\"refresh\">";
		}
		else echo'<script>window.onload=function(){$(\'#loginfailed\').modal();}</script>';
	}
}	
?>
	<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['regist']))
{
	if((!empty($_POST["name"])) and (!empty($_POST["email"])) and (!empty($_POST["pwd"])) and (!empty($_POST["phone"])) and (!empty($_POST["college"])) and (!empty($_POST["branch"])) and (!empty($_POST["year"])) and ($_POST["pwd"]==$_POST["cpwd"]) and !empty($_SESSION['captcha_code']) and strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code'])== 0)
	{
		$email=$_POST["email"];
		$password=md5($_POST["pwd"]);
		$result=mysqli_query($conn,"SELECT * FROM users WHERE email='".$email."';");
		if($result and mysqli_num_rows($result)==0)
		{
			$q="INSERT INTO users values('".$_POST["name"]."','".$_POST["email"]."','".$password."','".$_POST["phone"]."','".$_POST["college"]."','".$_POST["branch"]."',".$_POST["year"].",0,0,0,0);";
			if(mysqli_query($conn,$q))
			echo '<script>window.onload=function(){$(\'#suc\').modal();}</script>';
			else echo mysqli_error($conn);
		}
	}
}
?>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
   
    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
</body>
</html>