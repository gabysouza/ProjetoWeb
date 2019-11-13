<?php

   session_start();
    include "conexao.php";

    $nome = isset($_POST['Nome']) ? $_POST['Nome'] : null;
    $email = isset($_POST['Email']) ? $_POST['Email'] : null;
    $senha= isset($_POST['Senha']) ? $_POST['Senha'] : null;
    $sangue = isset($_POST['Sangue']) ? $_POST['Sangue'] : null;
    $ano = isset($_POST['Ano']) ? $_POST['Ano'] : null;
    $cep = isset($_POST['CEP']) ? $_POST['CEP'] : null;

    $conn = getConnection();    

    $sql = "INSERT INTO doar (Nome, Email, Senha, Sangue, Ano, CEP ) VALUES (:Nome, :Email, :Senha, :Sangue, :Ano, :CEP)";
    $stmt = $conn->prepare($sql);

    $stmt->bindValue(':Nome', $nome);		
	$stmt->bindValue(':Email', $email);
	$stmt->bindValue(':Senha', $senha);
    $stmt->bindValue(':Sangue', $sangue);
	$stmt->bindValue(':Ano', $ano);
    $stmt->bindValue(':CEP', $cep);

    header("Location: pag.php");

	if($stmt->execute()){
		echo '<p>'. 'Dados cadastrados com sucesso';
	}else{
		echo '<p>'.'Erro ao salvar';
	}
    exit;
    
?> 