<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemplo 01</title>
</head>

<body>
  <h1>PHP com POO - Exemplo 01</h1>
  <hr>

  <?php
  require_once "src/Cliente.php";

  //Criando instancia da classe
  $clienteA = new Cliente();
  $clienteB = new Cliente();

  ?>

  <h2>Testes de acessos aos recursos da classe atravé sdo objeto</h2>
  <pre><?= var_dump($clienteA) ?></pre>
  <pre><?= var_dump($clienteB) ?></pre>
</body>

</html>