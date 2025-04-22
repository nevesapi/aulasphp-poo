<?php
final class PessoaJuridica extends Cliente
{
  private string $cnpj;
  private int $anoFundacao;
  private string $nomeFantasia;

  public function __construct(string $nome, string $email, string $cnpj, int $anoFundacao, string $nomeFantasia)
  {
    parent::__construct($nome, $email);

    $this->setCnpj($cnpj);
    $this->setAnoFundacao($anoFundacao);
    $this->setNomeFantasia($nomeFantasia);
    $this->setSituacao(Situacao::PENDENTE);
  }

  public function relatorio(): string
  {
    return "<div>" .
      parent::relatorio() . "
      <p><b>Nome fantasia: </b> {$this->getNomeFantasia()}</p>
      <p><b>CNPJ: </b> {$this->getCnpj()}</p>
    </div>";
  }

  private function setCnpj(string $cnpj): void
  {
    $this->cnpj = $cnpj;
  }
  private function setAnoFundacao(int $anoFundacao): void
  {
    $this->anoFundacao = $anoFundacao;
  }
  private function setNomeFantasia(string $nomeFantasia): void
  {
    $this->nomeFantasia = $nomeFantasia;
  }

  public function getCnpj(): string
  {
    return $this->cnpj;
  }
  public function getAnoFundacao(): int
  {
    return $this->anoFundacao;
  }
  public function getNomeFantasia(): string
  {
    return $this->nomeFantasia;
  }
}
