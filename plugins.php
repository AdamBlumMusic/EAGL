<?php include "includes/head.php"; ?>
	<title>Adam Blum</title>
</head>
<body>
	<?php include "includes/legacy.php"; ?>
	<?php include "includes/navigation.php"; ?>
	<?php eagl_secure(); ?>
<h3>Info for <?php echo $eagl_admin; ?></h3>
<article role="group">

	<?php eagl_generateFilelist("_eagl_plugins/") ; ?>

</article>

<p><?php plug(); ?></p>

<article>
	<h2>Add New Plugin</h2>
<form enctype="multipart/form-data" action="upload.php" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- Name of input element determines name in $_FILES array -->
    Send this file: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>
</article>
	<?php include "includes/footer.php"; ?>
</body>
</html>