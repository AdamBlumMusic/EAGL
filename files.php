<?php include "includes/head.php"; ?>
	<title>Adam Blum</title>
</head>
<body>
	<?php include "includes/legacy.php"; ?>
	<?php include "includes/navigation.php"; ?>
	<?php eagl_secure(); ?>

	<h1>Files</h1>
	<p>This is a directory of every file available on this site. Edit with caution, changes cannot be undone!</p>

<h2>Common Files</h2>
<article role="group">
	<nav role="toolbar">
		<a href="page_editor.php?post=includes/config.php" role="button">config</a>
		<a href="page_editor.php?post=includes/functions.php" role="button">functions</a>
		<a href="page_editor.php?post=.htaccess" role="button">htaccess</a>
		<a href="page_editor.php?post=includes/inlinescripts.php" role="button">inline scripts</a>
	</nav>

	<nav role="toolbar">
		
		<a href="page_editor.php?post=style/scss/_variables.scss" role="button">Sass&nbsp;Variables</a>
		<a href="page_editor.php?post=style/scss/_typography.scss" role="button">Sass&nbsp;Typography</a>
	</nav>

	<nav role="toolbar">
		
		<a href="page_editor.php?post=scripts/global.js" role="button">global.js</a>
		<a href="page_editor.php?post=style/scss/_typography.scss" role="button">Sass&nbsp;Typography</a>
	</nav>
</article>




<article role="group">
		<h3>Pages</h3>
		<?php eagl_generateFilelist("./") ; ?>
</article>


<article role="group">
		<h3>Blog Posts</h3>
		<?php eagl_generateFilelist("blog/") ; ?>
</article>


<article role="grid">
	<section role="gridcell">
		<h3>Includes</h3>
		<p></p>
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