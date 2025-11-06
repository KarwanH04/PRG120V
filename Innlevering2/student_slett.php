<?php
/* slett-klasse
   Programmet viser en nedtrekksliste med alle klassekoder,
   og lar brukeren velge en klasse som skal slettes fra databasen.
*/

include("db.php");  // Kobling til databasen
?>

<h2>Slett klasse</h2>

<form method="post" action="">
    Velg klassekode:
    <select name="klassekode" required>
        <option value="">-- Velg klassekode --</option>
        <?php
        $sql = "SELECT klassekode FROM klasse";
        $resultat = mysqli_query($db, $sql) or die("Feil ved henting av klasser");

        while ($rad = mysqli_fetch_assoc($resultat)) {
            echo "<option value='{$rad['klassekode']}'>{$rad['klassekode']}</option>";
        }
        ?>
    </select>
    <input type="submit" name="slett" value="Slett">
</form>

<?php
if (isset($_POST['slett'])) {
    $klassekode = $_POST['klassekode'];

    if (!$klassekode) {
        echo "<p>Du må velge en klassekode.</p>";
    } else {
        // Sjekk om klassen finnes
        $sjekk = "SELECT * FROM klasse WHERE klassekode='$klassekode'";
        $resultat = mysqli_query($db, $sjekk);
        $antall = mysqli_num_rows($resultat);

        if ($antall == 0) {
            echo "<p>Klassen finnes ikke i databasen.</p>";
        } else {
            $sqlSlett = "DELETE FROM klasse WHERE klassekode='$klassekode'";
            if (mysqli_query($db, $sqlSlett)) {
                echo "<p>Klassen <strong>$klassekode</strong> er slettet!</p>";
            } else {
                echo "<p>Feil under sletting: " . mysqli_error($db) . "</p>";
            }
        }
    }
}
?>

<p><a href="index-oblig.html">Tilbake</a></p>