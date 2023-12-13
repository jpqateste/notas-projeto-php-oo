<?php

session_start();

ob_start();

//Recebe ID URL
$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);


// verificar se var possui valor
if(!empty($id)){

//incluindo arquivos

require './Usuarios.php';

$deleteUser = new Usuarios();

$deleteUser->id = $id;

$statusAction = $deleteUser->delete();

if($statusAction){

    $_SESSION['msg'] = "<p>Usuário apagado com sucesso!</p>";
    header('Location: index.php');
}else{

    $_SESSION['msg'] = "<p>Erro usuário não deletado!</p>";
    header('Location: index.php');
}
 

}else{

    $_SESSION['msg'] = "<p>Erro usuário não encontrado!</p>";
    header('Location: index.php');

}

?>