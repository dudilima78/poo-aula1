<?php

class Cliente{

   public $nConta;
   public $tConta;
   public $nRegistro;
   public $saldo;
   public $limite;


   //definindo metódo com passagem de paramÊtros

   function setCliente($nConta, $tConta, $nRegistro, $saldo, $limite){

        $this->nConta = $nConta;
        $this->tConta = $tConta;
        $this->nRegistro = $nRegistro;
        $this->saldo = $saldo;
        $this->limite = $limite;
   }

   function exibirDadosCliente(){

       echo "Número da Conta: {$this->nConta}<br>";
       echo "Tipo da Conta: {$this->tConta}<br>";
       echo "Número Registro: {$this->nRegistro}<br><br>";
       echo "Saldo: R$ {$this->saldo}<br>";
       echo "Limite: R$ {$this->limite}<br>";
       echo "<Hr>";
   }

   function depositar($valor){

       $this->saldo = $this->saldo + $valor;
       echo "Saldo Atual: R$ {$this->saldo}<br>";
       echo "<Hr>";
    }

   function sacar($valor){
    if ($valor>$this->saldo+$this->limite){
        echo "Excedeu o limite permitido para saque<br>";
        echo "Limite de Saque: R$ {$this->saldo}<br>";
        echo "<Hr>";
    }else{
        $this->saldo = $this->saldo-$valor;
        echo "Saldo Atual: R$ {$this->saldo}<br>";
        echo "<Hr>";
    }

    
   }
}