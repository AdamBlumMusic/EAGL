<?php include "includes/head.php"; ?>
	<title>Adam Blum</title>
</head>
<body>
	<?php include "includes/legacy.php"; ?>
	<?php include "includes/navigation.php"; ?>
<article>
	<header>
		<h1>Login</h1>
	</header>
</article>

<?php
if (isset($_POST['user'])) {
  $userAttempt = $_POST['user'];
  $passAttemptNoHash = $_POST['pass'];



  $passAttemptHashed = hash('whirlpool', $passAttemptNoHash);


  if ($userAttempt == "$eagl_user" && $passAttemptHashed == "$eagl_pass") {
    eagl_loginSuccess();
  } else {
    eagl_loginFailure();
  }
}


?>

<form action="#" method="post">
	<label for="user">Username</label>
	<input type="text" name="user" id="user" />

	<label for="pass">Password</label>
	<input type="password" name="pass" id="pass" />

	<input type="submit" value="login">
</form>

<?php include "includes/footer.php"; ?>
</body>
</html>