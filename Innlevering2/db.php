<?php
/* db-tilkobling.php */
/*
  Programmet kobler til database-serveren og velger databasen.
  Denne versjonen fungerer lokalt uten miljøvariabler (XAMPP, MAMP, Linux, etc.)
*/

$host = getenv('DB_HOST') ?: "127.0.0.1";     // bruker miljøvariabel hvis satt, ellers localhost
$username = getenv('DB_USER') ?: "root";      // standard brukernavn i XAMPP/MAMP
$password = getenv('DB_PASSWORD') ?: "";      // legg inn passord hvis du har et
$database = getenv('DB_DATABASE') ?: "skole"; // standard databasenavn, bytt hvis du bruker et annet

$db = mysqli_connect($host, $username, $password, $database)
      or die("Ikke kontakt med database-server eller databasen finnes ikke");

/* Tilkobling til database-serveren utført */
?>
