<?php

class MetodoPagamentoBoleto extends MetodoPagamento{

    public function calcularJuros() : string
    {
        $valorReal = parent::converteReal($this->valor);
        return "Valor do pagamento {$this->tipo} é R$ {$valorReal}<br>";

    }
}