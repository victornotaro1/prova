<?php
include 'conexao.php';



 if(isset($_POST['email']) && isset($_POST['senha'])){
    if(strlen($_POST['email']) == 0) {
        echo "O campo e-mail não pode estar vazio.";
    } else if(strlen($_POST['senha']) == 0){
        echo "O campo senha não pode estar vazio.";
    } else {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);

       $sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";

      if(mysqli_query($conn, $sql)) {
        
        $user_id = mysqli_insert_id($conn);
            
        // Inicia a sessão
        session_start();
        
        // Armazena os dados do usuário na sessão
        $_SESSION['id'] = $user_id;
        $_SESSION['email'] = $email;

         header("Location: painel.php");
      } else {
        echo "Erro ao cadastrar o usuário.";
      }
    }
  
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <form method="post" action="">
                    <h1>Login</h1>
                    <p>
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Enter your email">
                    </p>
                    <p>
                    <label>Senha</label>
                    <input type="password" name="senha" placeholder="Enter your email">
                    </p>
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<style>
.container {
  margin-top: ;
  display: flex;
  justify-content: center;
  align-items: center;
}

</style>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>