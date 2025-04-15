<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemplo 03</title>
</head>

<body>
  <h1>PHP com POO - Exemplo 03</h1>
  <hr>

  <?php
  require_once "src/Cliente.php";

  //Criando instancia da classe
  $clienteA = new Cliente("Ciclano", 30, "exemplo@tes.com");

  ?>

  <h2>Acessando/lendo os dados dos objetos</h2>
  <ul>
    <li><b>Nome: </b><?= $clienteA->getNome() ?></li>
    <li><b>Idade: </b><?= $clienteA->getIdade() ?></li>
    <li><b>E-mail: </b><?= $clienteA->getEmail() ?></li>
  </ul>

  <hr>

  <h2>Testes de acessos aos recursos da classe através do objeto</h2>
  <pre><?= var_dump($clienteA) ?></pre>
</body>

</html>