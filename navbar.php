
<div class="container">

		  <div class="nav-navbar navbar-inverse navbar-fixed-top">
		  	<div class="container">
		  		<div class="navbar-header">
		  			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
		  			<span class="icon-bar"></span>
		  			<span class="icon-bar"></span>
		  			<span class="icon-bar"></span>
		  			</button>

		  			<img class="navbar-brand" src="images/logo.png">
		  			<a class="navbar-brand" href="index.php">Uddeshya</a>

		  		</div>
		  		<div class="collapse navbar-collapse" id="example">
		  			<ul class="nav navbar-nav">
		  				
		  				<li <?php if (basename($_SERVER['PHP_SELF']) == 'view.php') echo 'class="active"'?>> <a href="view.php">view</a></li>
		  				<li <?php if (basename($_SERVER['PHP_SELF']) == 'sports.php') echo 'class="active"'?>> <a href="sports.php">sports</a></li>
		  				<li <?php if (basename($_SERVER['PHP_SELF']) == 'environment.php') echo 'class="active"'?>> <a href="environment.php">environment</a></li>
		  				<li <?php if (basename($_SERVER['PHP_SELF']) == 'health.php') echo 'class="active"'?>> <a href="health.php">health</a></li>
		  				
		  			</ul>
		  			<form action="home.php" class="navbar-form navbar-right">
		  				<a href="logout.php" class="btn btn-primary" name="logoutb" id="logoutb">logout</a>
		  				<a href="##" class="btn" style="font-size:20px;font-weight:250"><?php echo $_SESSION['username'] ?></a>
		  			</form>
		  		</div>
		  	</div>
		  </div>
		  </div>
    