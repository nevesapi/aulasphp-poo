<?php

namespace MeuProjeto;

abstract  class Calculadora
{
  public static function soma(float $valor1, float $valor2): float
  {
    return $valor1 + $valor2;
  }
}
