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
    require './Cliente.php';

    $aluno = new Usuario();
    $msg = $aluno->cadastrar("Jonas", 35, "jonas@contoso.com");

    echo $msg;

    echo "<hr>";

    $cliente = new Cliente;
    $cliente->logradouro = "Avenida Alomar";
    $cliente->bairro = "Jardim Sul";
    $consultaEndereco = $cliente->verEndereco();

    echo $consultaEndereco;






    echo "<hr>";
    $funcionarios = new Usuarios();
    $listarfuncionarios = $funcionarios->listar();
    

    //echo $listarfuncionarios;

    foreach($listarfuncionarios as $row_usuario){

        //var_dump($row_usuario);
        extract($row_usuario);
        echo "<br>";
        echo "ID $id <br>";
        echo "Nome $nome <br>";
        echo " E-mail $email <br>";
        echo "<hr>";
    } 


    ?>
</body>
</html>