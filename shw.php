
<!DOCTYPE HTML>
<html>
<?php 
include("header.php");
session_start();
$userid = $_SESSION['userid'];
$user_profile = $_SESSION['user_profile'];
$dbconnect = mysqli_connect("localhost","root","","project"); 
echo user_profile[0];
?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="show-top-grids">
				<div class="col-sm-10 show-grid-left main-grids">
					<div class="recommended">
						<div class="recommended-grids english-grid">
							<div class="recommended-info">
								<div class="heading">
									<h3>English</h3>
								</div>
								
								<div class="clearfix"> </div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/mv1.jpg" alt="" /></a>
									<div class="time small-time show-time movie-time">
										<p>7:34</p>
									</div>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<h5><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<ul>
										<li><p class="author author-info"><a href="#" class="author">name here</a></p></li>
										<li class="right-list"><p class="views views-info"></p></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/mv2.jpg" alt="" /></a>
									<div class="time small-time show-time movie-time">
										<p>9:34</p>
									</div>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<h5><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<ul>
										<li><p class="author author-info"><a href="#" class="author">name here</a></p></li>
										<li class="right-list"><p class="views views-info"></p></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/mv3.jpg" alt="" /></a>
									<div class="time small-time show-time movie-time">
										<p>3:04</p>
									</div>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<h5><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<ul>
										<li><p class="author author-info"><a href="#" class="author">name here</a></p></li>
										<li class="right-list"><p class="views views-info"></p></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/mv4.jpg" alt="" /></a>
									<div class="time small-time show-time movie-time">
										<p>2:06</p>
									</div>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<h5><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<ul>
										<li><p class="author author-info"><a href="#" class="author">name here</a></p></li>
										<li class="right-list"><p class="views views-info"></p></li>
									</ul>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					
					<div class="recommended">
						<div class="recommended-grids">
							<div class="recommended-info">
								<div class="heading">
									<h3>Hindi</h3>
								</div>
								
								<div class="clearfix"> </div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/h1.jpg" alt="" /></a>
									<div class="time small-time show-time movie-time">
										<p>2:34</p>
									</div>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<h5><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<ul>
										<li><p class="author author-info"><a href="#" class="author">name here</a></p></li>
										<li class="right-list"><p class="views views-info"></p></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/h2.jpg" alt="" /></a>
									<div class="time small-time show-time movie-time">
										<p>3:45</p>
									</div>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<h5><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<ul>
										<li><p class="author author-info"><a href="#" class="author">name here</a></p></li>
										<li class="right-list"><p class="views views-info"></p></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/h3.jpg" alt="" /></a>
									<div class="time small-time show-time movie-time">
										<p>7:34</p>
									</div>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<h5><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<ul>
										<li><p class="author author-info"><a href="#" class="author">name here</a></p></li>
										<li class="right-list"><p class="views views-info"></p></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>"><img src="images/h4.jpg" alt="" /></a>
									<div class="time small-time show-time movie-time">
										<p>6:30</p>
									</div>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<h5><a href="single.php?id=<?php echo $vid_rs['id'];?>&ref=<?php echo $vid_rs['ref'];?>" class="title"><?php echo $vid_rs['name'];?></a></h5>
									<ul>
										<li><p class="author author-info"><a href="#" class="author">name here</a></p></li>
										<li class="right-list"><p class="views views-info"></p></li>
									</ul>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					
				
				<div class="clearfix"> </div>
			
		<div class="clearfix"> </div>
	<div class="drop-menu">
	
		<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>
		  <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>
		</ul>
	</div>
	</div>
			<!-- footer -->
								<?php include("footer.php"); ?>

			<!-- //footer -->
		</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  </body>
</html>