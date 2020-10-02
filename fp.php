<?php

 include 'config.php';
 ?>
 
 <html>

 <body bgcolor="black";>
 


<?php

   
if(isset($_POST['fsubmit'])){
	
	$email = $_POST['email'];
    $phone = $_POST['phone'];
	$pass = $_POST['pass'];
	$cpass = $_POST ['cpass'];
	
	if($pass == $cpass ){
		
		
		$query  ="select * from users where email='$email' and phone='$phone'";
		
		$query_check = mysqli_query($con,$query);
		
		if($query_check){
			
			
	       if(mysqli_num_rows($query_check) > 0){
			   
			   $query1 ="update users set password=md5('$pass') where email='$email' and phone='$phone'";
			   $query_run = mysqli_query($con,$query1);
			   
			   if($query_run){
				   echo "
				   <script>
				   
				   alert('Password updated');
				   window.location.href='index.php';
				   
				   </script>
				   
				   
				   ";
				   
				   
			   }
			   else{
				   
				  echo "
				   <script>
				   
				   alert('Password not updated try again !!!');
				   window.location.href='index.php';
				   
				   </script>
				   
				   
				   ";
			   }
			   
			   
			   
		   }else {
			   
			   
		 echo "
				   <script>
				   
				   alert('User not found! Register first!');
				   window.location.href='index.php';
				   
				   </script>
				   
				   
				   ";
		   }
			
			
			
			
			
		}
		else{
			
		 echo "
				   <script>
				   
				   alert('Email Query not working ');
				   window.location.href='index.php';
				   
				   </script>
				   
				   
				   ";
		}
			
	}else {
		
		 echo "
				   <script>
				   
				   alert('Password & Confirm Password do not match');
				   window.location.href='index.php';
				   
				   </script>
				   
				   
				   ";
	}	
	
}
else{

}
?>

 
 
 </body>
 </html>