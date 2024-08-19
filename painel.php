<?php
include 'protect.php';

if(!isset($_SESSION))
{
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Bem vindo ao Painel, <?php echo $_SESSION['email']; ?>.

    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>