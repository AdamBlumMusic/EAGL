<?php include "includes/head.php"; ?>
	<title>Adam Blum</title>
</head>
<body>

<?php include "includes/legacy.php"; ?>

<?php include "includes/navigation.php"; ?>


<article>
	<header>
		<h1>Get in Touch</h1>
	</header>

	<p>Have a question or want to work on a project with me? Let me know!</p>


	<form action="#" method="post">

	<section>
		<fieldset>
			<label for="name">Name</label>
			<input type="text" placeholder="Name" name="name"  id="name" />

			<label for="email" rel="no spam, I promise">Email Address</label>
			<input type="email" placeholder="email@example.com" name="email" id="email" />

			<label for="website">Website</label>
			<input type="url" placeholder="www.example.com" name="website" id="website" />

			<label for="comments">Comments</label>
			<textarea name="comments" id="comments"></textarea>
		</fieldset>
</section>




<input type="submit" value="Send Form" />


		
	</form>

</article>


<?php include "includes/footer.php"; ?>
	
</body>
</html>