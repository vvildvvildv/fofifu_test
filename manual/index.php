<?php
// define variables and set to empty values
$usernameErr = $emailErr = $genderErr = $websiteErr = $password1Err = $password2Err = "";
$username = $email = $gender = $website = $password1 = $password2 = "";

if (isset($_COOKIE)) {	//clear existing cookies used in registration form
	setcookie('username', "", time() - 3600, "/");
	setcookie('email', "", time() - 3600, "/");
	setcookie('website', "", time() - 3600, "/");
	setcookie('gender', "", time() - 3600, "/");
	setcookie('password2', "", time() - 3600, "/");
				}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$valid = true;	//Your indicator for your condition, actually it depends on what you need. I am just used to this method.
	if (empty($_POST["username"])) {	//validate username and set cookie
		$usernameErr = "Name is required";
		$valid = false;
	} else {
		$username = test_input($_POST["username"]);
		if (!preg_match("/^[a-zA-Z]*$/",$username)) {	// check if name only contains letters and if whitespace would be allowed need to write [a-zA-Z ] rather than [and
			$usernameErr = "Only letters are allowed";
			$valid = false;
		} else {
			if ($valid) {
				$cookie_name = "username";
				if (isset($_COOKIE[$cookie_name])) {
					setcookie($cookie_name, "", time() - 3600, "/");
				}
				$cookie_value = $_POST["username"];
				setcookie($cookie_name, $cookie_value, time() + (3600 * 30), "/"); // 3600 = 1 day	
			}
		}
	}
	if (empty($_POST["email"])) {	//validate email and set cookie
		$emailErr = "Email is required";
		$valid = false;
	} else {
		$email = test_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {	// check if e-mail address is well-formed
			$emailErr = "Invalid email format";
			$valid = false;
		} else {
			if ($valid) {
				$cookie_name = "email";
				if (isset($_COOKIE[$cookie_name])) {
					setcookie($cookie_name, "", time() - 3600, "/");
				}
				$cookie_value = $_POST["email"];
				setcookie($cookie_name, $cookie_value, time() + (3600 * 30), "/"); // 3600 = 1 day	
			}
		}
	}
	if (empty($_POST["website"])) {	//validate website and set cookie
		$website = "";
	} else {
		$website = test_input($_POST["website"]);
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {	// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
			$websiteErr = "Invalid URL";
			$valid = false;
		} else {
			if ($valid) {
				$cookie_name = "website";
				if (isset($_COOKIE[$cookie_name])) {
					setcookie($cookie_name, "", time() - 3600, "/");
				}
				$cookie_value = $_POST["website"];
				setcookie($cookie_name, $cookie_value, time() + (3600 * 30), "/"); // 3600 = 1 day	
			}
		}
	}
	if (empty($_POST["gender"])) {	//validate gender and set cookie
		$genderErr = "Gender is required";
		$valid = false;
	} else {
		$gender = test_input($_POST["gender"]);
		if ($valid) {
			$cookie_name = "gender";
			if (isset($_COOKIE[$cookie_name])) {
				setcookie($cookie_name, "", time() - 3600, "/"); //delete cookie
			}
			$cookie_value = $_POST["gender"];
			setcookie($cookie_name, $cookie_value, time() + (3600 * 30), "/"); // 3600 = 1 day	
			}
	}
	if (empty($_POST["password1"])) {	//validate password1
		$password1Err = "Password1 is required";
		$valid = false;
	} else {
		$password1 = test_input($_POST["password1"]);
		if (!preg_match("/^[a-zA-Z]/",$password1)) {
			$password1Err = "Only letters, number and certain special characters allowed";
			$valid = false; 
		}
		/*if ($valid) {	//this may not be needed as password2 will be set as cookie once password2 = password1
			$cookie_name = "password1";
			$cookie_value = $_POST["password1"];
			setcookie($cookie_name, $cookie_value, time() + (3600 * 30), "/", ""); // 3600 = 1 day	
		}*/
	}
	if (empty($_POST["password2"])) {	//validate password2 and set cookie
		$password2Err = "Password2 is required";
		$valid = false;
	} else {
		$password2 = test_input($_POST["password2"]);
		if (!preg_match("/^[a-zA-Z]/",$password2)) {
			$password2Err = "Only letters, number and certain special characters allowed";
			$valid = false; 
		}
		if ($password1 != $password2) {
			$password2Err = "Passwords do not match";
			$valid = false;
		} else {
			if ($valid) {
				$cookie_name = "password2";
				if (isset($_COOKIE[$cookie_name])) {
					setcookie($cookie_name, "", time() - 3600, "/");
				}
				$cookie_value = $_POST["password2"];
				setcookie($cookie_name, $cookie_value, time() + (3600 * 30), "/"); // 3600 = 1 day	
				
				header('Location: registration.php');
				exit;
			}
		}
	}
	
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
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
	

		<hr>
		<h2>PHP Form Validation Example</h2>
<p><span class="w3-red">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input class="w3-blue" type="text" name="username" value="<?php echo $username;?>">
  <span class="w3-red">* <?php echo $usernameErr;?></span>
  <br><br>
  E-mail: <input class="w3-blue" type="text" name="email" value="<?php echo $email;?>">
  <span class="w3-red">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input class="w3-blue" type="text" name="website" value="<?php echo $website;?>">
  <span class="w3-red"><?php echo $websiteErr;?></span>
  <br><br>
  Gender:
  <input class="w3-blue" type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input class="w3-blue" type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="w3-red">* <?php echo $genderErr;?></span>
  <br><br>

	 Password1: <input class="w3-blue" type="password" name="password1" value="<?php echo $password1;?>">
  <span class="w3-green">* <?php echo $password1Err;?></span>
	 Password2: <input class="w3-blue" type="password" name="password2" value="<?php echo $password2;?>">
  <span class="w3-green">* <?php echo $password2Err;?></span>
  <hr><hr>

  <input class="w3-blue" type="submit" name="submit" value="Submit">  
</form>

<?php
//print_r($_COOKIE);
echo "<h2>Your Input:</h2>";
echo $username;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<hr>";
echo $password1;
echo "<hr>";
echo $password2;
?>
		<hr>
	</main>
	<footer class="w3-purple">
		<?php include 'footer.php';?>
	</footer>
</body>
</html>
