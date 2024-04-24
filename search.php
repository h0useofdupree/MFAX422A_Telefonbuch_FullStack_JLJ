<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "telefonbuch"; 

// Verbindung herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen der Verbindung
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Suchparameter aus dem Formular sammeln
$nachname = $_GET['nachname'];
$rufnummer = $_GET['rufnummer'];

// SQL-Abfrage zusammenstellen (zum Beispiel)
$sql = "SELECT * FROM providers WHERE nachname LIKE '%$nachname%' AND rufnummer LIKE '%$rufnummer%'";
$result = $conn->query($sql);

// Ergebnisse ausgeben
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<p>Rufnummer: " . $row["rufnummer"] . " - Name: " . $row["name"] . "</p>";
    // Hier weitere Daten nach Bedarf ausgeben
  }
} else {
  echo "Keine Daten gefunden";
}
$conn->close();
?>
