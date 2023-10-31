<?php

include './Conn.php';



class Usuarios{

    public array $formData;
    public $connect;

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

}