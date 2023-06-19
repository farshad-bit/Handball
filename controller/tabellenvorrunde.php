<?php
include "./../inc/functions/connection.php";

// Folgende function löscht alle Eintrage in tablee en vorrunde , die dem Parameter gruppe gehören


function tabellenvorrounde_löschen($gruppe){
    // löscht alle Einträge aus tabelle nvorrundre der gruppe $gruppe
    // gint true zuruck bei Erfolg, sonst false
    // DIE Function muss unsere Datenbankvarbindung mitgeteilet bekommen.
        global $pdo;
         $sql = "DELETE t
        FROM tabellenvorrounde AS t
        INNER JOIN mannschaften AS m ON t.id_mannschaft = m.id_mannschaft

        WHERE m.gruppe = :gruppe";

        $stmt = $pdo->prepare($sql);
        $stmt->bindparam(':gruppe', $gruppe);
        if($stmt->execute()){
            return true;
        }else {
            return false;
        }
}
// tabellenvorrounde_löschen("A");
// 
// die();





function tabellenvorrounde_eintragen_Daten($gruppe){
    // trägt für eine Gruppe alle Daten der vier Mannschaften ein, so dass wir eine Tabelle ausgeben können
    global $pdo;
    if (tabellenvorrounde_eintragen($gruppe));
    // Wir holen uns aus der Gruppe alle Manschaften in $stmt
    $sql = "SELECT id_mannschaft FROM mannschaften 
    WHERE gruppe = :gruppe";
     $stmt = $pdo->prepare($sql);
     $stmt->bindParam(':gruppe', $gruppe);
     $stmt->execute();
     // für gruppe A enthält das $stmt die vier primärschlüssel, dh 4 datensätze mit je einem schlüssel der mannschaft
     // in unserem fall für Gruppe A:
     //1
     //2
     //3
     //4
     
     while ($id = $stmt->fetch(PDO::FETCH_ASSOC)){
        // echo $id['id_mannschaft'];
        // echo "<br><br>";
        $id_mannschaft = $id['id_mannschaft'];
        echo $id_mannschaft . " wird beim fetch durchlaufen. <br>";
        //  Alles was ab hier kommt wird für genau Eine Mannschaft errechnet.
        // Und diese Mannschaft erhält sämtlich Daten in tabellenvorrunde

        // Aktion 1: Wir untersuchen die Daten in der unsere Mannschaft als heimschaft auftritt
            // Wir errechen die geworfenen Tore (heimtore) und die Gegentore(gasttore)
            // und die Anzahl der Spiele 
        $sql = "SELECT count(id_spiele) AS spiele, SUM(heimtore) AS ht, SUM(gasttore) AS gt FROM spiele 
        WHERE heim_id= $id_mannschaft";
        $stmtselect = $pdo->query($sql);
        $ergebnis = $stmtselect->fetch(PDO::FETCH_ASSOC);
        if($spiele = $ergebnis['spiele']) {} else $spiele = 0;
        // echo $ergebnis['ht'] . " " . $ergebnis['gt'];
        if ($ht = $ergebnis['ht']){} else $ht = 0 ;
        if($gt = $ergebnis['gt']){}else $gt = 0;

        $sql = "UPDATE tabellenvorrounde 
                SET spiele = $spiele, tore_plus = $ht, tore_minus = $gt
                WHERE id_mannschaft = $id_mannschaft ";

        $stmtupdate = $pdo->query($sql);

        // Aktion 2. Wir untersuchen die Daten inder unsere Mannschaft als Gastmannschaft auftrit
        // B) Wir addiren die geworfenen Tore (gasttore), die Gegentore (heimtore),
        //    errechnen die Differenz der Tore und ergänzen die Anzahl der Spiele

        $sql = "SELECT count(id_spiele) AS spiele, SUM(heimtore) AS ht, SUM(gasttore) AS gt FROM spiele 
        WHERE gast_id= $id_mannschaft";
        $stmtselect = $pdo->query($sql);
        $ergebnis = $stmtselect->fetch(PDO::FETCH_ASSOC);
        if($spiele = $ergebnis['spiele']) {} else $spiele = 0;
        // echo $ergebnis['ht'] . " " . $ergebnis['gt'];
        if ($ht = $ergebnis['ht']){} else $ht = 0 ;
        if($gt = $ergebnis['gt']){}else $gt = 0;

        $sql = "UPDATE tabellenvorrounde 
                SET spiele = spiele + $spiele, tore_plus = tore_plus + $gt, tore_minus = tore_minus + $ht, differenz = tore_plus-tore_minus
                WHERE id_mannschaft = $id_mannschaft ";

        $stmtupdate = $pdo->query($sql);

        // Aktion 3 ) Wir ünterestutzen alle Spiele detr mannschaft
        $siege = 0;
        $unentschieden = 0;
        $niederlagen =0;
        $punkte = 0;
        $sql ="SELECT heim_id, heimtore, gasttore
                FROM spiele
                WHERE heim_id = $id_mannschaft OR gast_id = $id_mannschaft";
        $stmtselect = $pdo->query($sql);
        while ($spielergebnis = $stmtselect->fetch(PDO::FETCH_ASSOC)){
            // Fall 1. Unserer gerade betrachtet Mannschaft ($id_mannschaft) ist die Heimmannschaft in dem Spiel
            // print_r($spielergebnis);
            // echo "<br>";
            $heim_id = $spielergebnis['heim_id'];
            // $gast_id = $spielergebnis['gast_id'];
            $heimtore = $spielergebnis['heimtore'];
            $gasttore = $spielergebnis['gasttore'];
            if($heim_id== $id_mannschaft){
                if($heimtore > $gasttore){
                    $siege++;
                    $punkte = $punkte + 2;
                    // $punkte +=2;
                } elseif ($heimtore < $gasttore){
                    $niederlagen++;
                } else {
                    $unentschieden++;
                    $punkte++;
                }
            }else { // Fall 2. unsere gerade}
                if($gasttore > $heimtore){
                    $siege++;
                    $punkte = $punkte + 2;
                } elseif ($gasttore < $heimtore){
                    $niederlagen++;
                }else {
                    $unentschieden++;
                    $punkte++;
                }
            }
        }
        $sql = "UPDATE tabellenvorrounde 
                SET siege = $siege, niederlagen = $niederlagen, unentschieden = $unentschieden, punkte = $punkte
                WHERE id_mannschaft = $id_mannschaft ";

        $stmtupdate = $pdo->query($sql);

        // echo "Siege : $siege";
        // echo "unetntschieden : $unentschieden <br>";
        // echo "Miederlage : $niederlagen <br>";
        // echo "Punkte : $punkte <br>";
        // echo "<br><br><br>";

        // SET tore_plus = tore_plus + $gt , tore_minus = $gt




        // $sql = "INSERT INTO tabellenvorrounde (id_mannschaft)
        //         VALUE ($id_mannschaft)";
        // $stmtinsert = $pdo->query($sql);

        // $sql = "SELECT heimtore, gasttore 
        // FROM spiele 
        // WHERE heim_id= $id_mannschaft";
        // if(heimtore>gasttore){
        //     $siege++
        // }
     }
     


}

// tabellenvorrounde_eintragen_Daten("A");
// die();

function tabellenvorrounde_eintragen($gruppe){
    // die id_mannschaft jeder manschaft aus $gruppe wird in tabellenvorrunde eintragen.
    global $pdo;
    tabellenvorrounde_löschen($gruppe);
    
    $sql = "INSERT INTO tabellenvorrounde (id_mannschaft) 
    SELECT id_mannschaft FROM mannschaften 
    WHERE gruppe = :gruppe";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':gruppe', $gruppe);
    
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }

}


// function tabellenvorrunde_eintragen_alternativ($gruppe) {
//     global $pdo;
//     // Alte Einträge löschen
//     tabellenvorrunde_löschen($gruppe);
//     $sql = "SELECT id_mannschaft FROM mannschaften WHERE gruppe = :gruppe";
//     $stmt = $pdo->prepare($sql);
//     $stmt->bindParam(':gruppe', $gruppe);
//     $stmt->execute();
//     while ($id = $stmt->fetch(PDO::FETCH_ASSOC)) {
//         $id_mannschaft = $id['id_mannschaft'];
//         $sql = "INSERT INTO tabellenvorrunde (id_mannschaft)
//                 VALUE ($id_mannschaft)";
//         $stmtinsert = $pdo->query($sql);
        
//     }
// }


// tabellenvorrounde_eintragen("A");
// die();



// $gruppe="A";
    // if (tabellenvorrounde_löschen($gruppe)) echo "super";


  
// if(tabellenvorrounde_eintragen_Daten("A")) echo "super";
// if(tabellenvorrounde_eintragen_Daten("B")) echo "super";
// if(tabellenvorrounde_eintragen_Daten("C")) echo "super";
// if(tabellenvorrounde_eintragen_Daten("D")) echo "super";
// if(tabellenvorrounde_eintragen_Daten("E")) echo "super";
// if(tabellenvorrounde_eintragen_Daten("F")) echo "super";
// if(tabellenvorrounde_eintragen_Daten("G")) echo "super";
// if(tabellenvorrounde_eintragen_Daten("H")) echo "super";

// Mannschaft aus mannschaft

$sql= "SELECT m.mannschaft, spiele, siege, unentschieden,
              niederlagen, tore_plus,tore_minus, differenz,punkte
              
        FROM mannschaften AS m, tabellenvorrounde AS t
        WHERE m.id_mannschaft = t.id_mannschaft AND gruppe = 'A' 
        ORDER BY punkte DESC, platz ";

if ($stmt = $pdo->query($sql)){
    $a = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// $test[] = $a[0]['punkte'];
// $test[] = $a[1]['punkte'];
// $test[] = $a[2]['punkte'];
// $test[] = $a[3]['punkte'];
// $test[4,0];


$sql= "SELECT m.mannschaft, spiele, siege, unentschieden,
              niederlagen, tore_plus,tore_minus, differenz,punkte
              
        FROM mannschaften AS m, tabellenvorrounde AS t
        WHERE m.id_mannschaft = t.id_mannschaft AND gruppe = 'B' 
        ORDER BY punkte DESC ";

if ($stmt = $pdo->query($sql)){
    $b = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$sql= "SELECT m.mannschaft, spiele, siege, unentschieden,
              niederlagen, tore_plus,tore_minus, differenz,punkte
              
        FROM mannschaften AS m, tabellenvorrounde AS t
        WHERE m.id_mannschaft = t.id_mannschaft AND gruppe = 'C' 
        ORDER BY punkte DESC ";

if ($stmt = $pdo->query($sql)){
    $c = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$sql= "SELECT m.mannschaft, spiele, siege, unentschieden,
              niederlagen, tore_plus,tore_minus, differenz,punkte
              
        FROM mannschaften AS m, tabellenvorrounde AS t
        WHERE m.id_mannschaft = t.id_mannschaft AND gruppe = 'D' 
        ORDER BY punkte DESC ";

if ($stmt = $pdo->query($sql)){
    $d = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$sql= "SELECT m.mannschaft, spiele, siege, unentschieden,
              niederlagen, tore_plus,tore_minus, differenz,punkte
              
        FROM mannschaften AS m, tabellenvorrounde AS t
        WHERE m.id_mannschaft = t.id_mannschaft AND gruppe = 'E' 
        ORDER BY punkte DESC ";

if ($stmt = $pdo->query($sql)){
    $e = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$sql= "SELECT m.mannschaft, spiele, siege, unentschieden,
              niederlagen, tore_plus,tore_minus, differenz,punkte
              
        FROM mannschaften AS m, tabellenvorrounde AS t
        WHERE m.id_mannschaft = t.id_mannschaft AND gruppe = 'F' 
        ORDER BY punkte DESC ";

if ($stmt = $pdo->query($sql)){
    $f = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$sql= "SELECT m.mannschaft, spiele, siege, unentschieden,
              niederlagen, tore_plus,tore_minus, differenz,punkte
              
        FROM mannschaften AS m, tabellenvorrounde AS t
        WHERE m.id_mannschaft = t.id_mannschaft AND gruppe = 'G' 
        ORDER BY punkte DESC ";

if ($stmt = $pdo->query($sql)){
    $g = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$sql= "SELECT m.mannschaft, spiele, siege, unentschieden,
              niederlagen, tore_plus,tore_minus, differenz,punkte
              
        FROM mannschaften AS m, tabellenvorrounde AS t
        WHERE m.id_mannschaft = t.id_mannschaft AND gruppe = 'H' 
        ORDER BY punkte DESC ";

if ($stmt = $pdo->query($sql)){
    $h = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
include "./../views/tabellenvorrounde_view.php";
    
?>