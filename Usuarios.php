<?php

require './Conn.php';

class Usuarios{

    public $connect;

    public function listar(){

        $conn = new Conn();
        $this->connect = $conn->conectar();

        $query_usuarios = "SELECT id, nome, email FROM usuarios ORDER BY id DESC LIMIT 40";
        $result_usuarios = $this->connect->prepare($query_usuarios);
        $result_usuarios->execute();
        return $result_usuarios->fetchAll();



        return "<br><strong>Lista de funcionários</strong><br> <ol> <li>Fulano</li> <li>Beltrano</li> <li>Cicrano</li> </ol>";
    }



}