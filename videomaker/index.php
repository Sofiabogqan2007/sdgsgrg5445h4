<?php
// (A) START SESSION
session_start();

// (B) LOGOUT REQUEST
if (isset($_POST['logout'])) { unset($_SESSION['login']); }

// (C) REDIRECT TO PREVIEW PAGE IF LOGGED IN
if (!isset($_SESSION['login'])) {
  header("Location: guest");
  exit();
}
?>
<?php if (isset($_SESSION['login']) && $_GET["style"] == "vyond-legacy") { echo " <!DOCTYPE html>
	<html>
	  <head>
		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
		<meta charset=\"utf-8\">
		<title>The Video Maker On OurAnimate - Create Videos the way you want!</title>
		<style media=\"screen\">
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
		<iframe src=\"//josephcrosmanplays532.github.io/iframe/videomaker/2019\"></iframe>
	  </body>
	</html>"; } else { echo "
	<!DOCTYPE html>
	<html>
	  <head>
		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
		<meta charset=\"utf-8\">
		<title>The Video Maker On OurAnimate - Create Videos the way you want!</title>
		<style media=\"screen\">
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
		<iframe src=\"//josephcrosmanplays532.github.io/iframe/videomaker\"></iframe>
	  </body>
	</html>"; } ?>
