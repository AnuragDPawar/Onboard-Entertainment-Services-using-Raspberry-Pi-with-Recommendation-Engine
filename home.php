

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


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="main-grids">
				<div class="top-grids">
					<div class="recommended-info">
						<h3>Bollywood Hits</h3>
					</div>
					<div class="col-md-4 resent-grid recommended-grid slider-top-grids">
						<?php include("hindi_i.php");?>
						<div class="resent-grid-img recommended-grid-img">
							<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
							<div class="time">
								<p><?php echo $rand?></p>
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
					<div class="col-md-4 resent-grid recommended-grid slider-top-grids">
											<?php include("hindi_i.php");?>

						<div class="resent-grid-img recommended-grid-img">
							<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
							<div class="time">
								<p>7:23</p>
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
					<div class="col-md-4 resent-grid recommended-grid slider-top-grids">
						<?php include("hindi_i.php");?>
						<div class="resent-grid-img recommended-grid-img">
							<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
							<div class="time">
								<p>4:04</p>
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
										<?php include("english_i.php");?>

											<div class="resent-grid-img recommended-grid-img">
												<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
												<div class="time small-time slider-time">
													<p>7:34</p>
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
										<?php include("english_i.php");?>

											<div class="resent-grid-img recommended-grid-img">
												<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
												<div class="time small-time slider-time">
													<p>6:23</p>
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
											<?php include("english_i.php");?>

												<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
												<div class="time small-time slider-time">
													<p>2:45</p>
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
										<?php include("english_i.php");?>

											<div class="resent-grid-img recommended-grid-img">
												<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
												<div class="time small-time slider-time">
													<p>4:34</p>
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
										<?php include("english_i.php");?>

											<div class="resent-grid-img recommended-grid-img">
												<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
												<div class="time small-time slider-time">
													<p>4:42</p>
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
										<?php include("english_i.php");?>

											<div class="resent-grid-img recommended-grid-img">
												<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
												<div class="time small-time slider-time">
													<p>6:14</p>
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
										<?php include("english_i.php");?>

											<div class="resent-grid-img recommended-grid-img">
												<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
												<div class="time small-time slider-time">
													<p>2:34</p>
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
										<?php include("english_i.php");?>

											<div class="resent-grid-img recommended-grid-img">
												<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
												<div class="time small-time slider-time">
													<p>5:12</p>
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
										<?php include("english_i.php");?>

											<div class="resent-grid-img recommended-grid-img">
												<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
												<div class="time small-time slider-time">
													<p>4:42</p>
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
										<?php include("english_i.php");?>

											<div class="resent-grid-img recommended-grid-img">
												<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
												<div class="time small-time slider-time">
													<p>6:14</p>
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
										<?php include("english_i.php");?>

											<div class="resent-grid-img recommended-grid-img">
												<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
												<div class="time small-time slider-time">
													<p>2:34</p>
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
										<?php include("english_i.php");?>

											<div class="resent-grid-img recommended-grid-img">
												<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
												<div class="time small-time slider-time">
													<p>5:12</p>
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
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
								<div class="time small-time">
									<p>2:34</p>
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
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
								<div class="time small-time">
									<p>1:34</p>
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
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
								<div class="time small-time">
									<p>2:09</p>
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
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
								<div class="time small-time">
									<p>6:34</p>
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
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
								<div class="time small-time">
									<p>6:09</p>
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
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
								<div class="time small-time">
									<p>9:04</p>
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























