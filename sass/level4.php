<?php include "base.php" ?>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	if(!empty($_POST["ans"]) and isset($_POST["submit"]))
	{
		$result=mysqli_query($conn,"SELECT * from levels where level='4';"); 
	if($result and mysqli_num_rows($result)==1)
	{
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC); 
		if($row["ans"]==md5($_POST["ans"]))
		{
			$_SESSION['level']=5;
			$res=mysqli_query($conn,"SELECT level from users where email='".$_SESSION['email']."';");
			$row1=mysqli_fetch_array($res,MYSQLI_ASSOC);
			if($_SESSION['level']>$row1['level'])
				mysqli_query($conn,"UPDATE users set level='".$_SESSION['level']."',time=".date("Y-m-d h:m:s",time())." where email='".$_SESSION['email']."';");
			echo "<meta content=\"0;level".$_SESSION['level'].".php\" http-equiv=\"refresh\">";
		}
		 
	}
}	}
?>

<?php if(!isset($_SESSION['level']))
	die("<h1>access denied</h1>");
else if($_SESSION['level']<4)
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
	
	<title>Turing | Robotics Club</title>

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
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="http://www.roboticsclub.mmmut.ac.in" target="_blank">
                    <span class="light">Turing</span> | Robotics Club
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
                        <a class="page-scroll" href="https://www.facebook.com/Turing-886933888023346/" target="_blank"><i class="fa fa-facebook-square" style="font-size:20px;"></i></a>
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
					<div class="col-lg-9">
					<div class="row">
					<div class="col-lg-12">
					<img class="img-responsive" src="img/268.jpg" style="border-radius:25px;padding:0px;">
					</div>
					</div>
					<br/>
					<div class="row">
					<div class="col-sm-12">
					<form class="form-inline" role="form" method="post">
									<div class="form-group">
											<input type="text" class="form-control" id="ans" name="ans" placeholder="Enter Answer" pattern="[a-zA-Z0-9._@ ]+" required>
									</div>
										<button type="submit" name="submit" id="submit" class="btn btn-primary btn-sm" style="border-radius:5px;">Submit</button>
					</form>
					</div></div></div>
					<div class="col-sm-3">
					<br/><br/><br/><br/><br/><br/><br/><br/>
					<?php
					$hint=0;
					$result=mysqli_query($conn,"SELECT * from hints where level='4' order by hintn");
					if($result)
						$hint=mysqli_num_rows($result);
					if($hint>=1)
					{
						$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
						echo '<div class="row">
							<div class="col-sm-8 col-lg-offset-4">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hint1" style="width:250px; border-radius:5px;">Hint 1</button>
							</div>
							</div>
							<div id="hint1" class="modal fade text-center" role="dialog">
								<div class="modal-dialog modal-md" style="color:#000000;">
									<div class="modal-content">
										<div class="modal-header" style="background-color:#5F5F5F;border-top-left-radius:4px;border-top-right-radius:4px">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title" style="color:#f5f5f0;"><span class="glyphicon glyphicon-gift"></span> Hint 1</h4>
										</div>
										<div class="modal-body">
										<br/><p style="color:A9A9A9;">'.$row["hint"].
										'</div>
									</div>
								</div>
							  </div> <br/>';
					}
					if($hint>=2)
					{
						$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
						echo '<div class="row">
							<div class="col-sm-8 col-lg-offset-4">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hint2" style="width:250px; border-radius:5px;">Hint 2</button>
							</div>
							</div>
							<div id="hint2" class="modal fade text-center" role="dialog">
								<div class="modal-dialog modal-md" style="color:#000000;">
									<div class="modal-content">
										<div class="modal-header" style="background-color:#5F5F5F;border-top-left-radius:4px;border-top-right-radius:4px">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title" style="color:#f5f5f0;"><span class="glyphicon glyphicon-gift"></span> Hint 2</h4>
										</div>
										<div class="modal-body">
										<br/><p style="color:A9A9A9;">'.$row["hint"].
										'</div>
									</div>
								</div>
							  </div> <br/>';
					}
					if($hint>=3)
					{
						$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
						echo '<div class="row">
							<div class="col-sm-8 col-lg-offset-4">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hint3" style="width:250px; border-radius:5px;">Hint 3</button>
							</div>
							</div>
							<div id="hint3" class="modal fade text-center" role="dialog">
								<div class="modal-dialog modal-md" style="color:#000000;">
									<div class="modal-content">
										<div class="modal-header" style="background-color:#5F5F5F;border-top-left-radius:4px;border-top-right-radius:4px">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title" style="color:#f5f5f0;"><span class="glyphicon glyphicon-gift"></span> Hint 3</h4>
										</div>
										<div class="modal-body">
										<br/><p style="color:A9A9A9;">'.$row["hint"].
										'</div>
									</div>
								</div>
							  </div> <br/>';
					}
					if($hint>=4)
					{
						$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
						echo '<div class="row">
							<div class="col-sm-8 col-lg-offset-4">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hint4" style="width:250px; border-radius:5px;">Hint 4</button>
							</div>
							</div>
							<div id="hint4" class="modal fade text-center" role="dialog">
								<div class="modal-dialog modal-md" style="color:#000000;">
									<div class="modal-content">
										<div class="modal-header" style="background-color:#5F5F5F;border-top-left-radius:4px;border-top-right-radius:4px">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title" style="color:#f5f5f0;"><span class="glyphicon glyphicon-gift"></span> Hint 4</h4>
										</div>
										<div class="modal-body">
										<br/><p style="color:A9A9A9;">'.$row["hint"].
										'</div>
									</div>
								</div>
							  </div> <br/>';
					}
					if($hint>=5)
					{
						$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
						echo '<div class="row">
							<div class="col-sm-8 col-lg-offset-4">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hint5" style="width:250px; border-radius:5px;">Hint 5</button>
							</div>
							</div>
							<div id="hint5" class="modal fade text-center" role="dialog">
								<div class="modal-dialog modal-md" style="color:#000000;">
									<div class="modal-content">
										<div class="modal-header" style="background-color:#5F5F5F;border-top-left-radius:4px;border-top-right-radius:4px">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title" style="color:#f5f5f0;"><span class="glyphicon glyphicon-gift"></span> Hint 5</h4>
										</div>
										<div class="modal-body">
										<br/><p style="color:A9A9A9;">'.$row["hint"].
										'</div>
									</div>
								</div>
							  </div> <br/>';
					}
					
					?>
					</div>
				</div>
			</div>
		</div>
    </header>
	 <footer>
        <div class="container text-center">
            <p>Copyright &copy; Robotics Club 2016</p>
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