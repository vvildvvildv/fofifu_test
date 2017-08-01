<!DOCTYPE html>
<html lang="en">
<head>
	<title>HTML5 template</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="The head tag contains the title and meta tags - important to the search engines, and information for the browser to properly display the page." />
	<link rel="stylesheet" type="text/css" href="basic.css">
	<link rel="stylesheet" href="w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script type="text/javascript" src="basic.js" defer></script>
	<!--can add multiple -> <script type="text/javascript" src="path/to/script2.js" defer> and each will be executed(downloaded and launched) in order</script>-->
</head>
<body class="w3-yellow">
	<header class="w3-deep-orange">
		<?php include 'header.php';?>
	</header>
	<main class="w3-teal"><!--let's say displayed page is made out of 3 sections:left sidebar,MIDDLE and right sidebar - stuff in <main> is for MIDDLE only-->
		<?php include 'main.php';?>
	</main>
	<footer class="w3-purple">
		<?php include 'footer.php';?>
	</footer>
</body>