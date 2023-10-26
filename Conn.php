<?php

class Conn
{
    public $host = "10.0.0.125";
    public $user = "root";
    public $pass = "";
    public $dbname = "bweb";
    public $port = 3306;

    public $connect = null;

    public function conectar(){

        try {

            $this-> connect = new PDO("mysql:host=".$this->host . ";port=" . $this->port . ";dbname=" . $this->dbname, $this->user, $this->pass);
            echo "Conexão realizada com sucesso!";
            return $this->connect;

        } catch (Exception $err) {
            return false;
            echo "Erro: Conexão falhou!";

        }

            



    }



}