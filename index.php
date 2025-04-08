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

  $clienteA->nome = "Ciclano";
  $clienteA->idade = 30;
  $clienteA->email = " exemplo@teste.com";
  ?>

  <h2>Acessando/lendo os dados dos objetos</h2>
  <h3>Cliente A</h3>

  <div>
    <?= $clienteA->exibirDados() ?>
  </div>
  <ul>
    <li><b>Idade: </b><?= $clienteA->idade ?></li>
    <li><b>E-mail: </b><?= $clienteA->email ?></li>
  </ul>
  <h2>Testes de acessos aos recursos da classe através do objeto</h2>
  <pre><?= var_dump($clienteA) ?></pre>
  <pre><?= var_dump($clienteB) ?></pre>
</body>

</html>