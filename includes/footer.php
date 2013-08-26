<footer aria-label="Site Footer">
	<article role="grid">
			<section role="gridcell">
		<p>&copy; <?php echo date("Y"); ?> <?php echo $eagl_author; ?></p>
		<p role="note">Created with EAGL</p>
<?php
	if ($eagl_developerInfo == "true") {
		include("includes/developerInfo.php");
	}
?>
	</section>
	<section role="gridcell">
		<p class="social">
			<a href="#" data-icon="facebook"></a>
			<a href="#" data-icon="twitter"></a>
			<a href="#" data-icon="dribbble"></a>
		</p>
	</section>

</article>



</footer>
	<?php include "includes/inlinescripts.php"; ?>


	<?php
		if ($eagl_nostyles == "true") {
			echo "<script> $('link[rel=stylesheet]').remove(); </script>";
		}
	?>

		<?php
		if ($eagl_noscripts == "true") {
			echo "<script> $('script').remove(); </script>";
		}
	?>