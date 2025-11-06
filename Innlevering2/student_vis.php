<?php include("db.php"); ?>

<h2>Alle klasser</h2>
<table border="1">
<tr><th>Klassekode</th><th>Klassenavn</th><th>Studiumkode</th></tr>

<?php
$sql = "SELECT * FROM klasse";
$sqlResultat = mysqli_query($db, $sql) or die("ikke mulig å hente data fra databasen");

while ($rad = mysqli_fetch_assoc($sqlResultat)) {
    echo "<tr><td>{$rad['klassekode']}</td><td>{$rad['klassenavn']}</td><td>{$rad['studiumkode']}</td></tr>";
}

mysqli_close($db);
?>
</table>

<p><a href="index.php">Tilbake</a></p>