<?php include("db.php"); ?>

<h2>Alle studenter</h2>
<table border="1">
<tr>
  <th>Studentnr</th>
  <th>Fornavn</th>
  <th>Etternavn</th>
  <th>Klassekode</th>
</tr>

<?php
$sql = "SELECT * FROM student";
$sqlResultat = mysqli_query($db, $sql) or die("ikke mulig å hente data fra databasen");

while ($rad = mysqli_fetch_assoc($sqlResultat)) {
    echo "<tr>
            <td>{$rad['studentnr']}</td>
            <td>{$rad['fornavn']}</td>
            <td>{$rad['etternavn']}</td>
            <td>{$rad['klassekode']}</td>
          </tr>";
}

mysqli_close($db);
?>
</table>

<p><a href="index.php">Tilbake</a></p>