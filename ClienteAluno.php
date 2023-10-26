<?php

class ClienteAluno extends Cliente {

    public string $nome;
    public string $cpf;

    public function exibirDadosAluno() : string 
    {
        $dados  = "DADOS ALUNO <br>";
        $dados .= "CPF: {$this->cpf} <br>";
        $dados .= "Nome: {$this->nome} <br>";
        $dados .= "Endereço: {$this->logradouro} <br>";
        $dados .= "Bairro: {$this->bairro} <br>";

        return "<p>$dados</p>";
            }

}