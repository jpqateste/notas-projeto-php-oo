<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD POO PDO</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body>
<nav class="navtop">
    	<div>
    		<h1>Notas - PHP CRUD POO e PDO</h1>
            <a href="index.php"><i class="fas fa-home"></i>Home</a>
    		<a href="cadastrar.php"><i class="fas fa-address-book"></i>Cadastrar</a>
    	</div>
    </nav>
    <div class="content">
	<h2>Home</h2>
	<p>Bem-vindo as minhas Notas do curso PHP CRUD POO e PDO!</p>
</div>
<div class="content read">
	<h2>Lista de usuários</h2>
	<a href="cadastrar.php" class="create-contact">Cadastrar</a>
	<table>
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Email</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
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

    
    $funcionarios = new Usuarios();
    $listarfuncionarios = $funcionarios->listar();
    

    //echo $listarfuncionarios;

    foreach($listarfuncionarios as $row_usuario){

        //var_dump($row_usuario);
        extract($row_usuario);
        echo"<tr>";
        echo"<td>$id</td>";
        echo "<td>$nome</td>";
        echo "<td>$email</td>";
        echo"<td class='actions'>";
        echo"<a href='view.php?id=$id' class='edit'><i class='fa fa-list-ul fa-xs'></i></a>";
        echo"<a href='edit.php?id=$id' class='edit'><i class='fas fa-pen fa-xs'></i></a>";
        echo"<a href='delete.php?id=$id' class='trash'><i class='fas fa-trash fa-xs'></i></a>";
        echo"</td>";
        echo"</tr>";
        //echo "<a href='view.php?id=$id'>View</a>";
        //echo" | ";
        //echo "<a href='edit.php?id=$id'>Edit</a>";
        //echo" | ";
        //echo "<a href='delete.php?id=$id'>Del</a><br>";
        //echo "<hr>";
    } 

    echo"</tbody>";
    echo"</table>";

    



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

//Base https://codeshack.io/crud-application-php-pdo-mysql/

    ?>
</body>
</html>