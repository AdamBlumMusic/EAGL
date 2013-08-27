<?php include "includes/head.php"; ?>
	<title>Adam Blum</title>
</head>
<body>
	<?php include "includes/legacy.php"; ?>
	<?php include "includes/navigation.php"; ?>


<?php eagl_secure(); ?>


<?php
if (isset($_POST['blogpost_content']) && isset($_POST['blogpost_title'])) {
	$blogpost_title = $_POST['blogpost_title'];
	$blogpost_subtitle = $_POST['blogpost_subtitle'];
	$blogpost_date = $_POST['blogpost_date'];
	$blogpost_eagl_code = $_POST['blogpost_eagl_code'];
	$blogpost_dateNum = $_POST['blogpost_dateNum'];
	$blogpost_content = $_POST['blogpost_content'];

	$blogpost_slug = eagl_createSlug("$blogpost_dateNum-$blogpost_title-$blogpost_subtitle");
	$myFile = "blog/$blogpost_slug";

	$ourFileHandle = fopen("$myFile", 'wb') or die("can't open filea");
	fclose($ourFileHandle);

	if ($blogpost_eagl_code == "eagl_del") {
		unlink($myFile);
		eagl_alert("Success", "Your post, $blogpost_title: $blogpost_subtitle, was deleted!");
	} else {
			$fh = fopen($myFile, 'w') or die("can't open fileee");
			$stringData = "<!--\n$blogpost_title: $blogpost_subtitle\n$blogpost_date\n-->\n\n <article role='article'><header><h1>$blogpost_title</h1><h2>$blogpost_subtitle</h2><time>$blogpost_date</time></header>\n\n $blogpost_content \n</article>";
			fputs($fh, $stringData);
			fclose($fh);
			eagl_alert("Success", "Your post, $blogpost_title: $blogpost_subtitle, was saved!");
	}


} else {

}
?>
<p data-hide>
	<a href="dashboard.php" rel="back" data-icon="arroww">Dashboard</a>
</p>

<h3>New Post</h3>

<article role="form">
	
		<form action="#" method="post" id="postnew">
		<?php eagl_formField("blogpost_title", "text", "Title", "Blog Post Title", "required autocomplete='off'"); ?>
		<?php eagl_formField("blogpost_subtitle", "text", "Subtitle", "Blog Post Subtitle", "required autocomplete='off'"); ?>
		<input type="hidden" required autocomplete="off" name="blogpost_date" id="blogpost_date" value="<?php echo $eagl_today; ?>" />
		<input type="hidden" autocomplete="off" name="blogpost_dateNum" id="blogpost_dateNum" value="<?php echo $eagl_todayNum; ?>" />
		<label for="blogpost_content">Static HTML</label>
		<textarea name="blogpost_content" id="blogpost_content">