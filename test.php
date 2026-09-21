<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fazbear_entertainment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM rockstar_animatronics";
// Execute the SQL query
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="">
    <body>
        <form>
             <label for="fname">Animatronics:</label><br>
        </form>
    </body>
</html>
