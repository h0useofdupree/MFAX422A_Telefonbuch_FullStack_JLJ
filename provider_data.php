<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "telefonbuch";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM providers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["phone_number"] . "</td>";
    echo "<td>" . $row["first_name"] . "</td>";
    echo "<td>" . $row["last_name"] . "</td>";
    echo "<td>" . $row["address"] . "</td>";
    echo "<td>" . $row["house_number"] . "</td>";
    echo "<td>" . $row["zip_code"] . "</td>";
    echo "<td>" . $row["city"] . "</td>";
    echo "<td>" . $row["status"] . "</td>";
    echo "</tr>";
  }
} else {
  echo "<tr><td colspan='8'>Keine Daten gefunden</td></tr>";
}
$conn->close();
