<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO</title>
</head>
<body>
    <h1><center><u>ATIVIDADES E NOTAS DO CURSO DE PHP OO</u></center></h1>
    
    <?php

    if(isset($_SESSION['msg'])){

        echo $_SESSION['msg'];

        unset($_SESSION['msg']);
    }

    require './Usuario.php';
    require './Usuarios.php';
    require './Cliente.php';
    require './ClienteAluno.php';
    require './ClientePJ.php';
    require './MetodoPagamento.php';
    require './MetodoPagamentoPIX.php';
    require './MetodoPagamentoBoleto.php';

    

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

    $clienteAluno = new ClienteAluno;
    $clienteAluno->logradouro  = "Avenida Paulista";
    $clienteAluno->bairro = "Centro";
    $clienteAluno->nome = "Amaral de Jesus";
    $clienteAluno->cpf = "123456789";
    $consultaDadosAlunos = $clienteAluno->exibirDadosAluno();

    echo $consultaDadosAlunos;

    echo "<hr>";

    $clientePJ = new ClientePJ;
    $clientePJ->logradouro  = "Avenida Oceânica";
    $clientePJ->bairro = "Ondina";
    $clientePJ->razaoSocial = "Contoso LTDA";
    $clientePJ->cnpj = "01234560001-09";
    $consultaDadosPJ = $clientePJ->exibirDadosPJ();

    echo $consultaDadosPJ;


    echo "<hr>";
/*
    $MPagamento = new MetodoPagamento(200.00, "PIX");
    $MsgCobranca = $MPagamento->verValor();
    echo $MsgCobranca;

    echo "<hr>";

*/    
    $MPagamentoPIX = new MetodoPagamentoPIX(30000, "PIX");
    $valorCobrancaPIX = $MPagamentoPIX->calcularDescontoPIX();
    echo $valorCobrancaPIX;

    echo "<hr>";

    $MPagamentoBoleto = new MetodoPagamentoBoleto(300.00, "Boleto");
    $valorCobrancaBoleto = $MPagamentoBoleto->calcularJuros();
    echo $valorCobrancaBoleto;

    echo "<hr>";


    $funcionarios = new Usuarios();
    $listarfuncionarios = $funcionarios->listar();
    

    //echo $listarfuncionarios;

    foreach($listarfuncionarios as $row_usuario){

        //var_dump($row_usuario);
        extract($row_usuario);
        echo "<br>";
        #echo "ID $id <br>";
        echo "Nome $nome <br>";
        echo " E-mail $email <br>";
        #echo " Senha $pass <br>";
        echo "<a href='view.php?id=$id'>Visualizar</a><br>";
        echo "<hr>";
    } 


    ?>
</body>
</html>