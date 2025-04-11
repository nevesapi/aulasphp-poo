<?php

class Cliente
{
  public string $nome;
  public int $idade;
  public string $email;

  public function setNome(string $nome): void
  {
    $this->nome = $nome;
  }

  public function setIdade(string $idade): void
  {

    if ($idade < 0) {
      throw new InvalidArgumentException("Idade não pode ser negativa!");
    }
    $this->idade = $idade;
  }

  public function setEmail(string $email): void
  {

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      throw new InvalidArgumentException("E-mail inválido!");
    }
    $this->email = $email;
  }


  public function getNome(): string
  {
    return $this->nome;
  }

  public function getIdade(): int
  {
    return $this->idade;
  }

  public function getEmail(): string
  {
    return $this->email;
  }
}
