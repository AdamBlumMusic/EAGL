<?php include "includes/head.php"; ?>
	<title>Adam Blum</title>
</head>
<body>

<?php include "includes/legacy.php"; ?>

<?php include "includes/navigation.php"; ?>


<article>
	<header>
		<h1>Portfolio</h1>
		<p>Clients I have had the pleasure to work with:</p>
	</header>
</article>

<article role="group">





<?php
	function addPortfolioItem ($title, $logo, $url) {
		echo "<figure><a href='$url' alt='$title' target='_blank'><img src='img/clients/$logo.png' alt='$title' /></a></figure>\n";
	}
?>


<?php addPortfolioItem("Canon Business Process Solutions", "CBPS", "http://oldnorthcreative.com"); ?>

<?php addPortfolioItem("Ryerson", "ryerson", "http://oldnorthcreative.com"); ?>

<?php addPortfolioItem("Old North Creative", "oldnorthcreative", "http://oldnorthcreative.com"); ?>

<?php addPortfolioItem("Grace Tomberlin Photography", "gracetomberlin", "http://oldnorthcreative.com"); ?>



</article>


<?php include "includes/footer.php"; ?>

	
</body>
</html>