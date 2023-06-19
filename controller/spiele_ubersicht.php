<?php

include "./../inc/functions/connection.php";
// Das ist der Controller zur Erstellung der Gruppenspiele

if(isset($_POST['anzeigen'])){
    $gruppeauswahl = $_POST['gruppeauswahl'];
}else{
    $gruppeauswahl = 0;
}



$sql = "SELECT id_spiele, heim.mannschaft AS heimmannschaft, gast.mannschaft AS gastmannschaft,  heim.gruppe, 
            spieltag, datum, uhrzeit, spielort_id, arena
            FROM spiele, mannschaften AS heim, mannschaften AS gast,  spielorte 
        
            WHERE  id_spielort = spielort_id AND heim_id = heim.id_mannschaft AND gast_id = gast.id_mannschaft AND spieltag = 1
            ORDER BY datum, uhrzeit, heim.gruppe";

if ($stmt = $pdo->query($sql)){
    $spieltag_1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// print_r($spiele);

$sql = "SELECT id_spiele, heim.mannschaft AS heimmannschaft, gast.mannschaft AS gastmannschaft,  heim.gruppe, 
            spieltag, datum, uhrzeit, spielort_id, arena
            FROM spiele, mannschaften AS heim, mannschaften AS gast,  spielorte 
        
            WHERE  id_spielort = spielort_id AND heim_id = heim.id_mannschaft AND gast_id = gast.id_mannschaft AND spieltag = 2
            ORDER BY datum, uhrzeit, heim.gruppe";

if ($stmt = $pdo->query($sql)){
    $spieltag_2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
}



$sql = "SELECT id_spiele, heim.mannschaft AS heimmannschaft, gast.mannschaft AS gastmannschaft,  heim.gruppe, 
            spieltag, datum, uhrzeit, spielort_id, arena
            FROM spiele, mannschaften AS heim, mannschaften AS gast,  spielorte 
        
            WHERE  id_spielort = spielort_id AND heim_id = heim.id_mannschaft AND gast_id = gast.id_mannschaft AND spieltag = 3
            ORDER BY datum, uhrzeit, heim.gruppe";

if ($stmt = $pdo->query($sql)){
    $spieltag_3 = $stmt->fetchAll(PDO::FETCH_ASSOC);
}





// Hier wird die view, d.h. die gesamte Ausgabe eingebunden
include "./../views/spiele_ubersicht_view.php";


?>