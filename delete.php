<?php
    include "conexao.php";
    $conn = getConnection();
   
    $id = $_GET['id'];
    
    $sql = 'DELETE FROM doar WHERE id=:id';
    
    $stmt = $conn->prepare($sql);
    
    if($stmt->execute([':id' => $id])){
        header("Location: imprimir.php");
    }
    ?>