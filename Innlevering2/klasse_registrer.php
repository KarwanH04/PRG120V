<?php
/* db.php - Kobling til databasen */
$host = "localhost";
$user = "root";
$password = ""; // skriv inn passordet ditt hvis du har ett
$database = "skole"; // bytt til databasenavnet ditt

// Oppretter tilkobling
$conn = new mysqli($host, $user, $password, $database);

// Sjekk om tilkoblingen virker
if ($conn->connect_error) {
    die("Feil ved tilkobling til databasen: " . $conn->connect_error);
}
?>
