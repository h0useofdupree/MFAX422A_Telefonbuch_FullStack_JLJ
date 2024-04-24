// search.js
document.getElementById('searchForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Formulardaten sammeln
    const nachname = document.getElementById('nachname').value;
    const rufnummer = document.getElementById('rufnummer').value;
  
    // AJAX-Anfrage an PHP-Skript senden
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'search.php?nachname=' + nachname + '&rufnummer=' + rufnummer, true);
    xhr.onload = function() {
      if (xhr.status >= 200 && xhr.status < 400) {
        // Erfolgreiche Anfrage
        document.getElementById('searchResults').innerHTML = xhr.responseText;
      } else {
        // Fehler bei der Anfrage
        console.error('Fehler bei der Anfrage');
      }
    };
    xhr.send();
  });
  