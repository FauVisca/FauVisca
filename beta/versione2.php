<?php

    $servername = "8085:8080";
    $username = "admin";
    $password = "my_password";
    $dbname = "registrazione";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $provenienza = "Beta";
    $data= date("d/m/y H:m:s");


$sql = "INSERT INTO Accessi (user, passwords , provenienza, momento)
VALUES ($user,$pass,$provenienza,$data)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  }
?>