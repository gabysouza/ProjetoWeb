<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" defer src="Bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript"  src="js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="icon" href="img/icon.png">
    <title>Login</title>
  </head>        

 	    <div class="cover-container d-flex w-100 h-100 p-3  flex-column">
        <header class="masthead mb-auto">
          <div class="inner">
            <img src="img/logo3.png"></img>
              <nav class="nav nav-masthead justify-content-center">
              <a class="nav-link" href="pag.php">Home</a>
              <a class="nav-link" href="Cadastro.php">Cadastre-se</a>
              <a class="nav-link active" href="Login.php">Login</a>
            </nav>
          </div>
            <hr>
        </header>
        <body>
          <br>
                 <?php
            // informando a mensagem 
            if (isset($_SESSION['msg'])){
              echo $_SESSION['msg'];
            }         
            ?>
                <form class="form-signin" action="val_login.php" name="form_login"  method="POST">
                  <h2 align="center">FAÇA LOGIN</h2> <br> 
                  <label for="inputEmail" class="sr-only">Endereço de email</label>
                  <input type="email" id="inputEmail" name="Email" class="form-control" placeholder="Seu email" required>
                  <label for="inputPassword" class="sr-only">Senha</label>
                  <input type="password" id="inputPassword" name="Senha" class="form-control" placeholder="Senha" required>
                  <div class="checkbox mb-3">
                    <label>
                      <input type="checkbox" value="remember-me"> Lembrar de mim
                    </label>
                  </div>
                  <button class="btn btn-lg btn-danger btn-block" type="submit">Login</button><br> </form>
                  <form  class="form-signin" name="form_login">
                  <p class="mt-5 mb-3 text-muted" align="center">&copy; 2019</p>
                
              </body>
             
      </div>     
</html>


