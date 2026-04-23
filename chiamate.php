<?php
require_once 'connessione.php';
require_once 'query.php';

$pdo = getConnection();

// LOG IN
if (isset($_POST["invio"])) {
    $password = $_POST["password"] ?? '';
    $email = trim($_POST["email"]) ?? '';

    $atleta = controlloAtleta($pdo, $email); // controllo email

    if ($atleta && password_verify($password, $atleta["password"])) {

        $_SESSION["id"] = $atleta["id"];
        $_SESSION["username"] = $atleta["email"];

        header("Location: profilo.html");
        exit();
    } else {
        $_SESSION["errori"] = "Le credenziali inserite sono sbagliate";
        header("Location: login.php");
        exit();
    }

}

?>