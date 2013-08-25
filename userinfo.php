<?php include "includes/head.php"; ?>
	<title>Adam Blum</title>
</head>
<body>
	<?php include "includes/legacy.php"; ?>
	<?php include "includes/navigation.php"; ?>
	<?php eagl_secure(); ?>
<h3>Info for <?php echo $eagl_admin; ?></h3>
<article>
	<dl>
		<dt rel="/scripts/">Javascript</dt>
		<dd><?php echo $eagl_scripts; ?></dd>

		<dt rel="/style/css/">Stylesheets</dt>
		<dd><?php echo $eagl_stylesheets; ?></dd>

		<dt rel="/style/css/">Legacy Stylesheets</dt>
		<dd><?php echo $eagl_legacystylesheet; ?></dd>

		<dt rel="for testing only">Disable Styles</dt>
		<dd><?php echo $eagl_nostyles; ?></dd>

		<dt rel="for testing only">Show Developer Info</dt>
		<dd><?php echo $eagl_developerInfo; ?></dd>

		<dt>Production Ready?</dt>
		<dd><?php echo $eagl_productionReady; ?></dd>
	</dl>
		<section role="group"><p>Wanna fix something?</p><a href="page_editor.php?post=includes/config.php" role="button">Edit your config file</a></section>

</article>
	<?php include "includes/footer.php"; ?>
</body>
</html>