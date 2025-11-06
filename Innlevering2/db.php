<?php
/* db.php - Kobling til databasen (lokal konfigurasjon) */

$host = "127.0.0.1";      // eller "localhost"
$username = "root";       // standard brukernavn i XAMPP/MAMP
$password = "";           // skriv inn passord hvis du har satt ett
$database = "skole";      // bytt til ditt databasenavn

$db = mysqli_connect($host, $username, $password, $database)
      or die("Ikke kontakt med database-server eller databasen finnes ikke");

/* tilkobling til database-serveren utført */
?>