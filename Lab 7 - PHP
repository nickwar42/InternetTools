<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title> Lab 7, Cookies! </title>
<div style="width: 100%; font-size: 69px; font-weight: bold; text-align: center;"> Lab 7 - Cookies</div>

<?php

$username = '';
$password ='';

?>
<div class="w3-bar w3-black">
  <a href="http://itools.cs.laurentian.ca/" class="w3-bar-item w3-button">iTools</a>
  <a href="http://coscvm33.cs.laurentian.ca/" class="w3-bar-item w3-button">Home</a>
  <a href="/Labs/lab2.html" class="w3-bar-item w3-button">Lab 2</a>
  <a href="/Labs/lab3.html" class="w3-bar-item w3-button">Lab 3</a>
   <a href="/Labs/lab4.php" class="w3-bar-item w3-button">Lab 4</a>
<a href="/Labs/lab5.php" class="w3-bar-item w3-button">Lab 5</a>
<a href="http://coscvm33.cs.laurentian.ca/myadmin/" class="w3-bar-item w3-button">Lab 6</a>
  <a href="/Labs/extralab.php" class="w3-bar-item w3-button">Lab 7? 6.5?</a>  
<a href="/Labs/lab7.php" class="w3-bar-item w3-button">Lab 7</a>
  <a href="/Labs/lab8.php" class="w3-bar-item w3-button">Lab 8</a>
 <a href="/Project/Musicorum.php" class="w3-bar-item w3-button">Project</a>
</div>

<body style=background-color:firebrick;>

<!-- Start of Lab 8 -->
<br>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<h3>Register: </h3>
<input type="text" name="username" placeholder="Enter Username..."> <br>
<input type="text" name="password" placeholder="Enter Password..."> <br>
<input type="submit" name="submit" value="Submit">
<br>

<?php

$username = '';
$password ='';
if(isset($_POST['submit'])){

$username = htmlentities($_POST['username']);
$password = htmlentities($_POST['password']);

setcookie('username', $username, time() + 7200);
setcookie('password', $password, time() + 7200);

header('Location: lab8.php');

}

// I DONT KNOW WHAT I DID BUT THIS WONT READ THE COOKIE
echo 'User:', $_COOKIE["username"];

echo '<br>';

echo 'Pass:', $_COOKIE["password"];


echo '<h3> Delete Cookie(click twice):</h3>';
echo '<form method ="POST">';
echo '<input type="submit" name="nomnom" value="Nom nom">';


//DELETING COOKIES
if(isset($_POST['nomnom'])){
setcookie('username', time() - 7200);
setcookie('password', time() - 7200);
setcookie('count', time() - 7200);


}
?>
</body>
</html>
