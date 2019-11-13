<?php
    function getConnection(){
        $dsn = "mysql:host=localhost;dbname=doacao_sangue";
        $user = 'root';
        $password = '';

        try {
            $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
        } catch (PDOException $ex){
            echo 'Error: '. $ex->getMessage();
            return false;
        }
    return $pdo;
    }
    getConnection();
?>

