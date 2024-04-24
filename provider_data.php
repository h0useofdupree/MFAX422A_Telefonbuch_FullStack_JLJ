<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "telefonbuch"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM provider_data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row["rufnummer"]."</td>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["nachname"]."</td>";
    echo "<td>".$row["anschrift"]."</td>";
    echo "<td>".$row["hausnummer"]."</td>";
    echo "<td>".$row["plz"]."</td>";
    echo "<td>".$row["ort"]."</td>";
    echo "<td>".$row["status"]."</td>";
    echo "</tr>";
  }
} else {
  echo "<tr><td colspan='8'>Keine Daten gefunden</td></tr>";
}
$conn->close();
?>
