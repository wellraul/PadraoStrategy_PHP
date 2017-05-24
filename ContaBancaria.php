<?php
class ContaBancaria{

  private $valor;

  public function __construct($novoValor){
    return $this->valor = $novoValor;
  }
  public function getValor(){
    return $this->valor;
  }
  public function deposita($valor){
    return $this->valor += $valor;
  }

}

 ?>
