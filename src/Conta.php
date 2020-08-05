<?php

class Conta{
    public $nome;
    public $numero;
    public $saldo;


    function sacar(float $valor)
    {
        if ($valor > $this->saldo){
            echo "Você não possui saldo suficiente!";
        } else {
            $this->saldo -= $valor;
        }
    }

    //PHP 7 
    //public function depositar(float $valor): void
    function depositar(float $valor){
        if($valor > 0){
            $this->saldo += $valor;
            echo "Você depositou R$".$valor;
        } else echo "Houve um problema!";
    }

    function transferir(float $valoratransferir, Conta $contab): void
    {
        if ($valoratransferir > $this->saldo)
        {
            echo "Você não possui saldo suficiente!";
            return; 
        }

        $this->sacar($valoratransferir);
        $contab->depositar($valoratransferir);
    }
}