<p>hier wird die Tabelle mannschaften erstellt</p>
<?php
include "./../inc/functions/connection.php";

$sql = "CREATE TABLE mannschaften (
    id_mannschaft INTEGER(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    mannschaft VARCHAR(100),
    gruppe VARCHAR (1),
    reihenfolge INTEGER (1)
)";

if ($stmt = $pdo->query($sql)) {
    echo "Die Tabelle wurde erfolgreich angelegt.<br>";
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Spanien', 'A', '1')";
            $stmt = $pdo->query($sql);
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Montenegro', 'A', '2')";
            $stmt = $pdo->query($sql);
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Chile', 'A', '3')";
            $stmt = $pdo->query($sql);
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Iran', 'A', '4')";
            $stmt = $pdo->query($sql);

    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Frankreich', 'B', '1')";
    $stmt = $pdo->query($sql);
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Polen', 'B', '2')";
    $stmt = $pdo->query($sql);
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Saudi-Arabien', 'B', '3')";
    $stmt = $pdo->query($sql);
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Slowenien', 'B', '4')";
    $stmt = $pdo->query($sql);

    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Schweden', 'C', '1')";
    $stmt = $pdo->query($sql);
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Brasilien', 'C', '2')";
    $stmt = $pdo->query($sql);
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Kap Verde', 'C', '3')";
    $stmt = $pdo->query($sql);
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Uruguay', 'C', '4')";
    $stmt = $pdo->query($sql);

    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Island', 'D', '1')";
    $stmt = $pdo->query($sql);
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Portugal', 'D', '2')";
    $stmt = $pdo->query($sql);
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Ungarn', 'D', '3')";
    $stmt = $pdo->query($sql);
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Südkorea', 'D', '4')";
    $stmt = $pdo->query($sql); 
    
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Deutschland', 'E', '1')";
    $stmt = $pdo->query($sql);
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Katar', 'E', '2')";
    $stmt = $pdo->query($sql);
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Serbien', 'E', '3')";
    $stmt = $pdo->query($sql);
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Algerien', 'E', '4')";
    $stmt = $pdo->query($sql);

    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Norwegen', 'F', '1')";
    $stmt = $pdo->query($sql);
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Nordmazedonien', 'F', '2')";
    $stmt = $pdo->query($sql);
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Argentinien', 'F', '3')";
    $stmt = $pdo->query($sql);
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Niederlande', 'F', '4')";
    $stmt = $pdo->query($sql);

    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Ägypten', 'G', '1')";
    $stmt = $pdo->query($sql);
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Kroatien', 'G', '2')";
    $stmt = $pdo->query($sql);
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Marokko', 'G', '3')";
    $stmt = $pdo->query($sql);
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Vereinigte Staaten', 'G', '4')";
    $stmt = $pdo->query($sql);

    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Dänemark', 'H', '1')";
    $stmt = $pdo->query($sql);
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Belgien', 'H', '2')";
    $stmt = $pdo->query($sql);
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Bahrain', 'H', '3')";
    $stmt = $pdo->query($sql);
    $sql = "INSERT INTO mannschaften (mannschaft, gruppe, reihenfolge)
            VALUES ('Tunesien', 'H', '4')";
    $stmt = $pdo->query($sql);

};


?>
