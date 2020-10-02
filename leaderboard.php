<?php
	include "base.php";
	$_SESSION["result"]=mysqli_query($conn,"SELECT * FROM users ORDER BY level DESC,time;");
	if($_SESSION["result"])
	{
		$r=mysqli_num_rows($_SESSION["result"]);
	}
	else die("Some error occured, please try later");
	$t=1;
	echo '
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ennexus | Leaderboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		.table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
		background-color: #000000;
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
                    <span class="light">The Mystery Machine</span> | Ennexus
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
                        <a class="page-scroll" href="index.php">Home</a>
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
				<div class="col-xs-12">
					<div class="table-responsive">
					<table summary="This table shows how to create responsive tables using Bootstraps default functionality" class="table table-hover text-left">
					<thead>
					<tr style="font-size:20px;">
					<th>Rank</th>
					<th>Name</th>
					<th>College</th>
					<th>Year</th>
					<th>Branch</th>
					<th>Level</th>
					</tr>
					</thead>
					<tbody style="font-size:17px;">';
							for($i=0;$i<1000;$i++)
							if($r)
							{	$row=mysqli_fetch_array($_SESSION["result"],MYSQLI_ASSOC);
						echo'<tr>
						<td>'.$t.'</td>
						<td>'.$row["name"].'</td>
						<td>'.$row["college"].'</td>
						<td>'.$row["year"].'</td>
						<td>'.$row["branch"].'</td>
						<td>'.$row["level"].'</td>
						</tr>';
						$r--;
						$t++;
							}
					echo '</tbody>
   
				</table>
				</div>
				</div>
				</div>
				
			</div>
		</div>

</header>
	
	    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
	<script>
$(document).ready(function(){
    $(\'[data-toggle="popover"]\').popover({
    container: \'body\'
	});   
});
</script>
<script>
    $(document).ready(
            function() {
                setInterval(function() {
                    var randomnumber = <?php echo "70"; ?>;
                    $(\'#notification\').text(randomnumber);
                }, 3000);
            });
</script>
</body>
</html>';
?>