<?php

class Usuario{

    public string $nome;
    public string $email;
    public int $dade;

    public function cadastrar($nome, $idade, $email): string
    
    {

        $this->nome  = $nome;
        $this->email = $email;
        $this->idade = $idade;

        return "O Usuário {$this->nome}, e-mail {$this->email} e idade {$this->idade} cadastrado com sucesso!<br>";
    }
}