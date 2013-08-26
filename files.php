<?php include "includes/head.php"; ?>
	<title>Adam Blum</title>
</head>
<body>
	<?php include "includes/legacy.php"; ?>
	<?php include "includes/navigation.php"; ?>
	<?php eagl_secure(); ?>


	<article role="article">
		<header>
			<h1 data-icon="code"></h1>
		</header>
	</article>

	<p>This is a directory of every file available on this site. Edit with caution, changes cannot be undone! It is probably more efficient if you do the majority of your editing locally, but if you need to make a quick fix, this </p>





<p><?php echo $plugintest; ?> blah blah</p>


<article role="grid">
<section role="gridcell">
	<h3>Common Files</h3>
	<nav role="toolbar">
		<a href="page_editor.php?post=_eagl/config.php" role="button">config</a>
		<a href="page_editor.php?post=_eagl/functions.php" role="button">functions</a>
		<a href="page_editor.php?post=_eagl/core.php" role="button">core</a>
		<a href="page_editor.php?post=.htaccess" role="button">htaccess</a>
		<a href="page_editor.php?post=includes/inlinescripts.php" role="button">inline scripts</a>

		<a href="page_editor.php?post=style/scss/_variables.scss" role="button">Sass&nbsp;Variables</a>
		<a href="page_editor.php?post=style/scss/_typography.scss" role="button">Sass&nbsp;Typography</a>

		<a href="page_editor.php?post=scripts/global.js" role="button">global.js</a>		
	</nav>
</section>
</article>

<article data-cols-3>
	<section>
		<h5>Pages</h5>
		<nav role="toolbar">
			<?php eagl_generateFilelist("./") ; ?>
		</nav>
	</section>

	<section>
		<h5>Includes</h5>
		<nav role="toolbar">
			<?php eagl_generateFilelist("includes/"); ?>
		</nav>
	</section>

	<section>
		<h5>Core</h5>
		<nav role="toolbar">
			<?php eagl_generateFilelist("_eagl/") ; ?>
		</nav>
	</section>

	<section>
		<h5>Scripts</h5>
		<nav role="toolbar">
			<?php eagl_generateFilelist("scripts/"); ?>
		</nav>
	</section>


	<section>
		<h5>Plugins</h5>
		<nav role="toolbar">
			<?php eagl_generateFilelist("_eagl_plugins/") ; ?>
		</nav>
	</section>

	<section>
		<h5>CSS</h5>
		<nav role="toolbar">
			<?php eagl_generateFilelist("style/css/"); ?>
		</nav>
	</section>

	<section>
		<h5>Sass</h5>
		<nav role="toolbar">
			<?php eagl_generateFilelist("style/scss/"); ?>
		</nav>
	</section>

	<section>
		<h5>Blog Posts</h5>
		<nav role="toolbar">
			<?php eagl_generateFilelist("blog/") ; ?>
		</nav>
	</section>
</article>









	<?php include "includes/footer.php"; ?>
</body>
</html>