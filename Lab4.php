<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title> Lab 4, PHP! </title>

<p style="font-size:2px;"> remember, its whats inside that counts :)</p>
<div style="width: 100%; font-size: 69px; font-weight: bold; text-align: center;"> Lab 4 - PHP</div>
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


<!-- Start of Lab 4 -->

<!-- Simple Output -->
 <?php echo "<h3> Whats 9 + 10? </h3>";
//Math calculation 
$x = 11;
$y = 10;
echo $x + $y;

//String processing
echo "<p> apple to UPPER: </p>";
$str = "apple";
echo strtoupper($str ) ;

//Array
$array = array(
1 => "apple",
2 => "banana",
3 => "coconut",
"f" =>"donut",
"23" => "eggplant",
);

echo '<p>Array: <p>';
var_dump($array);
//Loops
foreach ($array as $value){
        echo "<br> $value";
}
?>

<!-- LOOP/TABLE -->

<!-- Commented because this was written at 7:53 pm Friday night. Scouts honour.

<table border="1px">
         <tr>
            <th> Array key</th>
            <th> Value</th>
         </tr>

-->

<?php
$i = 1;

/* Commented because this was written at 7:53 pm Friday night. Scouts honour.
foreach ($array as $key => $value){
	echo "<tr>";
	echo "<td>$key </td>" ;
	echo "<td>$value</td>"; 
	echo "</tr>";
	$i++;

}
*/	
 ?>
</body>
</html>
