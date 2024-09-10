<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $email = $_POST['email'];

  $sql = "INSERT INTO usuarios (username, email) VALUES ('$username', '$email')";
  if ($conn->query($sql) === TRUE) {
    echo "Usuario agregado exitosamente";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>
