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
$nachname = $_GET['last_name'];
$rufnummer = $_GET['phone_number'];

// SQL-Abfrage zusammenstellen (zum Beispiel)
$sql = "SELECT * FROM providers WHERE last_name LIKE '%$nachname%' AND phone_number LIKE '%$rufnummer%'";
$result = $conn->query($sql);

// Ergebnisse ausgeben
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<p>Rufnummer: " . $row["phone_number"] . " - Name: " . $row["first_name"] . "</p>";
    // Hier weitere Daten nach Bedarf ausgeben
  }
} else {
  echo "Keine Daten gefunden";
}
$conn->close();
