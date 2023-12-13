<?php

include './Conn.php';



class Usuarios{

    public array $formData;
    public $connect;
    public int $id;

    public function listar(){

        $conn = new Conn();
        $this->connect = $conn->connectDB();

        $query_usuarios = "SELECT id, nome, email, pass FROM usuarios ORDER BY id ASC LIMIT 40";
        $result_usuarios = $this->connect->prepare($query_usuarios);
        $result_usuarios->execute();
        return $result_usuarios->fetchAll();

        //return "<br><strong>Lista de funcionários</strong><br> <ol> <li>Fulano</li> <li>Beltrano</li> <li>Cicrano</li> </ol>";
    }

    public function create()
    {

        //var_dump($this->formData);

        $conn = new Conn();
        $this->connect = $conn->connectDB();
        $query_usuario = "INSERT INTO usuarios (nome, email, pass) VALUES (:name, :email, :pass)";
        
        $add_usuario = $this->connect->prepare($query_usuario);

        $add_usuario->bindParam(':name', $this->formData['name']);
        $add_usuario->bindParam(':email', $this->formData['email']);
        $add_usuario->bindParam(':pass', $this->formData['pass']);

        $add_usuario->execute();

        if($add_usuario->rowCount()){

            return true;
    }else{

            return false;   
    }



}

public function view()
{
    $conn = new Conn();
    $this->connect = $conn->connectDB();
    $query_view = "SELECT id, nome, email, pass 
    FROM usuarios 
    WHERE id=:id 
    LIMIT 1";
    $result_view_usuarios = $this->connect->prepare($query_view);
    $result_view_usuarios->bindParam(':id', $this->id);
    $result_view_usuarios->execute();
    return $result_view_usuarios->fetch();


}

public function edit()
{
    $conn = new Conn();
    var_dump($this->formData);
    $conn = new Conn();

    $this->connect = $conn->connectDB();
    $query_usuario = "UPDATE usuarios SET nome=:name, email=:email, pass=:pass WHERE id=:id";
    $edit_usuario = $this->connect->prepare($query_usuario);
    $edit_usuario->bindParam(':name', $this->formData['name']);
    $edit_usuario->bindParam(':email', $this->formData['email']);
    $edit_usuario->bindParam(':pass', $this->formData['pass']);
    $edit_usuario->bindParam(':id', $this->formData['id']);
    $edit_usuario->execute();

    if($edit_usuario->rowCount()){
        return true;
    
    }else{
        return false;   
    }


}

}