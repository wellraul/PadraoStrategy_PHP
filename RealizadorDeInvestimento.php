<?php
class RealizadorDeInvestimento{

  public function retornaIvestimento(ContaBancaria $valor, IInvestimento $investimento){
   return $investimento->saldoIvestimento($valor);

  }
}

 ?>
