# Exemplo de programação orientada a objetos usando PHP

## 04_heranca-e-enumaracoes

- Superclass e subclass
- Readequação de propriedades
- Ajustes nas chamadas de construtor, usando `parent` para acessar construtor da superclasse

## 03_encapsulamento-e-metodo-construtor

- Implementação do método construtor obrigando a inicialização do objeto com dados provenientes de parâmetros
- Chamada dos setters a partir do construtor
- Mudança de visibilidade dos setter para privados

## 02_encapsulamento-para-visibilidade

- Utilização de diferentes visibilidades (private e public)
- Controle da forma como os dados são acessados (getters) e modificados (setters)
- Com esta abordagem, podemos esconder detalhes de implementação da classe
- Podemos atribuir diferentes lógicas de negócio (validações, sanitizações etc)

## 01_abstracao-classes-atributos-metodos

- Pasta `src` para organização das classes
- Criação da classe `Cliente.php` _(sempre iniciando com maiúscula)_
  - Definição de atributos
    - Tipoo de visibilidade (public, private e etc.)
    - Tipoo de dados
    - Nome do atributo
  - Definição de métodos contendo:
    - Tipoo de visibilidade (public, private e etc.)
    - Nome do método
    - Detalhes adicionais (Parâmetros, tipoo de retorno etc)
    - Uso do `$this` para acessar os recursos da classe
  - Na `index.php` :
    - Uso do `require_once` para referenciar a classe `Cliente`
    - Criação dos objetos `$clienteA` e `$clienteB` a partir da classe usando `new Cliente()`
    - Atribuição de dados de forma direta aos atributos usando `$nome Objeto->atributo`
    - Chamada de métodos atravé sdo objeto usando `$nome Objeto->metodo()`
