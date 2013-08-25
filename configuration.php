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

<article role="group">


<?php  eagl_generatePagelist() ; ?>

</article>





	<?php include "includes/footer.php"; ?>
</body>
</html>