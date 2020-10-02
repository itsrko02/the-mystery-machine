<?php include "base.php" ?>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	if(isset($_POST["submit"]))
	{
			$_SESSION['level']=1;
			$res=mysqli_query($conn,"SELECT level from users where email='".$_SESSION['email']."';");
			$row1=mysqli_fetch_array($res,MYSQLI_ASSOC);
			if($_SESSION['level']>$row1['level'])
				mysqli_query($conn,"UPDATE users set level='".$_SESSION['level']."',time=now() where email='".$_SESSION['email']."';");
			echo "<meta content=\"0;level".$_SESSION['level'].".php\" http-equiv=\"refresh\">";
		 
	}
}	
?>

<?php if(!isset($_SESSION['level']))
	die("<h1>access denied</h1>");
	else {
?>
<!DOCTYPE html>
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
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	@media screen and (min-width: 768px) { 
  .modal:before {
    display: inline-block;
    vertical-align: middle;
    content: " ";
    height: 100%;
	}
	}
	.modal-dialog {
	display: inline-block;
	text-align: left;
	vertical-align: middle;
	}
	</style>
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
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li>
                        <a class="page-scroll" href="#" target="_blank"><i class="fa fa-facebook-square" style="font-size:20px;"></i></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="leaderboard.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Leaderboard</a>
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<header class="intro">
        <div class="intro-body">
            <div class="container">
				<div class="row">
					<div class="col-lg-12">
					<div class="row">
					<div class="col-lg-12">
					<img class="img-responsive" src="img/ces-logo.jpg" style="border-radius:25px;padding:0px;">
					</div>
					</div>
					<br/>
					<div class="row">
					<div class="col-sm-12">
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
					<button type="submit" name="submit" id="submit" class="btn btn-primary btn-MD" style="border-radius:5px;">Start <span class="glyphicon glyphicon-arrow-right"></span> </button>
					</form>
					</div></div></div>
					
				</div>
			</div>
		</div>
    </header>
	 <footer>
        <div class="container text-center">
            <p>Copyright &copy; Ennexus 2020</p>
        </div>
    </footer>
	    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/grayscale.js"></script>
	<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover({
    container: 'body'
	});   
});
</script>
</body>
</html>
<?php } ?>