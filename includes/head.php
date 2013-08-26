<!--
Adam Blum Official Website
Created with EAGL
-->
<?php session_start(); ?>
	<!doctype html>
	<html lang="en" class="no-js" <?php if ($_SESSION['loggedIn'] == "true") { echo "data-logged-in";} ?>>
	<head>
	
	<?php include "_eagl/core.php"; ?>
	<?php include "_eagl/functions.php"; ?>
	
	<meta charset="<?php echo $eagl_meta_charset; ?>">
	<meta name="description" content="<?php echo $eagl_meta_content; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">