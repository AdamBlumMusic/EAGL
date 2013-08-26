<?php include "includes/head.php"; ?>
	<title>Adam Blum</title>
</head>
<body>
	<?php include "includes/legacy.php"; ?>
	<?php include "includes/navigation.php"; ?>
	<?php eagl_secure(); ?>
<h3>Info for <?php echo $eagl_admin; ?></h3>
<article role="group">

	<?php eagl_generateFilelist("_eagl_plugins/"); ?>

</article>

<p><?php plug(); ?></p>


<?php include "includes/footer.php"; ?>
</body>
</html>