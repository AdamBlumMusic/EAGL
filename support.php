<?php include "includes/head.php"; ?>
	<title>Adam Blum</title>
</head>
<body>
	<?php include "includes/legacy.php"; ?>
	<?php include "includes/navigation.php"; ?>
	<?php eagl_secure(); ?>

<article>
	<header>
		<h1>Support</h1>
	</header>
	<article role="grid">
		<aside role="gridcell">
			<h4>Table of Contents</h4>
			<ul role="directory">
				<li><a href="#" role="link">Introduction</a></li>
				<li><a href="#" role="link">Basic Configuration</a></li>
				<li><a href="#" role="link">Adding Posts</a></li>
				<li><a href="#" role="link">Link</a></li>
				<li><a href="#" role="link">Link</a></li>
				<li><a href="#" role="link">Link</a></li>
				<li><a href="#" role="link">Link</a></li>
				<li><a href="#" role="link">Link</a></li>
				<li><a href="#" role="link">Link</a></li>
				<li><a href="#" role="link">Link</a></li>
				<li><a href="#" role="link">Link</a></li>
			</ul>
		</aside>
		<section role="gridcell">
			<h2>Contact Webmaster</h2>
			<p>If you need to contact <?php echo $eagl_Webmaster; ?> directly, fill out the form below:</p>
			
			<form action="#" method="post">
				<?php eagl_formField("Subject", "text", "Subject"); ?>
				<label for="supportMessage">Message</label>
		<textarea name="supportMessage" id="supportMessage"></textarea>
		<input type="submit" />

			</form>

		</section>
</article>


	<h2>Introduction</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, quisquam, illum eos saepe accusantium deserunt hic ratione blanditiis temporibus nesciunt dolorum aliquam esse optio. Suscipit, optio enim eum recusandae consequuntur.</p>


	<section role="alert">
		<h4>Update</h4>
		<p>hey</p>
	</section>
	
<h2>Creating Pages</h2>
<p>When creating custom pages, there are a number of required files and php functions that must be included in order to integrate with EAGL. Here is an example blank page for creating new pages:</p>


<pre>
&lt;?php include "includes/head.php"; ?&gt;
&lt;title&gt;Adam Blum&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;?php include "includes/legacy.php"; ?&gt;
&lt;?php include "includes/navigation.php"; ?&gt;

&lt;!- Add Content Here --&gt;

&lt;?php include "includes/footer.php"; ?&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>

<p>To make a page only available when logged in, use the following function:</p>
<pre>
&lt;?php eagl_secure(); ?&gt;
</pre>
<p>If you are not logged in, any page running  <code>eagl_secure()</code> will be redirected to the admin login page.</p>

<?php eagl_formField("hola", "text", "Type your name"); ?>

<?php eagl_formField("hola2", "text", "Type your name", "placeholder", "required"); ?>


</article>

<?php include "includes/footer.php"; ?>
</body>
</html>