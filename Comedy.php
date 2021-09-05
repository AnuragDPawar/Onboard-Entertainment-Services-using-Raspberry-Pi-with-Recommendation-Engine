

<!DOCTYPE HTML>
<html>
<?php 
session_start();
$userid = $_SESSION['userid'];
$user_profile = $_SESSION['user_profile'];
include("header.php");
$dbconnect = mysqli_connect("localhost","root","","project"); 
$rand = mt_rand(1,10);
?>

<?php
	$vid_sql= "SELECT * FROM hindi as h , url as u WHERE h.uid=u.uid AND u.5>6";
	$vid_que=mysqli_query($dbconnect,$vid_sql);
	$vid_rh=mysqli_fetch_assoc($vid_que);
	$i=1;
	$n=mysqli_num_rows($vid_que);
	do
	{
		$ah[$i]=$vid_rh['id'];
		
		$i++;
        		
	}while($vid_rh=mysqli_fetch_assoc($vid_que))
?>
<?php
	$vid_sql= "SELECT * FROM english as h , url as u WHERE h.uid=u.uid AND u.5>6";
	$vid_que=mysqli_query($dbconnect,$vid_sql);
	$vid_rh=mysqli_fetch_assoc($vid_que);
	$i=1;
	$n=mysqli_num_rows($vid_que);
	do
	{
		$ae[$i]=$vid_rh['id'];
			
		$i++;
        		
	}while($vid_rh=mysqli_fetch_assoc($vid_que))
?>




<?php $i=mt_rand(1,4);?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="main-grids">
				<div class="top-grids">
					<div class="recommended-info">
						<h3>Bollywood Hits</h3>
					</div>
					<?php
	$vid_sql= "SELECT * FROM hindi Where id=".$ah[$i+1];
	$vid_que=mysqli_query($dbconnect,$vid_sql);
	$vid_rs=mysqli_fetch_assoc($vid_que);?>
					
					<div class="col-md-4 resent-grid recommended-grid slider-top-grids">
						
						<div class="resent-grid-img recommended-grid-img">
							<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
							<div class="time">
								<p><?php echo $vid_rs['time']; echo "Hr"?></p>
							</div>
							<div class="clck">
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
							</div>
						</div>
						<div class="resent-grid-info recommended-grid-info">
							<h3><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title title-info"><?php echo $vid_rs['name'];?></a></h3>
							<ul>
								<li><p class="author author-info"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p></li>
							</ul>
						</div>
					</div>
					
					
                      <?php
	$vid_sql= "SELECT * FROM hindi Where id=".$ah[$i+2];
	$vid_que=mysqli_query($dbconnect,$vid_sql);
	$vid_rs=mysqli_fetch_assoc($vid_que);?>
	
					<div class="col-md-4 resent-grid recommended-grid slider-top-grids">
											

						<div class="resent-grid-img recommended-grid-img">
							<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
							<div class="time">
								<p><?php echo $vid_rs['time']; echo "Hr"?></p>
							</div>
							<div class="clck">
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
							</div>
						</div>
						<div class="resent-grid-info recommended-grid-info">
							<h3><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title title-info"><?php echo $vid_rs['name'];?></a></h3>
							<ul>
								<li><p class="author author-info"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p></li>
							</ul>
						</div>
					</div>
					
					
                                  <?php
	                              $vid_sql= "SELECT * FROM hindi Where id=".$ah[$i+3];
	                              $vid_que=mysqli_query($dbconnect,$vid_sql);
	                              $vid_rs=mysqli_fetch_assoc($vid_que);?>					
					
					<div class="col-md-4 resent-grid recommended-grid slider-top-grids">
						
						<div class="resent-grid-img recommended-grid-img">
							<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
							<div class="time">
								<p><?php echo $vid_rs['time']; echo "Hr"?></p>
							</div>
							<div class="clck">
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
							</div>
						</div>
						<div class="resent-grid-info recommended-grid-info">
							<h3><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title title-info"><?php echo $vid_rs['name'];?></a></h3>
							<ul>
								<li><p class="author author-info"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				<?php $i=mt_rand(1,2);?>
				
				<div class="recommended">
					<div class="recommended-grids">
						<div class="recommended-info">
							<h3>English Movies</h3>
						</div>
						<script src="js/responsiveslides.min.js"></script>
						 <script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider3").responsiveSlides({
								auto: true,
								pager: false,
								nav: true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						  </script>
						<div  id="top" class="callbacks_container">
							<ul class="rslides" id="slider3">
								<li>
								
								
									<div class="animated-grids">
										<div class="col-md-3 resent-grid recommended-grid slider-first">
										
                                            <?php
	                              $vid_sql= "SELECT * FROM english Where id=".$ae[$i+1];
	                              $vid_que=mysqli_query($dbconnect,$vid_sql);
	                              $vid_rs=mysqli_fetch_assoc($vid_que);?>	
											<div class="resent-grid-img recommended-grid-img">
												<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
												<div class="time small-time slider-time">
													<p><?php echo $vid_rs['time']; echo "Hr"?></p>
												</div>
												<div class="clck small-clck">
													<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
												</div>
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title"><?php echo $vid_rs['name'];?></a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
													</div>
													
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<div class="col-md-3 resent-grid recommended-grid slider-first">
										 <?php
	                              $vid_sql= "SELECT * FROM english Where id=".$ae[$i+2];
	                              $vid_que=mysqli_query($dbconnect,$vid_sql);
	                              $vid_rs=mysqli_fetch_assoc($vid_que);?>	
											<div class="resent-grid-img recommended-grid-img">
												<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
												<div class="time small-time slider-time">
													<p><?php echo $vid_rs['time']; echo "Hr"?></p>
												</div>
												<div class="clck small-clck">
													<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
												</div>
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title"><?php echo $vid_rs['name'];?></a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
													</div>
													
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<div class="col-md-3 resent-grid recommended-grid slider-first">
											<div class="resent-grid-img recommended-grid-img">
											
 <?php
	                              $vid_sql= "SELECT * FROM english Where id=".$ae[$i+3];
	                              $vid_que=mysqli_query($dbconnect,$vid_sql);
	                              $vid_rs=mysqli_fetch_assoc($vid_que);?>	
												<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
												<div class="time small-time slider-time">
													<p><?php echo $vid_rs['time']; echo "Hr"?></p>
												</div>
												<div class="clck small-clck">
													<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
												</div>
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title"><?php echo $vid_rs['name'];?></a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
													</div>
													
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<div class="col-md-3 resent-grid recommended-grid slider-first">
										 <?php
	                              $vid_sql= "SELECT * FROM english Where id=".$ae[$i+4];
	                              $vid_que=mysqli_query($dbconnect,$vid_sql);
	                              $vid_rs=mysqli_fetch_assoc($vid_que);?>	

											<div class="resent-grid-img recommended-grid-img">
												<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
												<div class="time small-time slider-time">
													<p><?php echo $vid_rs['time']; echo "Hr"?></p>
												</div>
												<div class="clck small-clck">
													<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
												</div>
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title"><?php echo $vid_rs['name'];?></a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
													</div>
													
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
								<li>
									<div class="animated-grids">
										<div class="col-md-3 resent-grid recommended-grid slider-first">
										
<?php
	                              $vid_sql= "SELECT * FROM english Where id=".$ae[$i+5];
	                              $vid_que=mysqli_query($dbconnect,$vid_sql);
	                              $vid_rs=mysqli_fetch_assoc($vid_que);?>
											<div class="resent-grid-img recommended-grid-img">
												<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
												<div class="time small-time slider-time">
													<p><?php echo $vid_rs['time']; echo "Hr"?></p>
												</div>
												<div class="clck small-clck">
													<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
												</div>
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title"><?php echo $vid_rs['name'];?></a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
													</div>
													
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<div class="col-md-3 resent-grid recommended-grid slider-first">
										<?php
	                              $vid_sql= "SELECT * FROM english Where id=".$ae[$i+6];
	                              $vid_que=mysqli_query($dbconnect,$vid_sql);
	                              $vid_rs=mysqli_fetch_assoc($vid_que);?>

											<div class="resent-grid-img recommended-grid-img">
												<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
												<div class="time small-time slider-time">
													<p><?php echo $vid_rs['time']; echo "Hr"?></p>
												</div>
												<div class="clck small-clck">
													<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
												</div>
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title"><?php echo $vid_rs['name'];?></a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
													</div>
													
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<div class="col-md-3 resent-grid recommended-grid slider-first">
										<?php
	                              $vid_sql= "SELECT * FROM english Where id=".$ae[$i+7];
	                              $vid_que=mysqli_query($dbconnect,$vid_sql);
	                              $vid_rs=mysqli_fetch_assoc($vid_que);?>

											<div class="resent-grid-img recommended-grid-img">
												<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
												<div class="time small-time slider-time">
													<p><?php echo $vid_rs['time']; echo "Hr"?></p>
												</div>
												<div class="clck small-clck">
													<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
												</div>
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title"><?php echo $vid_rs['name'];?></a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
													</div>
													
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<div class="col-md-3 resent-grid recommended-grid slider-first">
										
<?php
	                              $vid_sql= "SELECT * FROM english Where id=".$ae[$i+2];
	                              $vid_que=mysqli_query($dbconnect,$vid_sql);
	                              $vid_rs=mysqli_fetch_assoc($vid_que);?>
											<div class="resent-grid-img recommended-grid-img">
												<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
												<div class="time small-time slider-time">
													<p><?php echo $vid_rs['time']; echo "Hr"?></p>
												</div>
												<div class="clck small-clck">
													<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
												</div>
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title"><?php echo $vid_rs['name'];?></a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
													</div>
													
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
				
				<div class="recommended">
					<div class="recommended-grids">
						<div class="recommended-info">
							<h3>Recommended</h3>
						</div>
						<?php include("hindi_i.php");?>
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
								<div class="time small-time">
									<p><?php echo $vid_rs['time']; echo "Hr"?></p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title"><?php echo $vid_rs['name'];?></a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p></li>
									
								</ul>
							</div>
						</div>
						<?php include("english_i.php");?>
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
								<div class="time small-time">
									<p>3:02</p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title"><?php echo $vid_rs['name'];?></a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p></li>
			
								</ul>
							</div>
						</div>
						<?php include("hindi_i.php");?>
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
								<div class="time small-time">
									<p><?php echo $vid_rs['time']; echo "Hr"?></p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title"><?php echo $vid_rs['name'];?></a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p></li>
									
								</ul>
							</div>
						</div>
						<?php include("english_i.php");?>
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
								<div class="time small-time">
									<p><?php echo $vid_rs['time']; echo "Hr"?></p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title"><?php echo $vid_rs['name'];?></a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p></li>
									
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="recommended-grids">
					<?php include("hindi_i.php");?>
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
								<div class="time small-time">
									<p><?php echo $vid_rs['time']; echo "Hr"?></p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title"><?php echo $vid_rs['name'];?></a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p></li>
									
								</ul>
							</div>
						</div>
						<?php include("english_i.php");?>
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
								<div class="time small-time">
									<p>7:34</p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title"><?php echo $vid_rs['name'];?></a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p></li>
									
								</ul>
							</div>
						</div>
						<?php include("hindi_i.php");?>
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
								<div class="time small-time">
									<p><?php echo $vid_rs['time']; echo "Hr"?></p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title"><?php echo $vid_rs['name'];?></a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p></li>
									
								</ul>
							</div>
						</div>
						<?php include("english_i.php");?>
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
								<div class="time small-time">
									<p><?php echo $vid_rs['time']; echo "Hr"?></p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title"><?php echo $vid_rs['name'];?></a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p></li>
									
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
	
			<!-- footer -->
			<?php include("footer.php"); ?>
			<!-- //footer -->
		</div>
		<div class="clearfix"> </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  </body>

</html>








