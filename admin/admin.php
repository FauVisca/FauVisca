<!DOCTYPE html>
<html>
<body>

<?php
$servername = "8085:8080";
$username = "admin";
$password = "my_password";
$dbname = "registrazione";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, user, passwords,provenienza,momento FROM Accessi";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - User: ". $row["user"]. " " . $row["passwords"]. " " . $row["provenienza"]. " " . $row["momento"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>