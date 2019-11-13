<?php  
    //Abindo sessão
    session_start();  
    // Incluindo a conexão
    include_once "conexao.php";

    $pdo = getConnection();
    //Atribuindo condição 
    if(isset($_POST["email"]))  {   
      //selecionando o banco de dados 
        $query = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";  
         //Variavel criada para receber os dados do objeto e do metodo prepare
        $stmt = $pdo->prepare($query);  
        $stmt->execute(  
              array(  
                  'email'     =>     $_POST["email"],  
                  'eenha'     =>     $_POST["senha"]  
              )  
        );  
        // Count recebendo o retorno das linhas
        $count = $stmt->rowCount(); 
        //verificar se tem algum retorno 
      }
        if($count >0){  
              $_SESSION["senha"] = $_POST["email"]; 
              //Criando a variavel nome para receber o nome do usuario
              $nome =$_POST['email'];
              //Direcionar o usuario
              header("location:index_adm.php");  
        }  else {
          //Mensagem a ser transmitida
          $_SESSION['msg'] = "<p style='color:red;'>Usuário ou Senha incorretos!</p>" ;
          //Direcionar o usuario
          header("location:Login.php");

        }    
     
    ?>