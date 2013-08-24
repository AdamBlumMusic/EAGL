<header>
	<nav role="navigation">
		<a href="index.php">Home</a>
		<a href="blog.php">Blog</a>
		<a href="portfolio.php">Portfolio</a>
		<a href="about.php">About</a>
		<a href="contact.php">Contact</a>
	</nav>
	
<?php 
	if ($_SESSION['loggedIn'] == "true") {
		include "admin_nav.php";
	}
?>

</header>