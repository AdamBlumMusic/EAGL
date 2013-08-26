<?php include "includes/head.php"; ?>
	<title>Adam Blum</title>
</head>
<body>
	<?php include "includes/legacy.php"; ?>
	<?php include "includes/navigation.php"; ?>
	<?php eagl_secure(); ?>
<h3>Installed Plugins</h3>
<p role="note" rel="about plugins">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, fugiat, tenetur itaque sequi est reprehenderit molestias veritatis nulla animi architecto voluptatem cupiditate consequuntur laborum id rerum non quaerat dignissimos voluptas.</p>
<article role="group">
	<?php eagl_generateFilelist("_eagl_plugins/"); ?>
</article>
<?php include "includes/footer.php"; ?>
</body>
</html>