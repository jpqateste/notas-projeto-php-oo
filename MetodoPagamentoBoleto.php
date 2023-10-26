<?php

class MetodoPagamentoBoleto extends MetodoPagamento{

    public function calcularJuros() : string
    {
        
        return "Valor do pagamento {$this->tipo} é R$ {$this->valor}<br>";

    }
}