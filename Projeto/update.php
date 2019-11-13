<?php
 
    session_start();
    include "conexao.php";
    $conn = getConnection();  
    
        
        $nome = isset($_POST['Nome']) ? $_POST['Nome'] : null;
        $email = isset($_POST['Email']) ? $_POST['Email'] : null;
        $senha= isset($_POST['Senha']) ? $_POST['Senha'] : null;
        $sangue = isset($_POST['Sangue']) ? $_POST['Sangue'] : null;
        $ano = isset($_POST['Ano']) ? $_POST['Ano'] : null;
        $cep = isset($_POST['CEP']) ? $_POST['CEP'] : null;
        $id = $_GET['idd'];
        
         

       
         
        $sql = "UPDATE doar SET Nome = :Nome, Email = :Email, Senha = :Senha, Ano = :Ano, CEP = :CEP WHERE id = :id";
        $stmt = $conn->prepare($sql);
        
        $stmt->execute(array(
            ':id' => $id,
            ':Nome' => $nome,
            ':Email' => $email,
            ':Senha' => $senha,
            ':Ano' => $ano,
            ':CEP' => $cep
        ));


 
    if ($stmt->execute()) {
        header("location: imprimir.php");
                return true;
    } else {
        echo "Erro ao cadastrar";
        header("location: Cadastro.php");
    }

?>