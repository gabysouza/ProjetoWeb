<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/cadastrar.css">
	<link rel="icon" href="img/icon.png">
	<title> Atualizar</title>

  </head>
 		<div class="cover-container d-flex w-100 h-100 p-3  flex-column">
	<header class="masthead mb-auto">
	  <div class="inner">
			<img src="img/logo3.png"></img>
				<nav class="nav nav-masthead justify-content-center">
						<a class="nav-link" href="pag.php">Home</a>
						<a class="nav-link" href="MaisInformações.html">Mais informações</a>
						<a class="nav-link active" href="imprimir.php">Mostrar Usuários</a>
						<a class="nav-link" href="sair.php">Sair</a>
			</nav>
		</div>
		<hr>
	</header>
	
	<body>
		<br>
		<h2 align="center">ATUALIZAR DADOS</h2> <br>
			<form method="POST" id="signup-form"  name="form_cadastro" class="signup-form" action="update.php?idd=<?php echo $_GET['idd']; ?>" name="form_update" onsubmit=" return validação1();">
		
				<div class="form-group">
					<label for="validationDefault01"> Nome</label>
					<input type="text" class="form-control" id="validationDefault01" name= "Nome" placeholder="Digite seu Nome Completo" required>
				</div>
				<div class="form-row">
						<div class="form-group col-md-6">
							<label for="validationDefault02">Email</label>
							<input type="email" class="form-control" id="validationDefault02" name="Email" placeholder="Ex : joao@gmail.com" required> 
						</div>
						<div class="form-group col-md-6">
							<label for="validationDefaultUsername">Senha</label>
							
								<input type="password" class="form-control" id="validationDefaultUsername" name="Senha" placeholder="Senha" maxlength="15" required>
								<span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
						
								<small id="passwordHelpBlock" class="form-text text-muted" required>
									Sua senha deve ter entre 6 e 15 caracteres
							</small>
						</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<div class="form-group">
					<label for="validationDefault03"> Tipo sanguíneo</label>
					<input type="text" class="form-control" id="validationDefault03" name= "Sangue" placeholder="Ex: A+" required>
				</div>
					</div>
					<div class="form-group col-md-6">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="validationDefault04">Ano de nascimento</label>
										<input type="number" class="form-control" id="validationDefault04" name="Ano" placeholder="Ex : 1988" maxlength="4" required>
									</div>
									<div class="form-group col-md-6">
											<label for="validationDefault05">CEP</label>
											<input type="number" class="form-control" id="validationDefault05" name="CEP" maxlength="9"  placeholder="Ex: 46300000" required>
										</div>
								</div>
					</div>
				</div>
							<button type="submit" class="btn btn-danger" width="200px" onclick="myFunction()">ATUALIZAR</button>
			</form>
				<script type="text/javascript"  src="jQuery/jquery-3.3.1.min.js"></script>
				<script type="text/javascript"  src="js/main.js"></script>
       <script>
         function validação1(){
        var Senha = document.form_cadastro.Senha.value;
        var CEP = document.form_cadastro.CEP.value;
        var Ano = document.form_cadastro.Ano.value;
        var Sangue = document.form_cadastro.Sangue.value;
        
         if (document.form_cadastro.Senha.value.length < 6 || document.form_cadastro.Senha.value.length > 15){
          alert("O ano de nascimento deve conter de 6 a 15 caracteres!");
          document.form_cadastro.Senha.focus;
          return false;
        }
        if (document.form_cadastro.Ano.value.length < 4 || document.form_cadastro.Ano.value.length > 4){
          alert("O ano de nascimento deve conter 4 números!");
          document.form_cadastro.Ano.focus;
          return false;
        }
        if (document.form_cadastro.CEP.value.length < 8 || document.form_cadastro.CEP.value.length > 8){
          alert("O CEP deve conter 8 números!");
          document.form_cadastro.CEP.focus;
          return false;
        }
        
      }   
    </script>  
	</body>
</html>