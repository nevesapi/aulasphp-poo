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
  require_once "./src/Cliente.php"; //main class
  require_once "./src/PessoaFisica.php"; //sub class
  $clientePF = new PessoaFisica("Teste", "teste@exemplo.com", 20, "123.456.789-00");
  ?>

  <pre><?= var_dump($clientePF) ?></pre>
</body>

</html>