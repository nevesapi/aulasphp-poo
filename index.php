<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemplo 07 | Autoload com Composer</title>
</head>

<body>
  <h1>PHP com POO - Exemplo 07 | Autoload com Composer</h1>
  <hr>

  <?php

  use MeuProjeto\Models\PessoaJuridica;
  use MeuProjeto\Models\PessoaFisica;

  require_once "vendor/autoload.php";

  $clientePF = new PessoaFisica("Teste", "teste@exemplo.com", 20, "123.456.789-00");
  $clientePJ = new PessoaJuridica("Denis", "tenis@exemplo.com", "12.345.6789/0001", 2025, "Bilola")
  ?>

  <h2>Relatórios | Clientes</h2>
  <h3>PF</h3>
  <?= $clientePF->relatorio() ?>
  <hr>

  <h3>PJ</h3>
  <?= $clientePJ->relatorio() ?>
  <!-- Acessando valor da Enum Situação -->
  <p><b>Situação: </b><?= $clientePJ->getSituacao()->name ?></p>
</body>

</html>