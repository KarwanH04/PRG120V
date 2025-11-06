<?php include("db.php"); ?>

<h2>Slett klasse</h2>

<form method="post">
    Velg klassekode:
    <select name="klassekode" required>
        <?php
        // Henter alle klassekoder fra databasen
        $sqlResultat = mysqli_query($db, "SELECT klassekode FROM klasse") or die("Ikke mulig å hente data fra databasen");
        while ($rad = mysqli_fetch_assoc($sqlResultat)) {
            echo "<option value='{$rad['klassekode']}'>{$rad['klassekode']}</option>";
        }
        ?>
    </select>
    <input type="submit" name="slett" value="Slett">
</form>

<?php
if (isset($_POST['slett'])) {
    $kode = $_POST['klassekode'];

    // Sletter valgt klasse fra databasen
    $sql = "DELETE FROM klasse WHERE klassekode='$kode'";
    if (mysqli_query($db, $sql)) {
        echo "<p>Klasse slettet!</p>";
    } else {
        echo "<p>Feil ved sletting: " . mysqli_error($db) . "</p>";
    }
}

mysqli_close($db);
?>

<!-- Tilbake-knapp -->
<p><a href="index-oblig.html">Tilbake</a></p>
