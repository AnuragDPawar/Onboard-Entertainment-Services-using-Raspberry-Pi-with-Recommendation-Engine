<div class="drop-navigation drop-navigation">
<?php $dbconnect = mysqli_connect("localhost","root","","project");?> 


				  <ul class="nav nav-sidebar">
					<li class="active"><a href="home.php" class="home-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
					
					
					
					
					
					
					
					
					
					<li><a href="#" class="menu1"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>Movies<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li>
						<ul class="cl-effect-2">
							<li><a href="movies.php">English</a></li>                                             
						
							<li><a href="movies.php">Hindi</a></li> 
						</ul>
						<!-- script-for-menu -->
						<script>
							$( "li a.menu1" ).click(function() {
							$( "ul.cl-effect-2" ).slideToggle( 300, function() {
							// Animation complete.
							});
							});
						</script>
						
					<li><a href="Action.php" class="menu"><span class="glyphicon glyphicon-film glyphicon-sunglasses" aria-hidden="true"></span>Action</a></li>
						<!-- script-for-menu -->
						<script>
							$( "li a.menu" ).click(function() {
							$( "ul.cl-effect-1" ).slideToggle( 300, function() {
							// Animation complete.
							});
							});
						</script>
						<li><a href="Drama.php" class="menu"><span class="glyphicon glyphicon-film glyphicon-king" aria-hidden="true"></span>Drama</a></li>
						<!-- script-for-menu -->
						<script>
							$( "li a.menu" ).click(function() {
							$( "ul.cl-effect-1" ).slideToggle( 300, function() {
							// Animation complete.
							});
							});
						</script>
						<li><a href="Romance.php" class="menu"><span class="glyphicon glyphicon-film glyphicon-heart" aria-hidden="true"></span>Romance</a></li>
						<!-- script-for-menu -->
						<script>
							$( "li a.menu" ).click(function() {
							$( "ul.cl-effect-1" ).slideToggle( 300, function() {
							// Animation complete.
							});
							});
						</script>
						<li><a href="Scifi.php" class="menu"><span class="glyphicon glyphicon-film glyphicon-king" aria-hidden="true"></span>Sci-Fi</a></li>
						<!-- script-for-menu -->
						<script>
							$( "li a.menu" ).click(function() {
							$( "ul.cl-effect-1" ).slideToggle( 300, function() {
							// Animation complete.
							});
							});
						</script>
					<li><a href="Comedy.php" class="song-icon"><span class="glyphicon  glyphicon-film glyphicon-certificate" aria-hidden="true"></span>Comedy</a></li>
				  </ul>
				  <!-- script-for-menu -->
						<script>
							$( ".top-navigation" ).click(function() {
							$( ".drop-navigation" ).slideToggle( 300, function() {
							// Animation complete.
							});
							});
						</script>
				</div>