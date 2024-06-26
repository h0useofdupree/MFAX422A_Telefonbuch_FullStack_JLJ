<?php
// Verbindung zur Datenbank herstellen
$servername = "localhost";
$username = "root"; // Benutzername für die Datenbank
$password = ""; // Passwort für die Datenbank
$dbname = "telefonbuch"; // Name der Datenbank

// Verbindung herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen der Verbindung
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Formulardaten sammeln
$rufnummer = $_POST['rufnummer'];
$name = $_POST['name'];
$nachname = $_POST['nachname'];
$anschrift = $_POST['anschrift'];
$hausnummer = $_POST['hausnummer'];
$plz = $_POST['plz'];
$ort = $_POST['ort'];
$status = $_POST['status'];

// SQL-Abfrage zum Einfügen der Daten
$sql = "INSERT INTO providers (rufnummer, name, nachname, anschrift, hausnummer, plz, ort, status) 
        VALUES ('$rufnummer', '$name', '$nachname', '$anschrift', '$hausnummer', '$plz', '$ort', '$status')";

if ($conn->query($sql) === TRUE) {
  echo "Daten erfolgreich eingefügt";
} else {
  echo "Fehler beim Einfügen der Daten: " . $conn->error;
}

$conn->close();
?>
