<?php
require_once 'connessione.php';

$pdo = getConnection();

// CONTROLLO EMAIL
function controlloAtleta(PDO $pdo, $email)
{
    $sql = "SELECT * FROM Atleta WHERE email = :email;";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(["email" => $email]);

    $atleta = $stmt->fetch(PDO::FETCH_ASSOC);

    return $atleta ?: null;
}

 // REGISTRAZIONE
    function registrazione(PDO $pdo, $email, $password){
        $sql = "INSERT INTO Atleta(email, password) VALUES(:email, :password);";

        $stmt = $pdo->prepare($sql);
        return $stmt->execute([ "email" => $email, "password" => $password]);
    }

?>