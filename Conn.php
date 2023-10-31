<?php

class Conn
{
    public string $db = "mysql";
    public string $host = "10.0.0.125";
    public string $user = "root";
    public string $pass = "";
    public string $dbname = "bweb";
    public int $port = 3306;

    //Dados conexão POSTRGRES
    //$user = "postgres"; public $pass = "admin"; $port = 5432;

    public $connect = null;

    public function connectDB(){

        try {

            $this-> connect = new PDO("mysql:host=".$this->host . ";port=" . $this->port . ";dbname=" . $this->dbname, $this->user, $this->pass);
            //Conexão POSTGRESQL
            //$this-> connect = new PDO("pgsql:host=".$this->host . ";port=" . $this->port . ";dbname=" . $this->dbname, $this->user, $this->pass);
            echo "Conexão realizada com sucesso!";
            return $this->connect;

        } catch (Exception $err) {
            return false;
            echo "Erro: Conexão falhou!";

        }

            



    }



}