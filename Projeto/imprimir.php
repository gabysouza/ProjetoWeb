<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuários</title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript"  src="js/main.js"></script>
	<script type="text/javascript"  src="jQuery/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="icon" href="img/icon.png">

</head>

<body>
    <div class="cover-container d-flex w-100 h-100 p-3  flex-column">
    	<header class="masthead mb-auto">
				<div class="inner">
					<img src="img/logo3.png">
					<nav class="nav nav-masthead justify-content-center">
                        <a class="nav-link active" href="pag.html">Home</a>
						<a class="nav-link" href="MaisInformações.html">Mais informações</a>
						<a class="nav-link" href="imprimir.php">Mostrar Usuários</a>
						<a class="nav-link" href="sair.php">Sair</a>
						
					</nav>
				</div>
				<hr>
			</header>
   <!-------------------------------------------------PHP - CONSULTA---------------------------------------------->

    <?php 
        include 'conexao.php';

        //  nova variavel onde guarda o objeto criado na funcao getConnection()
        $conn = getConnection();

     	// Consulta SQL que irá retornar valores do DB
        $sql_show = "SELECT * FROM doar";
        $stmt = $conn->prepare($sql_show);
        $stmt->execute();

        #Aqui criamos uma variavel chamada "funcionarios" onde ele recebe o resultado do objeto "stmt". com a função fatchALL, retornamos a lista de nomes, um array, mas como objetos, onde chamaremos mais abaixo no foreach
        $doar = $stmt->fetchAll(PDO::FETCH_OBJ);

    ?>
<!-------------------------------------------------TABELA ------------------------------------------------>
        <div class="container">
                <br><h2 align="center"><font color="#8B0000">GERENCIAR CADASTROS</font></h2><br> 
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>Sangue</th>
                        <th>CEP</th>
                    </tr>
                    <?php foreach($doar as $func): ?>
                        <tr>
                            <td><?= $func->id; ?></td>
                            <td><?= $func->Nome; ?></td>
                            <td><?= $func->Email; ?></td>
                            <td><?= $func->Senha; ?></td>
                            <td><?= $func->Sangue; ?></td>
                            <td><?= $func->CEP; ?></td>
                            <td>
                                <a href="form_update.php?idd=<?= $func->id?>" class="btn btn-info">Editar</a>
                                <a onclick="return confirm('Tem certeza que deseja excluir este usuário?')" href="delete.php?id=<?= $func->id ?>" class="btn btn-danger">Excluir</a>
                            </td>
    
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>    
        </div>
    </div>
</body>
</html>