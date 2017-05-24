<?php
class Conservador Implements IInvestimento{
  public function saldoIvestimento(ContaBancaria $valor){
    return $valor->getValor() * 0.08;
  }
}

 ?>
