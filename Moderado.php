<?php
class Moderado Implements IInvestimento{

  public function saldoIvestimento(ContaBancaria $valor){
    $chance = mt_rand(1,100);
    if($chance >= 50){
      return $valor->getValor()*0.25;
    }else{
      return $valor->getValor()*0.07;
    }
  }
}

 ?>
