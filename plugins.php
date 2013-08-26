<?php include "includes/head.php"; ?>
	<title>Adam Blum</title>
</head>
<body>
	<?php include "includes/legacy.php"; ?>
	<?php include "includes/navigation.php"; ?>
	<?php eagl_secure(); ?>
<h3>Installed Plugins</h3>
<p>The following plugins are installed on this instance of EAGL:</p>
<article role="group">
	<?php eagl_generateFilelist("_eagl_plugins/"); ?>
</article>
<p>Click any file to open the file editor; make sure you know what you're doing when you change these files.</p>

<p role="note" rel="about plugins">Plugins are files that extend the abilities of EAGL beyond what is included in core. With plugins, you can create custom functions and variables to be used anywhere in your pages, as well as perform server-side functions. Plugins are intended to be modular in nature, so a simple custom variable should be defined in your <code>functions.php</code> file.</p>

<?php include "includes/footer.php"; ?>
</body>
</html>