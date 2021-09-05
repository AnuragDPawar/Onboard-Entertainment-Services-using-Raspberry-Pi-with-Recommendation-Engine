<?php
session_start();
$userid = $_SESSION['userid'];
$user_profile = $_SESSION['user_profile'];
?>

<!DOCTYPE HTML>
<html>
<?php include("header.php");
$dbconnect = mysqli_connect("localhost","root","","project"); 
$sref=$_GET['ref'];
$sid=$_GET['id'];
if($_GET['ref']==1)
{
	$vid_sql= "SELECT * FROM hindi Where id=".$_GET['id'];
	$vid_que=mysqli_query($dbconnect,$vid_sql);
	$vid_rs1=mysqli_fetch_assoc($vid_que);
}
else
{
	$vid_sql= "SELECT * FROM english Where id=".$_GET['id'];
	$vid_que=mysqli_query($dbconnect,$vid_sql);
	$vid_rs1=mysqli_fetch_assoc($vid_que);
}




    $vid_sql= "SELECT * FROM url Where uid=".$vid_rs1['uid'];
	$vid_que=mysqli_query($dbconnect,$vid_sql);
	$vid_rsv=mysqli_fetch_assoc($vid_que);

	$vid_sql= "SELECT * FROM url Where uid=".$vid_rs1['uid'];
	$vid_que=mysqli_query($dbconnect,$vid_sql);
	$vid_rs=mysqli_fetch_assoc($vid_que);

	$vid_recs= "SELECT * FROM url";
	$vid_recq=mysqli_query($dbconnect,$vid_recs);
	$vid_recs1=mysqli_fetch_assoc($vid_recq);
    
	
	if($_SESSION['ct']<3)
	{		
    for($i=0;$i<5;$i++)
	{
		if(($user_profile[$i]==0)&& ($vid_rs[$i+1]==0))
		{
		  $user_profile[$i]=0;
		}
		else if(($user_profile[$i]==0)&& ($vid_rs[$i+1]>=7.5))
		{
			$user_profile[$i]=6;
		}			
		else if(($user_profile[$i]>=7.5)&& ($vid_rs[$i+1]==0))
		{
		}
		else if(($user_profile[$i]>=7.5)&& ($vid_rs[$i+1]>=6))
		{
			$user_profile[$i]=((($user_profile[$i])+($vid_rs[$i+1]))/2);
		}	
	}
	$ct=$_SESSION['ct'];
	$ct++;
	$_SESSION['ct']=$ct;
	}
	else
	{
	 $user_profile=$_SESSION['o_profile'];
    $_SESSION['ct']=0;
	 	 
		
	}
 
$_SESSION['user_profile']=$user_profile;
	$n=mysqli_num_rows($vid_recq);
	
	$arrrec= new SplFixedArray($n);
	$arrref= new SplFixedArray($n);
	$arrrei= new SplFixedArray($n);
	$v1=0;
	
	for($i=1;$i<=$n-1;$i++)
	{     
         $vid_recff="SELECT * FROM url Where uid=".$i;
       	 $vid_reffq=mysqli_query($dbconnect,$vid_recff);
	     $vid_reffre=mysqli_fetch_assoc($vid_reffq);
     
	                                    if($vid_reffre['ref']==1)
                                        {
	                                     $vid_sqlll= "SELECT * FROM hindi Where uid=".$i;
	                                     $vid_que11=mysqli_query($dbconnect,$vid_sqlll);
	                                     $index=mysqli_fetch_assoc($vid_que11);
                                        }
                                       else
                                        {
	                                     $vid_sqlll= "SELECT * FROM english Where uid=".$i;
	                                     $vid_que11=mysqli_query($dbconnect,$vid_sqlll);
	                                     $index=mysqli_fetch_assoc($vid_que11);
                                       }	
	 
		 
		/* echo $vid_reffre['url'];
         echo $vid_reffre['1'];
         echo $vid_reffre['2'];
		 echo $vid_reffre['3'];
		 echo $vid_reffre['4'];
		 echo $vid_reffre['5'];*/
          for($j=0;$j<5;$j++)
		  {
		    $temp=pow(($user_profile[$j]-$vid_reffre[$j+1]),2);
		    $v1=$v1+$temp; 
		  }
		  $temp=sqrt($v1);
		  
		  $arrrec[$i]=$temp;
		  $arrref[$i]=$vid_reffre['ref'];
		  $arrrei[$i]=$index['id'];
		  
	
		  $v1=0;
	}
	
	for($i=1;$i<$n-1;$i++)
	{	for($j=0;$j<($n-$i-1);$j++)
		{	if($arrrec[$j]>$arrrec[$j+1])
			{  
        		$temp=$arrrec[$j+1];
				$arrrec[$j+1]=$arrrec[$j];
				$arrrec[$j]=$temp;
				
				
				$temp1=$arrref[$j+1];
				$arrref[$j+1]=$arrref[$j];
				$arrref[$j]=$temp1;
			     
            	$temp2=$arrrei[$j+1];
				$arrrei[$j+1]=$arrrei[$j];
				$arrrei[$j]=$temp2;
						
				
			}
		}
	}		
?>
						

 
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="show-top-grids">
				<div class="col-sm-8 single-left">
					<div class="song">
						<div class="song-info">
							<h3><?php echo $vid_rs1['name'];?></h3>	
					</div>
					
					
					<div class="video-grid">
							<iframe src="<?php echo $vid_rsv['url'];?>" allowfullscreen></iframe>
						</div>
					</div>
				
					<div class="song-grid-right">
					</div>
					<div class="clearfix"> </div>
					<div class="published">
						<script src="jquery.min.js"></script>
							<script>
								$(document).ready(function () {
									size_li = $("#myList li").size();
									x=1;
									$('#myList li:lt('+x+')').show();
									$('#loadMore').click(function () {
										x= (x+1 <= size_li) ? x+1 : size_li;
										$('#myList li:lt('+x+')').show();
									});
									$('#showLess').click(function () {
										x=(x-1<0) ? 1 : x-1;
										$('#myList li').not(':lt('+x+')').hide();
									});
								});
							</script>
							<div class="load_more">	
								<ul id="myList">
									<li>
										
										<p><?php echo $vid_rs1['des'];?>  </p>
									</li>
									<li>
										<p>  </p>
										<p></p>
										<div class="load-grids">
											<div class="load-grid">
												<p>Category</p>
											</div>
											<div class="load-grid">
												<a href="movies.php">Entertainment</a>
											</div>
											<div class="clearfix"> </div>
										</div>
									</li>
								</ul>
							</div>
					</div>
					
						
					</div>
				</div>
			
				<div class="col-md-4 single-right">
					<h3>Up Next</h3>
					<div class="single-grid-right">
						<div class="single-right-grids">
						<?php 
						  $r1=mt_rand(1,3);
						               if($arrref[$r1]==$sref && $arrrei[$r1]==$sid)
									   {
										   $r1=mt_rand(23,25);
									   }
						               if($arrref[$r1]==1)
                                        {
	                                     $vid_sql= "SELECT * FROM hindi Where id=".$arrrei[$r1];
	                                     $vid_que=mysqli_query($dbconnect,$vid_sql);
	                                     $vid_rs=mysqli_fetch_assoc($vid_que);
                                        }
                                       else
                                        {
	                                    $vid_sql= "SELECT * FROM english Where id=".$arrrei[$r1];
	                                    $vid_que=mysqli_query($dbconnect,$vid_sql);
	                                    $vid_rs=mysqli_fetch_assoc($vid_que);
                                       }						
						
						
						?>
							<div class="col-md-4 single-right-grid-left">
								<a href="single.php?id=<?php echo $arrrei[$r1];?>&ref=<?php echo $arrref[$r1];?>"><img src="images/<?php echo $vid_rs['thumbnail'];?>" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.php?id=<?php echo $arrrei[$r1];?>&ref=<?php echo $arrref[$r1];?>" class="title"><?php echo $vid_rs['name'];?></a>
								<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
								<p class="views"></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
						<?php 
						$r2=mt_rand(4,5);
						               if($arrref[$r2]==$sref && $arrrei[$r2]==$sid)
									   {
										   $r2=mt_rand(23,25);
									   }
						               if($arrref[$r2]==1)
                                        {
	                                     $vid_sql= "SELECT * FROM hindi Where id=".$arrrei[$r2];
	                                     $vid_que=mysqli_query($dbconnect,$vid_sql);
	                                     $vid_rs=mysqli_fetch_assoc($vid_que);
                                        }
                                       else
                                        {
	                                    $vid_sql= "SELECT * FROM english Where id=".$arrrei[$r2];
	                                    $vid_que=mysqli_query($dbconnect,$vid_sql);
	                                    $vid_rs=mysqli_fetch_assoc($vid_que);
                                       }						
						
						
						?>
							<div class="col-md-4 single-right-grid-left">
								<a href="single.php?id=<?php echo $arrrei[$r2];?>&ref=<?php echo $arrref[$r2];?>"><img src="images/<?php echo $vid_rs['thumbnail'];?>" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.php?id=<?php echo $arrrei[$r2];?>&ref=<?php echo $arrref[$r2];?>" class="title"><?php echo $vid_rs['name'];?></a>
								<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
								<p class="views"> </p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
						<?php 
						$r3=mt_rand(6,8);
						               if($arrref[$r3]==$sref && $arrrei[$r3]==$sid)
									   {
										   $r3=mt_rand(23,25);
									   }
						              
						   
						               if($arrref[$r3]==1)
                                        {
	                                     $vid_sql= "SELECT * FROM hindi Where id=".$arrrei[$r3];
	                                     $vid_que=mysqli_query($dbconnect,$vid_sql);
	                                     $vid_rs=mysqli_fetch_assoc($vid_que);
                                        }
                                       else
                                        {
	                                    $vid_sql= "SELECT * FROM english Where id=".$arrrei[$r3];
	                                    $vid_que=mysqli_query($dbconnect,$vid_sql);
	                                    $vid_rs=mysqli_fetch_assoc($vid_que);
                                       }						
						
						
						?>
							<div class="col-md-4 single-right-grid-left">
								<a href="single.php?id=<?php echo $arrrei[$r3];?>&ref=<?php echo $arrref[$r3];?>"><img src="images/<?php echo $vid_rs['thumbnail'];?>" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.php?id=<?php echo $arrrei[$r3];?>&ref=<?php echo $arrref[$r3];?>" class="title"><?php echo $vid_rs['name'];?></a>
								<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
								<p class="views"></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
						<?php 
						$r4=mt_rand(9,11);
						               if($arrref[$r4]==$sref && $arrrei[$r4]==$sid)
									   {
										   $r4=mt_rand(23,25);
									   }
						               if($arrref[$r4]==1)
                                        {
	                                     $vid_sql= "SELECT * FROM hindi Where id=".$arrrei[$r4];
	                                     $vid_que=mysqli_query($dbconnect,$vid_sql);
	                                     $vid_rs=mysqli_fetch_assoc($vid_que);
                                        }
                                       else
                                        {
	                                    $vid_sql= "SELECT * FROM english Where id=".$arrrei[$r4];
	                                    $vid_que=mysqli_query($dbconnect,$vid_sql);
	                                    $vid_rs=mysqli_fetch_assoc($vid_que);
                                       }						
						
						
						?>
							<div class="col-md-4 single-right-grid-left">
								<a href="single.php?id=<?php echo $arrrei[$r4];?>&ref=<?php echo $arrref[$r4];?>"><img src="images/<?php echo $vid_rs['thumbnail'];?>" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.php?id=<?php echo $arrrei[$r4];?>&ref=<?php echo $arrref[$r4];?>" class="title"><?php echo $vid_rs['name'];?></a>
								<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
								<p class="views"></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<?php $r5=mt_rand(12,14);
						               if($arrref[$r5]==$sref && $arrrei[$r5]==$sid)
									   {
										   $r5=mt_rand(23,25);
									   }
						               if($arrref[$r5]==1)
                                        {
	                                     $vid_sql= "SELECT * FROM hindi Where id=".$arrrei[$r5];
	                                     $vid_que=mysqli_query($dbconnect,$vid_sql);
	                                     $vid_rs=mysqli_fetch_assoc($vid_que);
                                        }
                                       else
                                        {
	                                    $vid_sql= "SELECT * FROM english Where id=".$arrrei[$r5];
	                                    $vid_que=mysqli_query($dbconnect,$vid_sql);
	                                    $vid_rs=mysqli_fetch_assoc($vid_que);
                                       }						
						
						
						?>
							<div class="col-md-4 single-right-grid-left">
								<a href="single.php?id=<?php echo $arrrei[$r5];?>&ref=<?php echo $arrref[$r5];?>"><img src="images/<?php echo $vid_rs['thumbnail'];?>" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.php?id=<?php echo $arrrei[$r5];?>&ref=<?php echo $arrref[$r5];?>" class="title"><?php echo $vid_rs['name'];?></a>
								<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
								<p class="views"></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
							<?php 
							$r6=mt_rand(15,16);
						               if($arrref[$r6]==$sref && $arrrei[$r6]==$sid)
									   {
										   $r6=mt_rand(23,25);
									   }
						               if($arrref[$r6]==1)
                                        {
	                                     $vid_sql= "SELECT * FROM hindi Where id=".$arrrei[$r6];
	                                     $vid_que=mysqli_query($dbconnect,$vid_sql);
	                                     $vid_rs=mysqli_fetch_assoc($vid_que);
                                        }
                                       else
                                        {
	                                    $vid_sql= "SELECT * FROM english Where id=".$arrrei[$r6];
	                                    $vid_que=mysqli_query($dbconnect,$vid_sql);
	                                    $vid_rs=mysqli_fetch_assoc($vid_que);
                                       }						
						
						
						?>

								<a href="single.php?id=<?php echo $arrrei[$r6];?>&ref=<?php echo $arrref[$r6];?>"><img src="images/<?php echo $vid_rs['thumbnail'];?>" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.php?id=<?php echo $arrrei[$r6];?>&ref=<?php echo $arrref[$r6];?>" class="title"><?php echo $vid_rs['name'];?></a>
								<p class="author">By <a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
								<p class="views"></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
							<?php $r7=mt_rand(17,18);
                                 
						               if($arrref[$r7]==$sref && $arrrei[$r7]==$sid)
									   {
										   $r7=mt_rand(23,25);
									   }							
						               if($arrref[$r7]==1)
                                        {
	                                     $vid_sql= "SELECT * FROM hindi Where id=".$arrrei[$r7];
	                                     $vid_que=mysqli_query($dbconnect,$vid_sql);
	                                     $vid_rs=mysqli_fetch_assoc($vid_que);
                                        }
                                       else
                                        {
	                                    $vid_sql= "SELECT * FROM english Where id=".$arrrei[$r7];
	                                    $vid_que=mysqli_query($dbconnect,$vid_sql);
	                                    $vid_rs=mysqli_fetch_assoc($vid_que);
                                       }						
						
						
						?>
								<a href="single.php?id=<?php echo $arrrei[$r7];?>&ref=<?php echo $arrref[$r7];?>"><img src="images/<?php echo $vid_rs['thumbnail'];?>" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.php?id=<?php echo $arrrei[$r7];?>&ref=<?php echo $arrref[$r7];?>" class="title"><?php echo $vid_rs['name'];?></a>
								<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
								<p class="views"></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
							<?php $r8=mt_rand(19,20);
						               if($arrref[$r8]==$sref && $arrrei[$r8]==$sid)
									   {
										   $r8=mt_rand(23,25);
									   }
						               if($arrref[$r8]==1)
                                        {
	                                     $vid_sql= "SELECT * FROM hindi Where id=".$arrrei[$r8];
	                                     $vid_que=mysqli_query($dbconnect,$vid_sql);
	                                     $vid_rs=mysqli_fetch_assoc($vid_que);
                                        }
                                       else
                                        {
	                                    $vid_sql= "SELECT * FROM english Where id=".$arrrei[$r8];
	                                    $vid_que=mysqli_query($dbconnect,$vid_sql);
	                                    $vid_rs=mysqli_fetch_assoc($vid_que);
                                       }						
						
						
						?>
								<a href="single.php?id=<?php echo $arrrei[$r8];?>&ref=<?php echo $arrref[$r8];?>"><img src="images/<?php echo $vid_rs['thumbnail'];?>" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.php?id=<?php echo $arrrei[$r8];?>&ref=<?php echo $arrref[$r8];?>" class="title"><?php echo $vid_rs['name'];?></a>
								<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
								<p class="views"></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
						<?php $r9=mt_rand(21,23);
						               if($arrref[$r9]==$sref && $arrrei[$r9]==$sid)
									   {
										   $r9=mt_rand(23,25);
									   }
						               if($arrref[$r9]==1)
                                        {
	                                     $vid_sql= "SELECT * FROM hindi Where id=".$arrrei[$r9];
	                                     $vid_que=mysqli_query($dbconnect,$vid_sql);
	                                     $vid_rs=mysqli_fetch_assoc($vid_que);
                                        }
                                       else
                                        {
	                                    $vid_sql= "SELECT * FROM english Where id=".$arrrei[$r9];
	                                    $vid_que=mysqli_query($dbconnect,$vid_sql);
	                                    $vid_rs=mysqli_fetch_assoc($vid_que);
                                       }						
						
						
						?>
								<a href="single.php?id=<?php echo $arrrei[$r9];?>&ref=<?php echo $arrref[$r9];?>"><img src="images/<?php echo $vid_rs['thumbnail'];?>" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.php?id=<?php echo $arrrei[$r9];?>&ref=<?php echo $arrref[$r9];?>" class="title"><?php echo $vid_rs['name'];?></a>
								<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
								<p class="views"></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
						<?php 
						 if($r1<3)
							 $r1=$r1+1;
						 else
							 $r1=1;
							 
						               if($arrref[$r1]==$sref && $arrrei[$r1]==$sid)
									   {
										   $r1=mt_rand(23,25);
									   }
						               if($arrref[$r1]==1)
                                        {
	                                     $vid_sql= "SELECT * FROM hindi Where id=".$arrrei[$r1];
	                                     $vid_que=mysqli_query($dbconnect,$vid_sql);
	                                     $vid_rs=mysqli_fetch_assoc($vid_que);
                                        }
                                       else
                                        {
	                                    $vid_sql= "SELECT * FROM english Where id=".$arrrei[$r1];
	                                    $vid_que=mysqli_query($dbconnect,$vid_sql);
	                                    $vid_rs=mysqli_fetch_assoc($vid_que);
                                       }						
						
						
						?>
								<a href="single.php?id=<?php echo $arrrei[$r1];?>&ref=<?php echo $arrref[$r1];?>"><img src="images/<?php echo $vid_rs['thumbnail'];?>" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.php?id=<?php echo $arrrei[$r1];?>&ref=<?php echo $arrref[$r1];?>" class="title"><?php echo $vid_rs['name'];?></a>
								<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
								<p class="views"></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
							<?php 
							 if($r2==4)
								 $r2=5;
							 else
								 $r2=4;
							 
						               if($arrref[$r2]==$sref && $arrrei[$r2]==$sid)
									   {
										   $r2=mt_rand(23,25);
									   }
						               if($arrref[$r2]==1)
                                        {
	                                     $vid_sql= "SELECT * FROM hindi Where id=".$arrrei[$r2];
	                                     $vid_que=mysqli_query($dbconnect,$vid_sql);
	                                     $vid_rs=mysqli_fetch_assoc($vid_que);
                                        }
                                       else
                                        {
	                                    $vid_sql= "SELECT * FROM english Where id=".$arrrei[$r2];
	                                    $vid_que=mysqli_query($dbconnect,$vid_sql);
	                                    $vid_rs=mysqli_fetch_assoc($vid_que);
                                       }						
						
						
						?>
								<a href="single.php?id=<?php echo $arrrei[$r2];?>&ref=<?php echo $arrref[$r2];?>"><img src="images/<?php echo $vid_rs['thumbnail'];?>" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.php?id=<?php echo $arrrei[$r2];?>&ref=<?php echo $arrref[$r2];?>" class="title"><?php echo $vid_rs['name'];?></a>
								<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
								<p class="views"></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
<?php 

						 if($r3<8)
							 $r3=$r3+1;
						 else
							 $r3=6;
						 
						               if($arrref[$r3]==$sref && $arrrei[$r3]==$sid)
									   {
										   $r3=mt_rand(23,25);
									   }
						               if($arrref[$r3]==1)
                                        {
	                                     $vid_sql= "SELECT * FROM hindi Where id=".$arrrei[$r3];
	                                     $vid_que=mysqli_query($dbconnect,$vid_sql);
	                                     $vid_rs=mysqli_fetch_assoc($vid_que);
                                        }
                                       else
                                        {
	                                    $vid_sql= "SELECT * FROM english Where id=".$arrrei[$r3];
	                                    $vid_que=mysqli_query($dbconnect,$vid_sql);
	                                    $vid_rs=mysqli_fetch_assoc($vid_que);
                                       }						
						
						
						?>
								<a href="single.php?id=<?php echo $arrrei[$r3];?>&ref=<?php echo $arrref[$r3];?>"><img src="images/<?php echo $vid_rs['thumbnail'];?>" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.php?id=<?php echo $arrrei[$r3];?>&ref=<?php echo $arrref[$r3];?>" class="title"><?php echo $vid_rs['name'];?></a>
								<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
								<p class="views"></p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- footer -->
			<?php include("footer.php"); ?>
			<!-- //footer -->
		</div>
		<div class="clearfix"> </div>
	<div class="drop-menu">
		<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>
		  <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>
		</ul>
	</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  </body>
</html>