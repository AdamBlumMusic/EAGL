<?php include "includes/head.php"; ?>
<title>Adam Blum</title>
</head> 
<body>
<?php include "includes/legacy.php"; ?>
<?php include "includes/navigation.php"; ?>


<article role="article">
	<header>
		<h1>Features</h1>
		<h2>Fun Stuff</h2>
	</header>

	<p>EAGL is a fully-functional blogging and website creation platform written in PHP.</p>


	<h2>Features</h2>

	<ul>
		<li>Config file for easy configuration</li>
		<li>Ability to add custom functions</li>
		<li>Blog post editor</li>
		<li></li>
		<li>Ability to add custom plugins</li>
		<li></li>
		<li></li>
		<li></li>
	</ul>


	<h3>Config.php Features</h3>
	<p>EAGL uses a <code>config.php</code> file to manage assets and metadata. More specifically:</p>
		<ul>
			<li>Include scripts, where you specify order</li>
			<li>Include stylesheets, where you specify order</li>
			<li>Add metadata for each page, such as descriptions and authors</li>
			<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
			<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
			<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
		</ul>

	<figure>
		<img src="img/screenshots/cms_edit.png" alt="">
		<figcaption>Example of the EAGL post editor <cite>Adam Blum</cite></figcaption>
	</figure>

	<h3>Admin Dashboard</h3>
	<p>The admin section features a new custom menu at the top of the website (similar to WordPress), and additional pages where you can create new blog posts, editing configuration files, and check general site statistics.</p>


	<h3>Custom Plugins</h3>
	<p>EAGL has an <code>_eagl_plugins</code> directory where you can put php files to run custom scripts on your site. All files in this folder are automatically run on each page.</p>

	<p>An example of the <code>getUA()</code> function provided by the <code>useragent.php</code> plugin:</p>
	<p><code><?php getUA(); ?></code></p>



</article>





<?php include "includes/footer.php"; ?>
</body>
</html>