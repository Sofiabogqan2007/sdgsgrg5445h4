<?php
// (A) START SESSION
session_start();

// (B) LOGOUT REQUEST
if (isset($_POST['logout'])) { unset($_SESSION['login']); }

// (C) REDIRECT TO PREVIEW PAGE IF NOT LOGGED IN
if (!isset($_SESSION['login'])) {
  header("Location: /login?returnTo=/videomaker/full");
  exit();
}
?>
<!DOCTYPE html>
	<html>
	  <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<title>The Video Maker On OurAnimate - Create Videos the way you want!</title>
		<style media="screen">
		  html,body,iframe {
			margin: 0;
			padding: 0;
		  }
		  html,body {
			height: 100%;
			overflow: hidden;
		  }
		  iframe {
			width: 100%;
			height: 100%;
			border: 0;
		  }
		</style>
	  </head>
	  <body>
		<iframe src="//app-ouranimate.herokuapp.com/c9wreioucghebyxou3ebe"></iframe>
	  </body>
	</html>
