<?php include("db.php"); ?>

<h2>Registrer ny klasse</h2>

<form method="post">
    Klassekode: <input type="text" name="klassekode"><br>
    Klassenavn: <input type="text" name="klassenavn"><br>
    Studiumkode: <input type="text" name="studiumkode"><br>
    <input type="submit" name="lagre" value="Lagre">
</form>

<?php
if (isset($_POST['lagre'])) {
    $kode = $_POST['klassekode'];
    $navn = $_POST['klassenavn'];
    $studium = $_POST['studiumkode'];
    
    $sql = "INSERT INTO klasse VALUES ('$kode','$navn','$studium')";
    if ($conn->query($sql)) {
        echo "<p>Klasse registrert!</p>";
    } else {
        echo "<p>Feil: " . $conn->error . "</p>";
    }
}
mysqli_close($db);
?>

<p><a href="index.php">Tilbake</a></p>
