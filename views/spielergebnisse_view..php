<?php
$title = "Spiele der Handball WM";
include "header.php";
?>
<h2><?php echo $title; ?></h2>

<form action="./../controller/spielergebnisse.php" method="POST">
    <label for="gruppeauswahl"> Gruppe auswahl</label>
    Gruppe : <SELECT name="gruppeauswahl" id="gruppeauswahl" placeholder="Gruppe Auswählen">
        <option value="0">Alle GRUPPEN Auswählen</option>
        <option value="A" <?php if (isset($gruppeauswahl) && $gruppeauswahl == "A") {
                                echo "selected";
                            } ?>>GRUPE A</option>
        <option value="B" <?php if (isset($gruppeauswahl) && $gruppeauswahl == "B") {
                                echo "selected";
                            } ?>>GRUPE B</option>
        <option value="C" <?php if (isset($gruppeauswahl) && $gruppeauswahl == "C") {
                                echo "selected";
                            } ?>>GRUPE C</option>
        <option value="D" <?php if (isset($gruppeauswahl) && $gruppeauswahl == "D") {
                                echo "selected";
                            } ?>>GRUPE D</option>
        <option value="E" <?php if (isset($gruppeauswahl) && $gruppeauswahl == "E") {
                                echo "selected";
                            } ?>>GRUPE E</option>
        <option value="F" <?php if (isset($gruppeauswahl) && $gruppeauswahl == "F") {
                                echo "selected";
                            } ?>>GRUPE F</option>
        <option value="G" <?php if (isset($gruppeauswahl) && $gruppeauswahl == "G") {
                                echo "selected";
                            } ?>>GRUPE G</option>
        <option value="H" <?php if (isset($gruppeauswahl) && $gruppeauswahl == "H") {
                                echo "selected";
                            } ?>>GRUPE H</option>
    </select>
    <input type="submit" name="anzeigen" value="manschaft anzeigen">

</form>

<?php

// if (isset($_GET['edit'])) {
//     echo "Du hast gerade Edit gedrückt";
// }

if (!empty($spieledit)) {
    //  echo "Du hast gerade Edit gedrückt";
?>
    <form action="./../controller/spielergebnisse.php" method="POST">
        <table>
            <tr>
                <!--<th>Datum</th>-->
                <th>Heimmannschaft</th>
                <th>Gastmannschaft</th>
                <th>Gasttore</th>
                <th>Heimtore</th>
                <th>zuschauer</th>
                
            </tr>
            <tr>
                <!-- <td>
                    <select name="datum" id="datum">
                        <option value="2023-01-11">11.01.</option>
                        <option value="2023-01-12">12.01.</option>
                        <option value="2023-01-13">13.01.</option>
                        <option value="2023-01-14">14.01.</option>
                        <option value="2023-01-15">15.01.</option>
                        <option value="2023-01-16">16.01.</option>
                        <option value="2023-01-17">17.01.</option>
                    </select>
                </td> -->
                <td><?php echo $spieledit['heimmannschaft']; ?></td>
                <td><?php echo $spieledit['gastmannschaft']; ?></td>
                <td><input type="number" name="heimtore"></td>
                <td><input type="number" name="gasttore"></td>
                <td><input type="number" name="zuschauer"></td>
            </tr>
            <tr>
                <td class="center" colspan='7'><input type="hidden" name="idspiel" value="<?php echo $spieledit['id_spiele'];  ?>"><input type="submit" name="update" value="UPDATE"></td>
            </tr>
        </table>
    </form>
<?php

}


// if ($showEditForm == 1) {
//     echo "Du hast gerade Edit gedrückt";
// }


// Siegi: Hinweis - Aufgabe 1 Stelle 3/3
// Diese Tabelle muss um weitere drei Spalten ergänzt werden für datum, uhrzeit und spielort (oder wenigstens spielort_id ;-)
// Hinweis: sowohl die Überschriften als auch die Inhalte müssen ergänzt werden.
if (!empty($spielergebnisse)) {
?>
    <table>
        <tr>
            <!-- <th>Datum</th> -->
            <th>Heimmannschaft</th>
            <th>Gastmannschaft</th>
            <th>Heimtore</th>
            <th>Gasttore</th>
            <th>Zuschauer</th>
            <th>Update</th>
           
        </tr>
        <?php

        foreach ($spielergebnisse as $spielergebniss) {
        ?>
            <tr>
                <!-- <td><?php echo $spielergebniss['datum']; ?></td> -->
                <td><?php echo $spielergebniss['heimmannschaft']; ?></td>
                <td><?php echo $spielergebniss['gastmannschaft']; ?></td>
                <td><?php echo $spielergebniss['heimtore']; ?></td>
                <td><?php echo $spielergebniss['gasttore']; ?></td>
                <td><?php echo $spielergebniss['zuschauer']; ?></td>
                <td><a href="./../controller/spielergebnisse.php?edit=<?php echo $spielergebniss['id_spiele']; ?>"><img src="./../inc/pics/edit.png" alt="editieren"></a></td>
            </tr>
        <?php } ?>
    </table>

<?php
} else {
    // echo "Es sind noch keine Mannschaften vorhanden!";
}

include "footer.php";
?>