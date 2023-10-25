<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO</title>
</head>
<body>
    <?php
    require './Usuario.php';
    require './Usuarios.php';

    $aluno = new Usuario();
    $msg = $aluno->cadastrar("Jonas", 35, "jonas@contoso.com");

    echo $msg;

    $funcionarios = new Usuarios();
    $listarfuncionarios = $funcionarios->listar();

    //echo $listarfuncionarios;

    foreach($listarfuncionarios as $row_usuario){

        var_dump($row_usuario);
        //extract($row_usuario);
    } 


    ?>
</body>
</html>