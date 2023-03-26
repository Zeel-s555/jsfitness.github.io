<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "gym";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully <br>";

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$msg = $_POST['msg'];


$sql = "INSERT INTO contact (name, email, number, message)
VALUES ('$name', '$email', '$number', '$msg')";

if ($conn->query($sql) === TRUE) {
  echo "Thanks For Contacting Us.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>