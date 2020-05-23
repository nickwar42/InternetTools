<!-- This is Musicorum, my final project for Internet Tools. It is 5 different files, all divided by ----lines. 

If you're reading this, it means there must be SOME interest. Please hire me! I will work for food and board.
-->



<?php

session_start();
//$_SESSION["username"]='';
//$_SESSION["password"]='';

?>

<!DOCTYPE html>
<html lang="en">
<head>


<title> Musicorum, a music review site! </title>
<link rel="stylesheet" type="text/css" href="style1.css"> 
<link rel="icon" href="https://gifimage.net/wp-content/uploads/2018/05/spinning-record-gif-9.gif">
</head>

<body>
<div id="wholepage">

<?php

if(isset($_SESSION['userReg'])){
echo '<h2 style="float:right;" class="title"> Acct: ';
echo $_SESSION["userReg"], '</h2>';


$db = new mysqli('coscvm33.cs.laurentian.ca','root','Nickwar42@', 'Musicorum');
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

}
else{
echo '<a style="float:right; color:burlywood;" class="title" href="https://coscvm33.cs.laurentian.ca/Project/signin.php"> Sign In </a>';
}
if(isset($_SESSION['userReg'])){

}
?>

<div class="main">
<a class="title" style="font-size:64px; text-align:center;" href="http://coscvm33.cs.laurentian.ca/Project/Musicorum.php">Musicorum!</a>
<h2 class="title"> It's latin for music! </h2>
<a href="http://coscvm33.cs.laurentian.ca/Project/Shelf.php" class="title">My Shelf</a>

<div class="space"></div>
<div class= "space"></div>
<a class="title"  href="http://coscvm33.cs.laurentian.ca">Home</a>
<div class="space"></div>

<?php if(isset($_SESSION['userReg'])){
echo '<form method="POST">';
echo '<input type="submit" name="logout" value="Logout">';
}

if(isset($_POST['logout'])){

// remove all session variables
session_unset();

// destroy the session
session_destroy();

header('Location: Musicorum.php');
}



?>
</form>
</div>
<br><br>

<div>
<form action="Search.php"> 
<input style="width:15%; box-sizing: border-box;" placeholder="Enter a Song, Artist, or User..." type="text" id="search" name="search">
<input type="submit" value="Submit">
</form>
</div>

<div class="space"></div>

<div class="topnine">
<a class="title" style="font-size:64px; text-align:left; padding-left: 12px;"> Top Nine! </a>
</div>

</div>
</body>

</html>

---------------------------------------------------------

Search:
<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Musicorum, a music review site! </title>
<link rel="stylesheet" type="text/css" href="style1.css"> 
<link rel="icon" href="https://gifimage.net/wp-content/uploads/2018/05/spinning-record-gif-9.gif">
</head>

<body>
<div id="wholepage">


<!-- Getting the positioning right gave me grey hairs. 04/12/20 -->

<?php
if(isset($_SESSION["userReg"])){
//$username = $_SESSION["username"];

echo '<h2 style="float:right;" class="title"> Acct: ';
echo $_SESSION["userReg"], '</h2>';


$db = new mysqli('coscvm33.cs.laurentian.ca','root','Nickwar42@', 'Musicorum');
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);

}
}
else{
echo '<a style="float:right; color:burlywood;" class="title" href="https://coscvm33.cs.laurentian.ca/Project/signin.php"> Sign In </a>';
}

?>

<div class="main">
<a class="title" style="font-size:64px; text-align:center;" href="http://coscvm33.cs.laurentian.ca/Project/Musicorum.php">Musicorum!</a>
<h2 class="title" style="text-align: center;"> It's latin for music! </h2>
<a href="http://coscvm33.cs.laurentian.ca/Project/Shelf.php" class="title">My Shelf</a>
<div class="space"></div>
<div class= "space"></div>
<a class="title"  href="http://coscvm33.cs.laurentian.ca">Home</a>
<div class="space"></div>


<?php if(isset($_SESSION['userReg'])){
echo '<form method="POST">';
echo '<input type="submit" name="logout" value="Logout">';
}

if(isset($_POST['logout'])){

// remove all session variables
session_unset();

// destroy the session
session_destroy();

header('Location: Musicorum.php');
}



?>


</div>
<br><br>

<form action="Search.php">
<input style="width:15%; box-sizing: border-box;" placeholder="Enter a Song, Artist, or User..." type="text" id="search" name="search">
<input type="submit" value="Submit">
</form>

<div class="space"></div>
<div class="middle">
<a class="title" style="font-size:64px; text-align:center; padding-left:12px;"> Search Results: </a>
<style>

p{
color:burlywood;
font-size: 18px;
}

</style>

<?php
echo "<p> The search returned:</p>";

//Both Song and Artist. Show song on left, artist on right.

$song_name = $_REQUEST["search"];
$artist_name = $_REQUEST["search"];
echo "<p>";
echo $_GET["search"];
echo"</p>"
?>



</div>
</div>
</body>


</html>

------------------------------------------------------
Shelf:
<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>

<title> Musicorum/ Your Shelf! </title>
<link rel="stylesheet" type="text/css" href="style1.css"> 
<link rel="icon" href="https://gifimage.net/wp-content/uploads/2018/05/spinning-record-gif-9.gif">
</head>

<body>
<div id="wholepage">
<?php
if(isset($_SESSION['userReg'])){
//$username = $_SESSION['username'];

echo '<h2 style="float:right;" class="title"> Acct: ';
echo $_SESSION["userReg"], '</h2>';


$db = new mysqli('coscvm33.cs.laurentian.ca','root','Nickwar42@', 'Musicorum');
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);

}

}
else{
echo '<a style="float:right; color:burlywood;" class="title" href="https://coscvm33.cs.laurentian.ca/Project/signin.php"> Sign In </a>';
}

?>

<div class="main">
<a class="title" style="font-size:64px; text-align:center;" href="http://coscvm33.cs.laurentian.ca/Project/Musicorum.php">Musicorum!</a>
<h2 class="title"> It's latin for music! </h2>
<a href="http://coscvm33.cs.laurentian.ca/Project/Shelf.php" class="title">My Shelf</a>

<div class="space"></div>
<div class= "space"></div>
<a class="title"  href="http://coscvm33.cs.laurentian.ca">Home</a>
<div class="space"></div>

<?php
if(isset($_SESSION['userReg'])){
echo '<form method="POST">';
echo '<input type="submit" name="logout" value="Logout">';
}

if(isset($_POST['logout'])){


session_unset();
session_destroy();

header('Location: Musicorum.php');
}



?>
</form>
</div>
<br><br>

<div>
<form action="Search.php"> 
<input style="width:15%; box-sizing: border-box;" placeholder="Enter a Song, Artist, or User..." type="text" id="search" name="search">
<input type="submit" value="Submit">
</form>
</div>

<div class="space"></div>

<div class="shelf">
<a class="title" style="font-size:64px; text-align:left;"> Shelf: </a>
</div>

</div>
</body>

</html>

------------------------------------------------------------
Signin: (currently borked)

<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>


<title> Musicorum, a music review site! </title>
<link rel="stylesheet" type="text/css" href="style1.css"> 
<link rel="icon" href="https://gifimage.net/wp-content/uploads/2018/05/spinning-record-gif-9.gif">
</head>

<body>
<div id="wholepage">
<?php

if(isset($_SESSION["userReg"])){
//$username = $_SESSION["username"];

echo '<h2 style="float:right;" class="title"> Acct: ';
echo $_SESSION["userReg"], '</h2>';

$db = new mysqli('coscvm33.cs.laurentian.ca','root','Nickwar42@', 'Musicorum');

//$sql = "select * from users";
//
//$result = $db->query($sql);
// if(! $result){
// die("broke: ". mysql_error());
 //}else{
//while ($row = mysqli_fetch_assoc($result)) {
//     echo $row['username'];
//echo '<br>';
//     echo $row['password'];
// }
//}

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);

}
else{
echo '<a style="float:right; color:burlywood;" class="title" href="https://coscvm33.cs.laurentian.ca/Project/signin.php"> Sign In </a>';
}

}

//Registration
 





?>
<div class="main">
<a class="title" style="font-size:64px; text-align:center;" href="http://coscvm33.cs.laurentian.ca/Project/Musicorum.php">Musicorum!</a>
<h2 class="title"> It's latin for music! </h2>
<a href="http://coscvm33.cs.laurentian.ca/Project/Shelf.php" class="title">My Shelf</a>

<div class="space"></div>
<div class= "space"></div>
<a class="title"  href="http://coscvm33.cs.laurentian.ca">Home</a>
<div class="space"></div>



   <script src="script.js"></script>

<?php

 if(isset($_SESSION["userReg"])){
echo '<form method="POST" onSubmit="return validate();">';
echo '<input type="submit" name="logout" value="Logout">';
}

if(isset($_POST['logout'])){

session_unset();
session_destroy();


header('Location: Musicorum.php');
}



?>
</form>
</div>
<br><br>

<div>
<form action="Search.php"> 
<input style="width:15%; box-sizing: border-box;" placeholder="Enter a Song, Artist, or User..." type="text" id="search" name="search">
<input type="submit" value="Submit">
</form>
</div>

<div class="space"></div>

<div class="signin"> 

<form method="POST">
<h2> Login </h2>
    <label for="userIn"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="userIn">

    <label for="passIn"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="passIn">
        
    <button type="submit" name="login">Login</button>

<form method="POST">
<h2> Register </h2>
<label for="userReg"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="userReg">

    <label for="passReg"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="passReg">

    <button type="submit" name="register">Login</button>

</form>

  </div>

<?php

if(isset($_POST['register'])){

$_SESSION["userReg"] = $_POST['userReg'];
$_SESSION["passReg"] = $_POST['passReg'];

$db = new mysqli('coscvm33.cs.laurentian.ca','root','Nickwar42@', 'Musicorum');

//See if registered
$sql = "select username from users where username = '" . $_SESSION["userReg"] . "'";

$result = $db->query($sql);

while ($row = mysqli_fetch_assoc($result)) {

//if in database
if($row['username'] == $_SESSION['userReg']){
echo '<h1 class="title">That name is already taken! </h1>';
}
//Enter into database
else{
$sql = "insert into users (username, password) values ('" . $_SESSION["userReg"] . " ', '" . $_SESSION["passReg"] . "')";
$result = $db->query($sql);

header('Location: Musicorum.php');
}
}
}

?>

<!-- Login Info -->

</form>
</div>
</body>

</html>

-----------------------------------------------------------------
Style:

body{
background-image: url("/Photos/Wallpaper.jpeg");
background-size: cover;
text-align: center;
background-position: center center;
}

.title {
color:burlywood;
font-size:30px;
text-shadow: 4px 3px 0 #7A7A7A;
}

div.container{
margin: auto;
}

div.main{
position: absolute;
  left: auto;
  width: 350px;
  max-height: 800px;
float:left;
overflow:hidden;
height:  95%;

}
div.topnine{
margin:right;
max-height: 800px;
width: 900px;
height: 665px;
text-align:left;
float:right;
overflow:hidden;
background-image:url(" /Photos/ezgif.com-gif-maker.gif");
background-repeat:no-repeat;
background-size: 750px 750px;
}
div.signin{
margin:right;
max-height: 800px;
width: 900px;
height: 665px;
text-align:left;
float:right;
overflow:hidden;
}

div.shelf{
margin:right;
max-height: 800px;
width: 900px;
height: 665px;
text-align:left;
float:right;
overflow:hidden;
background-image:url("http://www.freeiconspng.com/uploads/blank-store-shelf-png-1.png ");
background-repeat:no-repeat;
background-size: 900px 750px;
}

div.space{
padding: 20px 0px;
}

html{
height: 100%;

//TO DO: FIX  
/* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: auto;
}

#wholepage{
width: 1400px;
margin-left: auto;
margin-right: auto;

}

-----------------------------------------------

Script:

function validate(){

var userIn = document.getElementById("userReg");
var passIn= document.getElementById("passReg");
var username = "username";
var password = "password";

if((userIn == username) && (passIn == password) $$ (userIn.length >= 5) $$ (passIn.length >=8)){
return true;
}
else{
alert("Please check your data and try again.");
return false;
}


