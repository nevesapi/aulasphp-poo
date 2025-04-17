<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemplo 04 | Herança</title>
</head>

<body>
  <h1>PHP com POO - Exemplo 04 | Herança</h1>
  <hr>

  <?php
  require_once "./src/Situacao.php"; //enum class
  require_once "./src/Cliente.php"; //main class
  require_once "./src/PessoaFisica.php"; //sub class
  require_once "./src/PessoaJuridica.php"; //sub class

  $clientePF = new PessoaFisica("Teste", "teste@exemplo.com", 20, "123.456.789-00");
  $clientePJ = new PessoaJuridica("Denis", "tenis@exemplo.com", "12.345.6789/0001", 2025, "Bilola")
  ?>

  <pre><?= var_dump($clientePF) ?></pre>
  <pre><?= var_dump($clientePJ) ?></pre>
</body>

</html>