<!--
Adam Blum Official Website
Created with EAGL
-->
<?php session_start(); ?>


	<!doctype html>
	<html lang="en" class="no-js" <?php if ($_SESSION['loggedIn'] == "true") { echo "data-logged-in";} ?>>
	<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include "includes/functions.php"; ?>