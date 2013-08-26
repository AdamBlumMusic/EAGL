<?php include "includes/head.php"; ?>
	<title>Adam Blum</title>
</head>
<body>
	<?php include "includes/legacy.php"; ?>
	<?php include "includes/navigation.php"; ?>
	<?php eagl_secure(); ?>

	<h1>Files</h1>
	<p>This is a directory of every file available on this site. Edit with caution, changes cannot be undone!</p>





<p><?php echo $plugintest; ?> blah blah</p>

<article role="grid">
	<section role="gridcell">
		<h3>Pages</h3>
		<nav role="toolbar">
			<?php eagl_generateFilelist("./") ; ?>
		</nav>
	</section>


		<section role="gridcell">
	<h3>Common Files</h3>
	<nav role="toolbar">
		<a href="page_editor.php?post=_eagl/config.php" role="button">config</a>
		<a href="page_editor.php?post=_eagl/functions.php" role="button">functions</a>
		<a href="page_editor.php?post=_eagl/core.php" role="button">core</a>
		<a href="page_editor.php?post=.htaccess" role="button">htaccess</a>
		<a href="page_editor.php?post=includes/inlinescripts.php" role="button">inline scripts</a>
	</nav>

	<nav role="toolbar">
		<a href="page_editor.php?post=style/scss/_variables.scss" role="button">Sass&nbsp;Variables</a>
		<a href="page_editor.php?post=style/scss/_typography.scss" role="button">Sass&nbsp;Typography</a>
	</nav>

	<nav role="toolbar">
		<a href="page_editor.php?post=scripts/global.js" role="button">global.js</a>		
	</nav>
</section>
</article>


<article role="grid">
	<section role="gridcell">
		<h3>Core</h3>
		<nav role="toolbar">
			<?php eagl_generateFilelist("_eagl/") ; ?>
		</nav>
	</section>

	<section role="gridcell">
		<h3>Plugins</h3>
		<nav role="toolbar">
			<?php eagl_generateFilelist("_eagl_plugins/") ; ?>
		</nav>
	</section>
</article>




<article role="grid">
	<section role="gridcell">
		<h3>Includes</h3>
		<nav role="toolbar">
			<?php eagl_generateFilelist("includes/"); ?>
		</nav>
	</section>

	<section role="gridcell">
		<h3>Scripts</h3>
		<nav role="toolbar">
			<?php eagl_generateFilelist("scripts/"); ?>
		</nav>
	</section>
</article>



<article role="grid">
	<section role="gridcell">
		<h3>CSS</h3>
		<nav role="toolbar">
			<?php eagl_generateFilelist("style/css/"); ?>
		</nav>
	</section>

	<section role="gridcell">
		<h3>Sass</h3>
		<nav role="toolbar">
			<?php eagl_generateFilelist("style/scss/"); ?>
		</nav>
	</section>
</article>

<article role="group">
		<h3>Blog Posts</h3>
		<nav role="toolbar">
			<?php eagl_generateFilelist("blog/") ; ?>
		</nav>
</article>


	<?php include "includes/footer.php"; ?>
</body>
</html>