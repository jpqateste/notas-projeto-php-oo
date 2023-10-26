<?php

class ClientePJ extends Cliente 
{
    public string $razaoSocial;
    public string $cnpj;

    public function exibirDadosPJ() : string 
    {
        $dados  = "DADOS EMPRESA <br>";
        $dados .= "CNPJ: {$this->cnpj} <br>";
        $dados .= "Nome: {$this->razaoSocial} <br>";
        $dados .= "Endereço: {$this->logradouro} <br>";
        $dados .= "Bairro: {$this->bairro} <br>";

        return "<p>$dados</p>";

    }
    

}