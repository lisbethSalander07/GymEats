<?php
require_once 'connessione.php';

$pdo = getConnection();

// controllo se esiste email
function controlloAtleta(PDO $pdo, $email)
{
    $sql = "SELECT * FROM Atleta WHERE email = :email;";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(["email" => $email]);

    $atleta = $stmt->fetch(PDO::FETCH_ASSOC);

    return $atleta ?: null;
}

?>