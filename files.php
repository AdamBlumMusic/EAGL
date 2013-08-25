<?php include "includes/head.php"; ?>
	<title>Adam Blum</title>
</head>
<body>
	<?php include "includes/legacy.php"; ?>
	<?php include "includes/navigation.php"; ?>
	<?php eagl_secure(); ?>
<article role="group">

	<a href="page_editor.php?post=includes/config.php" data-icon="code" role="button"> Edit Configuration File</a>
	<p role="note" rel="about config">This is the config.php file, and it's awesome.</p>
</article>



<h3>Pages</h3>
<article role="group">
	<?php  eagl_generateFilelist("./") ; ?>
</article>



<article role="grid">
	<section role="gridcell">
		<h3>Includes</h3>
		<?php eagl_generateFilelist("includes/"); ?>
	</section>

	<section role="gridcell">
		<h3>Scripts</h3>
		<?php eagl_generateFilelist("scripts/"); ?>
	</section>
</article>



<article role="grid">
	<section role="gridcell">
		<h3>CSS</h3>
		<?php eagl_generateFilelist("style/css/"); ?>
	</section>

	<section role="gridcell">
		<h3>Sass</h3>
		<?php eagl_generateFilelist("style/scss/"); ?>
	</section>
</article>




	<?php include "includes/footer.php"; ?>
</body>
</html>