<?php include("db.php"); ?>

<h2>Alle klasser</h2>
<table border="1">
<tr><th>Klassekode</th><th>Klassenavn</th><th>Studiumkode</th></tr>

<?php
$sql = "SELECT * FROM klasse";
$resultat = $conn->query($sql);

while ($rad = $resultat->fetch_assoc()) {
    echo "<tr>
            <td>{$rad['klassekode']}</td>
            <td>{$rad['klassenavn']}</td>
            <td>{$rad['studiumkode']}</td>
          </tr>";
}
$conn->close();
?>
</table>

<p><a href="index.php">Tilbake</a></p>

