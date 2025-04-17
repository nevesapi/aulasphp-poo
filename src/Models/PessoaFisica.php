<?php

class PessoaFisica extends Cliente
{
  private int $idade;
  private string $cpf;

  public function __construct(string $nome, string $email, int $idade, string $cpf)
  {
    parent::__construct($nome, $email);

    $this->setIdade($idade);
    $this->setCpf($cpf);
  }

  // cpf
  private function setCpf(string $cpf): void
  {
    $this->cpf = $cpf;
  }
  public function getCpf(): int
  {
    return $this->cpf;
  }

  //idade
  private function setIdade(string $idade): void
  {

    if ($idade < 0) {
      throw new InvalidArgumentException("Idade não pode ser negativa!");
    }
    $this->idade = $idade;
  }

  public function getIdade(): int
  {
    return $this->idade;
  }

  public function verificarIdade(): string
  {
    if ($this->idade < 18) return "Menor de idade";
    if ($this->idade < 60) return "Adulto";
    return "Idoso";
  }
}
