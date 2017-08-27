
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
<body>


<?php
	$cookie_name = "username";
	if(!isset($_COOKIE[$cookie_name])) {
		echo "Cookie named '" . $cookie_name . "' is not set!";
	} else {
		echo "Cookie '" . $cookie_name . "' is set!<br>";
		echo "Value is: " . $_COOKIE[$cookie_name] . "<hr>";
	}
	$cookie_name = "email";
	if(!isset($_COOKIE[$cookie_name])) {
		echo "Cookie named '" . $cookie_name . "' is not set!<br>";
	} else {
		echo "Cookie '" . $cookie_name . "' is set!<br>";
		echo "Value is: " . $_COOKIE[$cookie_name] . "<hr>";
	}
	$cookie_name = "website";
	if(!isset($_COOKIE[$cookie_name])) {
		echo "Cookie named '" . $cookie_name . "' is not set!<br>";
	} else {
		echo "Cookie '" . $cookie_name . "' is set!<br>";
		echo "Value is: " . $_COOKIE[$cookie_name] . "<hr>";
	}
	$cookie_name = "gender";
	if(!isset($_COOKIE[$cookie_name])) {
		echo "Cookie named '" . $cookie_name . "' is not set!<br>";
	} else {
		echo "Cookie '" . $cookie_name . "' is set!<br>";
		echo "Value is: " . $_COOKIE[$cookie_name] . "<hr>";
	}
	$cookie_name = "password2";
	if(!isset($_COOKIE[$cookie_name])) {
		echo "Cookie named '" . $cookie_name . "' is not set!<br>";
	} else {
		echo "Cookie '" . $cookie_name . "' is set!<br>";
		echo "Value is: " . $_COOKIE[$cookie_name] . "<hr>";
	}
	print_r($_COOKIE);
?>

	<!--Your email address is: <?php /* echo $_POST["email"];?>
	<?php $txt = $_POST["check"];
	$fin = str_replace('on','checked',$txt); //turn what's in $txt into -checked-
	//echo $txt;?>
	T&amp;Cs <?php echo $fin;*/?>

<script>
window.onload = function(){
   setInterval(function(){
      window.location.href = 'test.php';
   }, 20000);
};

</script> -->
</body>
</html>
