<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Telefonbuch</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="perspective provider">
    <h2>Provider</h2>
    <table>
      <tr>
        <th>Rufnummer</th>
        <th>Name</th>
        <th>Nachname</th>
        <th>Anschrift</th>
        <th>Hausnummer</th>
        <th>PLZ</th>
        <th>Ort</th>
        <th>Status</th>
      </tr>
      <?php include 'provider_data.php'; ?>
    </table>
  </div>
</body>
</html>
