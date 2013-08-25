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


//	chmod($myFile, 0755);

} else {

}
?>
<p data-hide>
	<a href="dashboard.php" rel="back" data-icon="arroww">Dashboard</a>
</p>

<h3>New Post</h3>

<article role="form">
	
		<form action="#" method="post" id="postnew">
		<label for="blogpost_title">Title</label>
		<input type="text" required autocomplete="off" name="blogpost_title" id="blogpost_title" />

		<label for="blogpost_subtitle">Subtitle</label>
		<input type="text" required autocomplete="off" name="blogpost_subtitle" id="blogpost_subtitle" />

		<label for="blogpost_date">Date</label>
		<input type="text" required autocomplete="off" name="blogpost_date" id="blogpost_date" value="<?php echo $eagl_today; ?>" />

		<input type="hidden" autocomplete="off" name="blogpost_dateNum" id="blogpost_dateNum" value="<?php echo $eagl_todayNum; ?>" />


		<label for="blogpost_content">Static HTML</label>
		<textarea name="blogpost_content" id="blogpost_content"></textarea>
		<p role="note" rel="Info">Anything written in the Static HTML field is placed below the main content in the post. If you wish to write the post entirely in HTML, that can be done as well. Server-side code such as php cannot be included.</p>

		<label for="blogpost_eagl_code">EAGL Code</label>
		<input type="text" autocomplete="off" name="blogpost_eagl_code" id="blogpost_eagl_code" />
		<ul role="note" rel="Eagl Codes">
			<li><code>eagl_del</code> will delete the current post</li>
			<li><code>eagl_draft</code> will save the current post as a draft</li>
			<li><code>eagl_del</code> will delete the current post</li>
		</ul>
		
		</form>


<h4>Editor</h4>

<section role="group" id='editControls'>
			<nav role="toolbar">
				<a role="button" data-icon="undo" data-role='undo' href='#'></a>
				<a role="button" data-icon="redo" data-role='redo' href='#'></a>
				<a role="button" data-icon="bold" data-role='bold' href='#'></a>
				<a role="button" data-icon="italic" data-role='italic' href='#'></a>
				<a role="button" data-icon="underline" data-role='underline' href='#'></a>
				<a role="button" data-icon="strikethrough" data-role='strikeThrough' href='#'></a>
				<a role="button" data-icon="pilcrow" data-role='p' href='#'></a>
				<a role="button" data-icon="leftalign" data-role='justifyLeft' href='#'></a>
				<a role="button" data-icon="center" data-role='justifyCenter' href='#'></a>
				<a role="button" data-icon="rightalign" data-role='justifyRight' href='#'></a>
				<a role="button" data-icon="justify" data-role='justifyFull' href='#'></a>
				<a role="button" data-icon="indentright" data-role='indent' href='#'></a>
				<a role="button" data-icon="indentleft" data-role='outdent' href='#'></a>
				<a role="button" data-icon="ul" data-role='insertUnorderedList' href='#'></a>
				<a role="button" data-icon="ol" data-role='insertOrderedList' href='#'></a>
			</nav>

			<nav role="toolbar">
				<a role="button" data-role='h1' href='#'>h1</a>
				<a role="button" data-role='h2' href='#'>h2</a>
				<a role="button" data-role='h3' href='#'>h3</a>
				<a role="button" data-role='h4' href='#'>h4</a>
				<a role="button" data-role='h5' href='#'>h5</a>
				<a role="button" data-role='h6' href='#'>h6</a>
				<a role="button" data-role='pre' href='#'>pre</a>
				<a role="button" data-role='subscript' href='#'>x<sup>1</sup></a>
				<a role="button" data-role='superscript' href='#'>x<sub>1</sub></a>
			</nav>
		</section>
				<div contenteditable="true" id="ce01"></div>	

				<form>
					<p role="note" rel="Info">Anything written in the Static HTML field is placed below the main content in the post. If you wish to write the post entirely in HTML, that can be done as well. Server-side code such as php cannot be included.</p>
					<input type="submit" form="postnew" name="submit" id="submit" />
				</form>



</article>






<script>
	$("#ce01").keyup(function() {
  //		$("#blogpost_content").val($("#ce01").html());
	});

	$("#submit").click(function() {
		var content = $("#ce01").html();
		var oldcontent = $("#blogpost_content").val();
  		$("#blogpost_content").val(content + "\n" + oldcontent);
	});
</script>


<?php include "includes/footer.php"; ?>
</body>
</html>