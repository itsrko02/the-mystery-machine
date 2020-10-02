<?php
 $result=mysqli_query($conn,"SELECT * FROM notification order by timestamp");
 $k=0;
 if($result)
	$k=mysqli_num_rows($result);
	while (k>0){
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 echo '<div class="alert alert-success">
  '.$row["notification"].'
</div>';
$k--;
}
?>