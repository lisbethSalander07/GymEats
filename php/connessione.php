<?php
// CONNESSIONE AL DATABASE
    function getConnection():PDO {
        $host="localhost";
        $dbname="my_gymeats";
        $dsn="mysql:host=$host;dbname=$dbname;charset=utf8";
        $user="root";
        $password="";

        try{    
            $pdo=new PDO($dsn,$user,$password);
            
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch(PDOException $e){
            echo "Errore di connessione: ".$e->getMessage();
            return null;
        }
    }
?>