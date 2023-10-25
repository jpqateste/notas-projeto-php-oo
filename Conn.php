<?php

class Conn
{
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $dbname = "bweb";
    public $port = 3306;

    public $connect = null;

    public function conectar(){

        try {

            $this-> connect = new PDO("mysql:host=".$this->host . ";port=" . $this->port . ";dbname=" . $this->daname, $this->user, $this->pass);
            echo "Erro: Conexão realizada com sucesso!";
            return $this->connect;

        } catch (Exception $err) {
            return false;
            echo "Erro: Conexão falhou!";

        }

            



    }



}