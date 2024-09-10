<?php
include 'connect.php';

$sql = "SELECT username, email FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<ul>";
  while($row = $result->fetch_assoc()) {
    echo "<li>" . $row["username"] . " - " . $row["email"] . "</li>";
  }
  echo "</ul>";
} else {
  echo "No hay usuarios registrados";
}
$conn->close();
?>
