<footer>
<?php
	if ($eagl_developerInfo == "true") {
		include("includes/developerInfo.php");
	}
?>
	<section>
		<p class="social">
			<a href="#" data-icon="facebook"></a>
			<a href="#" data-icon="twitter"></a>
			<a href="#" data-icon="dribbble"></a>
<!-- 			<a href="#" data-icon="facebook"></a>
			<a href="#" data-icon="twitter"></a>
			<a href="#" data-icon="dribbble"></a> -->
		</p>

		

		
	</section>
</footer>
	<?php include "includes/inlinescripts.php"; ?>


	<?php
		if ($eagl_nostyles == "true") {
			echo "<script> $('link[rel=stylesheet]').remove(); </script>";
		}
	?>