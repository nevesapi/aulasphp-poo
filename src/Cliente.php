<?php

class Cliente
{
  public string $nome;
  public int $idade;
  public string $email;

  public function __construct(string $nome, int $idade, string $email)
  {
    $this->setNome($nome);
    $this->setIdade($idade);
    $this->setEmail($email);
  }

  public function verificarIdade(): string
  {
    if ($this->idade < 18) return "Menor de idade";
    if ($this->idade < 60) return "Adulto";
    return "Idoso";
  }

  private function setNome(string $nome): void
  {
    $this->nome = $nome;
  }

  private function setIdade(string $idade): void
  {

    if ($idade < 0) {
      throw new InvalidArgumentException("Idade não pode ser negativa!");
    }
    $this->idade = $idade;
  }

  private function setEmail(string $email): void
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
