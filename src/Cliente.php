<?php

class Cliente
{
  public string $nome;
  public int $idade;
  public string $email;

  public function exibirDados(): void
  {
    echo "<p style='color:red'>Este é o cliente $this->nome</p>";
  }
  public function verificarIdade(int $idade): bool
  {
    return true;
  }
}
