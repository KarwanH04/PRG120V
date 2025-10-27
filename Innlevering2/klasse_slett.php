<?php include("db.php"); ?>

<h2>Slett klasse</h2>
<form method="post">
    Velg klassekode:
    <select name="klassekode">
        <?php
        $resultat = $conn->query("SELECT klassekode FROM klasse");
        while ($rad = $resultat->fetch_assoc()) {
            echo "<option value='{$rad['klassekode']}'>{$rad['klassekode']}</option>";
        }
        ?>
    </select>
    <input type="submit" name="slett" value="Slett">
</form>

<?php
if (isset($_POST['slett'])) {
    $kode = $_POST['klassekode'];
    $sql = "DELETE FROM klasse WHERE klassekode='$kode'";
    if ($conn->query($sql)) {
        echo "<p>Klasse slettet!</p>";
    } else {
        echo "<p>Feil: " . $conn->error . "</p>";
    }
}
$conn->close();
?>

<p><a href="index.php">Tilbake</a></p>
