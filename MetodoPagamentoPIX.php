<?php

class MetodoPagamentoPIX extends MetodoPagamento{

    public function calcularDescontoPIX(): string
    {
        $valorReal = parent::converteReal($this->valor);
        return "Valor do pagamento {$this->tipo} é R$ {$valorReal}<br>";

    }
}