<?php

class Cliente
{
  public string $nome;
  public int $idade;
  public string $email;

  public function exibirDados(): void
  {
    echo "Este é o cliente $this->nome";
  }
  public function verificarIdade(int $idade): bool
  {
    return true;
  }
}
