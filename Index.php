<?php
spl_autoload_register(function($nomeDaClasse) {
    require_once($nomeDaClasse.".php");
});
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Investimento</title>
  </head>
  <body>

<?php
  $deposito = new ContaBancaria(1000);
  $realiza = new RealizadorDeInvestimento();
  echo $valor = $realiza->retornaIvestimento($deposito, new Conservador());
  echo '</br>';
  echo $deposito->deposita($valor);
  echo '</br>';
  echo $realiza->retornaIvestimento($deposito, new Moderado());
  echo '</br>';
  echo $realiza->retornaIvestimento($deposito, new Arrojado());
  echo "</br>";

 ?>
  </body>
</html>
