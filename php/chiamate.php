<?php
require_once 'connessione.php';
require_once 'query.php';

$pdo = getConnection();

// LOG IN
if (isset($_POST["accedi"])) {
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


// REGISTRAZIONE
    if(isset($_POST["registrati"])){
        $password = $_POST["password"] ?? '';  
        $email = trim($_POST["email"]) ?? '';

        $atleta = controlloAtleta($pdo, $email);   // controllo email

        if($atleta == null){
            $hash = password_hash($password, PASSWORD_DEFAULT);    // hash della password
            $result = registrazione($pdo, $email, $hash);   // registrazione

            if($result == false){
                $_SESSION["errori"] = "Registrazione fallita";
                header("Location: registrazione.php");
                exit();
            } else{
                header("Location: login.php");
                exit();
            }
        } else{
            $_SESSION["errori"] = "Utente già presente";
            header("Location: registrazione.php");
            exit();
        }

    }
?>