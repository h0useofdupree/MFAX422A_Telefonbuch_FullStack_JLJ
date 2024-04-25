<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "telefonbuch"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$nachname = $_GET['nachname'];
$rufnummer = $_GET['rufnummer'];


$sql = "SELECT * FROM providers WHERE nachname LIKE '%$nachname%' AND rufnummer LIKE '%$rufnummer%'";
$result = $conn->query($sql);

// Ergebnisse ausgeben
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<p>Rufnummer: " . $row["rufnummer"] . " - Name: " . $row["name"] . "</p>";

  }
} else {
  echo "Keine Daten gefunden";
}
$conn->close();
?>
