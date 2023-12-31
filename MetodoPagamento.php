<?php

abstract class MetodoPagamento{

    public float $valor;
    public string $tipo;

    public function __construct(float $valor, string $tipo)
    {

        $this->valor = $valor;
        $this->tipo = $tipo;
    }

    abstract function calcularJuros();

    public function verValor() : string
    {
        return "Valor do pagamento {$this->tipo} é R$ {$this->valor} <br>";
    }

    public function converteReal(float $valor): string
    {
        return number_format($valor, '2', ',', '.'); 
    }
}