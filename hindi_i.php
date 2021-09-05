<?php 
						         $z= mt_rand(1,20);
$vid_sql= "SELECT * FROM hindi Where id=".$z;
	$vid_que=mysqli_query($dbconnect,$vid_sql);
	$vid_rs=mysqli_fetch_assoc($vid_que);								 
						
						
						?>