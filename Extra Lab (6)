<!DOCTYPE html>
<html>
<body>

<?php

echo "<h1>lab3_secrets:</h1>";

//Add Secret
echo "<form>";
echo '<label for="secret">Secret:</label><br>';
echo '<input type="text" id="secret" name="secret" value="Enter a secret..."><br>';
echo "</form>";
echo "<br>";


//Add Radio Buttons
echo "Sort By:";
echo "<br>";
echo "<form>";

echo ' ','<label for="groupno">Group:</label>', ' ';
echo '<select> <option value ="1">1</option>';
echo '<option value ="2">2</option>';
echo '<option value ="3">3</option>';
echo '<option value ="4">4</option>';
echo '<option value ="5">5</option>';
echo '<option value ="6">6</option>';
echo '<option value ="7">7</option>';
echo '<option value ="8">8</option>';
echo '<option value ="9">9</option>';
echo '<option value ="10">10</option>';





echo '</select><br>';

echo '<input type="checkbox" id="secrets" name="secrets" value="groupno">';
echo ' ','<label for="secrets">Secret</label>', ' ';
echo '<input type="text" id="secret" name="secret" placeholder="Enter a secret..."><br>';

echo '<input type="checkbox" id="sentby" name="sentby" value="groupno">';
echo ' ','<label for="sentby">Sent By:</label>', ' ';
echo '<input type="text" id="secret" name="secret" placeholder="Enter a sent-by nom..."><br>';

echo "</form>";

$servername = "itools.cs.laurentian.ca";
$username = "lab3";
$password = "cosc2206";
$dbname = "lab3db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT group_number, secret, sent_by_group FROM lab3_secrets";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> # ". $row["group_number"]. " - Secret: [". $row["secret"]. "] Group: " . $row["sent_by_group"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
