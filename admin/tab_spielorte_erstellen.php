<p>hier wird die Tabelle spielorte erstellt</p>
<?php
include "./../inc/functions/connection.php";

$sql = "CREATE TABLE spielorte (
    id_spielort INTEGER(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    arena VARCHAR(100),
    country VARCHAR (50),
    kapazitaet INTEGER(11)
)";

if ($stmt = $pdo->query($sql)) {
    echo "Die Tabelle wurde erfolgreich angelegt.<br>";
    $sql = "INSERT INTO spielorte (arena, country, kapazitaet)
            VALUES ('Spodek, Katowice', 'Polen', 11036)";
    $stmt = $pdo->query($sql);

    $sql = "INSERT INTO spielorte (arena, country, kapazitaet)
            VALUES ('Tauron Arena Kraków, Krakau', 'Polen', 15030)";
    $stmt = $pdo->query($sql);

    $sql = "INSERT INTO spielorte (arena, country, kapazitaet)
            VALUES ('Scandinavium, Göteborg', 'Schweden', 12000)";
    $stmt = $pdo->query($sql);
    
    $sql = "INSERT INTO spielorte (arena, country, kapazitaet)
            VALUES ('Ergo Arena', 'Polen', 11406)";
    $stmt = $pdo->query($sql);

    $sql = "INSERT INTO spielorte (arena, country, kapazitaet)
            VALUES ('Tele2 Arena', 'Schweden', 19000)";
    $stmt = $pdo->query($sql);

    $sql = "INSERT INTO spielorte (arena, country, kapazitaet)
            VALUES ('Malmö Arena', 'Schweden', 13000)";
    $stmt = $pdo->query($sql);

    $sql = "INSERT INTO spielorte (arena, country, kapazitaet)
            VALUES ('Orlen Arena', 'Polen', 5492)";
    $stmt = $pdo->query($sql);

    $sql = "INSERT INTO spielorte (arena, country, kapazitaet)
            VALUES ('Husqvarna Garden', 'Schweden', 7000)";
    $stmt = $pdo->query($sql);

    $sql = "INSERT INTO spielorte (arena, country, kapazitaet)
            VALUES ('Kristianstad Arena', 'Schweden', 4700)";
    $stmt = $pdo->query($sql);

};


?>
