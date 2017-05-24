<?php
class Arrojado Implements IInvestimento{
  public function saldoIvestimento(ContaBancaria $valor){
        $chance = mt_rand(1, 100);

        if ($chance <= 20)
        {
            return $valor->getValor() * 0.05;
        }
        else if ($chance <= 50)
        {
            return $valor->getValor() * 0.03;
        }
        else
        {
            return $valor->getValor() * 0.006;
        }
    }
  }


 ?>
