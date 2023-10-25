<?php

class Conn
{
    public $host = "";
    public $user = "";
    public $pass = "";
    public $dbname = "";
    public $port = 3306;

    public $connect = null;

    public function conecta(){

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