<?php

session_start();

ob_start();

$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO</title>
</head>
<body>
    <h1><center><u>Detalhes do usuário</u></center></h1>
    
    <?php

    if(isset($_SESSION['msg'])){

        echo $_SESSION['msg'];

        unset($_SESSION['msg']);
    }

    if(!empty($id)){
    
    require './Usuario.php';
    require './Usuarios.php';

    $viewUser = new Usuarios();
    $viewUser->id = "$id";
    $valueUser=$viewUser->view();

    extract($valueUser);
    
    echo"<br>Id: $id <br>";
    echo"Nome: $nome <br>";
    echo"E-mail: $email <br>";
    echo"Senha: $pass <br>";

    }else{


        $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";
        header("Location: index.php");
    }

    ?>
</body>
</html>