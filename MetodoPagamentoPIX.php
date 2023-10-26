<?php

class MetodoPagamentoPIX extends MetodoPagamento{

    public function calcularDescontoPIX(): string
    {
        return "Valor do pagamento {$this->tipo} é R$ {$this->valor}<br>";

    }
}