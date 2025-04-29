<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemplo de conflito | NameSpaces</title>
</head>

<body>
  <h1>Evitando conflito de classes com NameSpaces</h1>
  <hr>
  <?php

  use Fornecedores\Pagamento;
  use Prestadores\Pagamento as PrestadoresPagamento;

  require_once "src/Fornecedores/Pagamento.php";
  require_once "src/Prestadores/Pagamento.php";

  $pagamentoFornecedor = new Pagamento();
  $pagamentoPrestadores = new PrestadoresPagamento();
  ?>

  <pre><?= var_dump($pagamentoFornecedor) ?></pre>
  <pre><?= var_dump($pagamentoPrestadores) ?></pre>

</body>

</html>