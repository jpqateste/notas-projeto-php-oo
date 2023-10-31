<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo usuário</title>
</head>
<body>
<a href="index.php">Home</a><br>
<a href="cadastrar.php">Cadastrar</a>
<h1>Cadastrar usuário</h1>
<?php

require './Usuarios.php';

$formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($formData['SendAddUser'])) {
//var_dump($formData);
$createUser = new Usuarios();
$createUser->formData = $formData;
$valida = $createUser->create();

if ($valida) {
    echo'Cadastro realizado com sucesso!';

}else{ echo'Cadastro falhou!'; }

}

?>

<form name="CreateUser" method="POST" action="">
    <label>Nome: </label>
    <input type="text" name="name" placeholder="Nome completo" required /><br><br>
    <label>E-mail: </label>
    <input type="text" name="email" placeholder="Melhor e-mail" required /><br><br>
    <label>Senha: </label>
    <input type="password" name="pass" required /><br><br>
    <input type="submit" value="Cadastrar" name="SendAddUser" />
</form>
    
</body>
</html>