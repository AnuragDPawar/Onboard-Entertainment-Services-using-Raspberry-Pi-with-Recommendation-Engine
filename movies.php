

<!DOCTYPE HTML>
<html>
<?php include("header.php");
$dbconnect = mysqli_connect("localhost","root","","project"); 

?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="show-top-grids">
				<div class="col-sm-10 show-grid-left main-grids">
					<div class="recommended">
						<div class="recommended-grids english-grid">
							<div class="recommended-info">
								<div class="heading">
									<h3>Hindi</h3>
								</div>
								<div class="heading-right">
									<a  href="#small-dialog8" class="play-icon popup-with-zoom-anim">Subscribe</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<?php include("hindi_i.php");?><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
									<div class="time small-time show-time">
										<p><?php echo $vid_rs['time']; echo "Hr"?></p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.php" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
									
								</div>
							</div>
							<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<?php include("hindi_i.php");?><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
									<div class="time small-time show-time">
										<p><?php echo $vid_rs['time']; echo "Hr"?></p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.php" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
									
								</div>
							</div>
							<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<?php include("hindi_i.php");?><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
									<div class="time small-time show-time">
										<p><?php echo $vid_rs['time']; echo "Hr"?></p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.php" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
									
								</div>
							</div>
							<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<?php include("hindi_i.php");?><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
									<div class="time small-time show-time">
										<p><?php echo $vid_rs['time']; echo "Hr"?></p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.php" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
									
								</div>
							</div>
							<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<?php include("hindi_i.php");?><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
									<div class="time small-time show-time">
										<p><?php echo $vid_rs['time']; echo "Hr"?></p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.php" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
									
								</div>
							</div>
							<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<?php include("hindi_i.php");?><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
									<div class="time small-time show-time">
										<p><?php echo $vid_rs['time']; echo "Hr"?></p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.php" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
									
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>


					<div class="recommended">
						<div class="recommended-grids">
							<div class="recommended-info">
								<div class="heading">
									<h3>English</h3>
								</div>
								<div class="heading-right">
									<a  href="#small-dialog8" class="play-icon popup-with-zoom-anim">Subscribe</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<?php include("english_i.php");?><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
									<div class="time small-time show-time">
										<p><?php echo $vid_rs['time']; echo "Hr"?></p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.php" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
									
								</div>
							</div>
							<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<?php include("english_i.php");?><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
									<div class="time small-time show-time">
										<p><?php echo $vid_rs['time']; echo "Hr"?></p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.php" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
									
								</div>
							</div>
							<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<?php include("english_i.php");?><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
									<div class="time small-time show-time">
										<p><?php echo $vid_rs['time']; echo "Hr"?></p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.php" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
									
								</div>
							</div>
							<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<?php include("english_i.php");?><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
									<div class="time small-time show-time">
										<p><?php echo $vid_rs['time']; echo "Hr"?></p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.php" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
									
								</div>
							</div>
							<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<?php include("english_i.php");?><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
									<div class="time small-time show-time">
										<p><?php echo $vid_rs['time']; echo "Hr"?></p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.php" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
									
								</div>
							</div>
							<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<?php include("english_i.php");?><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
									<div class="time small-time show-time">
										<p><?php echo $vid_rs['time']; echo "Hr"?></p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.php" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
									
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="recommended">
						<div class="recommended-grids">
							<div class="recommended-info">
								<div class="heading">
									<h3>Marathi</h3>
								</div>
								<div class="heading-right">
									<a  href="#small-dialog8" class="play-icon popup-with-zoom-anim">Subscribe</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<?php include("hindi_i.php");?><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
									<div class="time small-time show-time">
										<p><?php echo $vid_rs['time']; echo "Hr"?></p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.php" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
									
								</div>
							</div>
							<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<?php include("hindi_i.php");?><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
									<div class="time small-time show-time">
										<p><?php echo $vid_rs['time']; echo "Hr"?></p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.php" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
									
								</div>
							</div>
							<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<?php include("hindi_i.php");?><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
									<div class="time small-time show-time">
										<p><?php echo $vid_rs['time']; echo "Hr"?></p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.php" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
									
								</div>
							</div>
							<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<?php include("hindi_i.php");?><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
									<div class="time small-time show-time">
										<p><?php echo $vid_rs['time']; echo "Hr"?></p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.php" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
									
								</div>
							</div>
							<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<?php include("hindi_i.php");?><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
									<div class="time small-time show-time">
										<p><?php echo $vid_rs['time']; echo "Hr"?></p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.php" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
									
								</div>
							</div>
							<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<?php include("hindi_i.php");?><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/<?php echo $vid_rs['poster2'];?>" alt="" /></a>
									<div class="time small-time show-time">
										<p><?php echo $vid_rs['time']; echo "Hr"?></p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.php" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<p class="author"><a href="#" class="author"><?php echo $vid_rs['cast1'];?><?php echo ","?><?php echo $vid_rs['cast2'];?></a></p>
									
								</div>
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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  </body>
</html>