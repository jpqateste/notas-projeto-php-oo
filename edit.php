<?php

session_start();

ob_start();

$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<style> 
input[type=number] {

    width: 5%;
  padding: 8px 4px;
  margin: 8px 0;

  border: none;
  background-color: #b1b3b2;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO</title>
</head>
<body>
    <h1><center><u>Editar usuário</u></center></h1>
    
    <?php

    if(isset($_SESSION['msg'])){

        echo $_SESSION['msg'];

        unset($_SESSION['msg']);
    }

    require './Usuarios.php';

    //Obter dados do fomulário

    $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    
    if(!empty($formData['SendEditUser'])){
        
        //var_dump($formData);
        $editUser= new Usuarios();
        $editUser->formData=$formData;
        $editUser->edit();

    }



    if(!empty($id)){

    $viewUser = new Usuarios();
    $viewUser->id = "$id";
    $valueUser=$viewUser->view();

    extract($valueUser);

    ?>

<form name="EditUser" method="POST" action="">
    <label>ID:</label>
    <input type="number" name="id" value=<?php echo $id; ?> readonly/><br><br>
    <label>Nome: </label>
    <input type="text" name="name" value=<?php echo $nome; ?> required /><br><br>
    <label>E-mail: </label>
    <input type="text" name="email" value=<?php echo $email; ?> required /><br><br>
    <label>Senha: </label>
    <input type="text" name="pass" value=<?php echo $pass; ?> required /><br><br>
    <input type="submit" value="Editar" name="SendEditUser" />
</form>

    <?php


    }else{


        $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";
        header("Location: index.php");
    }

    ?>
</body>
</html>