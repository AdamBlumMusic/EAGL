<?php include "includes/head.php"; ?>
<title>Adam Blum</title>
</head> 
<body>
<?php include "includes/legacy.php"; ?>
<?php include "includes/navigation.php"; ?>

<?php 
	$post = $_GET['post'];
	$thepagecontent = file_get_contents("$post");
	$myFile = $post;
 ?>

<?php
if (isset($_POST['page_content'])) {
	$page_content = $_POST['page_content'];

	$ourFileHandle = fopen("$myFile", 'wb') or die("can't open filea");
	fclose($ourFileHandle);

	$fh = fopen($myFile, 'w') or die("can't open fileee");
			$stringData = "$page_content";
			fputs($fh, $stringData);
			fclose($fh);
			eagl_alert("Success", "Your page, $post, was saved!");
			echo "<p><a href='files.php' rel='back' data-icon='arroww' role='button'>View Changes</a></p>";
		} else {
			echo "<p><a href='files.php' rel='back' data-icon='arroww'>Go back</a></p>";
		}
?>


<form action="#" method="post">
	<textarea name="page_content" id="page_content" class="large">
<?php echo $thepagecontent; ?>
	</textarea>
	<input type="submit" />
</form>


<?php include "includes/footer.php"; ?>
</body>
</html>