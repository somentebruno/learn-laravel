# Especialização em Laravel — Laboratório de Estudos e Prática com Eloquent

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Logotipo do Laravel">
  </a>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=flat-square&logo=php&logoColor=white" alt="PHP 8.2+">
  <img src="https://img.shields.io/badge/Laravel-11.x-FF2D20?style=flat-square&logo=laravel&logoColor=white" alt="Laravel 11">
  <img src="https://img.shields.io/badge/Motor_de_Templates-Blade-F05340?style=flat-square&logo=laravel&logoColor=white" alt="Motor de Templates Blade">
  <img src="https://img.shields.io/badge/ORM-Eloquent-red?style=flat-square" alt="Eloquent ORM">
  <img src="https://img.shields.io/badge/Banco_de_Dados-SQLite-003B57?style=flat-square&logo=sqlite&logoColor=white" alt="Banco SQLite">
  <img src="https://img.shields.io/badge/Status-Em_Desenvolvimento-blue?style=flat-square" alt="Status: Em Desenvolvimento">
  <img src="https://img.shields.io/badge/Licen%C3%A7a-MIT-green?style=flat-square" alt="Licença MIT">
</p>

---

## 📋 Sumário

- [Visão Geral](#-visão-geral)
- [Tecnologias Utilizadas](#-tecnologias-utilizadas)
- [Conceitos e Recursos Estudados](#-conceitos-e-recursos-estudados)
  - [1. Roteamento e Controladores](#1-roteamento-e-controladores)
  - [2. Motor de Visualização Blade](#2-motor-de-visualização-blade)
  - [3. Banco de Dados e Migrações](#3-banco-de-dados-e-migrações)
  - [4. Mapeamento Objeto-Relacional com Eloquent](#4-mapeamento-objeto-relacional-com-eloquent)
  - [5. Validação de Formulários](#5-validação-de-formulários)
- [Estrutura de Pastas do Projeto](#-estrutura-de-pastas-do-projeto)
  - [Rotas de Teste e Demonstração](#-rotas-de-teste-e-demonstração)
- [Instalação e Execução Local](#-instalação-e-execução-local)
- [Próximos Tópicos de Estudo](#-próximos-tópicos-de-estudo)
- [Licença](#-licença)

---

## 🎯 Visão Geral

Este repositório reúne o código prático, experimentos e implementações desenvolvidos durante a trilha de **Especialização em Laravel**.

O foco central deste repositório é documentar o domínio prático dos pilares do framework Laravel e do ORM Eloquent, demonstrando desde a organização arquitetural em MVC até recursos avançados de templates, evolução segura de esquemas de banco de dados e persistência orientada a objetos.

---

## 🛠️ Tecnologias Utilizadas

- **PHP 8.2+**: Tipagem declarativa, recursos modernos da linguagem e tratamento de erros.
- **Laravel 11**: Estrutura moderna e simplificada de inicialização de aplicações web.
- **Blade Template Engine**: Criação de interfaces reutilizáveis, herança visual e componentes.
- **Eloquent ORM**: Abstração e manipulação do banco de dados através do padrão *Active Record*.
- **SQLite / MySQL**: Gerenciamento de dados relacional.
- **Composer**: Gerenciador de dependências e pacotes do ecossistema PHP.

---

## 📚 Conceitos e Recursos Estudados

### 1. Roteamento e Controladores
- **Rotas com Verbos HTTP**: Definição expressiva de rotas para requisições do tipo `GET` e `POST`.
- **Rotas Nomeadas**: Atribuição de identificadores únicos às rotas para geração dinâmica de links desacoplados de URLs fixas.
- **Parâmetros Dinâmicos e Opcionais**: Captura de variáveis diretamente da URL, incluindo parâmetros opcionais com valores pré-definidos (ex.: `/servico/{codigo?}`).
- **Controladores Convencionais**: Métodos de controle focados em ações específicas de listagem, exibição e armazenamento (`index`, `create`, `store`).
- **Controladores de Ação Única (*Single Action Controllers*)**: Utilização do método mágico `__invoke` para centralizar controladores de responsabilidade única.

### 2. Motor de Visualização Blade
Foram exploradas e comparadas as duas abordagens principais de construção de interfaces:

- **Abordagem Clássica (Herança de Templates)**:
  - Criação de layouts base utilizando `@extends`, marcação de blocos dinâmicos com `@yield` e preenchimento com `@section`.
  - Reutilização de conteúdo padrão através da diretiva `@parent`.
  - Divisão de páginas em partes menores com inclusões condicionais inteligentes: `@include`, `@includeIf`, `@includeWhen` e `@includeFirst`.
  - Renderização direta de listas através da diretiva `@each`.

- **Abordagem Moderna (Arquitetura Orientada a Componentes)**:
  - Desenvolvimento de **Componentes Anônimos** em Blade para elementos reutilizáveis de interface (como botões e caixas de alerta).
  - Desenvolvimento de **Componentes Baseados em Classes** (`app/View/Components/`) com tratamento de dados encapsulado.
  - Utilização de **Slots Padrão** e **Slots Nomeados** (`<x-slot:nome>`) para composição flexível de páginas.
  - Manipulação e mescla de atributos HTML dinâmicos via `$attributes->merge([...])`.

- **Diretivas de Controle de Fluxo**:
  - Condicionais: `@if`, `@elseif`, `@else` e `@switch`.
  - Laços de repetição: `@foreach`, `@forelse` com tratamento de listas vazias via `@empty`, `@for` e `@while`.
  - Controle de iteração: modificadores `@continue` e `@break`.
  - Formatação e passagem de coleções para scripts via diretiva `@json`.

- **Compositores de Visão (*View Composers*)**:
  - Centralização do compartilhamento de dados globais (como menus de navegação) através de `View::composer()` registrado no `AppServiceProvider`, evitando duplicação de chamadas dentro dos controladores.

### 3. Banco de Dados e Migrações
- **Criação de Esquemas de Banco**:
  - Construção declarativa de tabelas utilizando o construtor `Schema::create`.
  - Emprego de colunas tipadas: textos curtos (`string`), caracteres fixos (`char`), datas (`date`), textos longos (`text`), identificadores automáticos (`id`) e marcas temporais (`timestamps`).
  - Definição de regras de nulidade de colunas (`nullable`).
- **Evolução Incremental de Esquema**:
  - Alteração de tabelas existentes através de migrações dedicadas (`Schema::table`) sem perda de registros preexistentes.
  - Implementação obrigatória de rotinas reversíveis através do método `down()` (`dropColumn`, `dropIfExists`).

### 4. Mapeamento Objeto-Relacional com Eloquent
- **Padrão Active Record**: Cada modelo representa uma entidade da aplicação e encapsula o acesso à sua respectiva tabela.
- **Convenção versus Configuração Personalizada**:
  - Sobrescrita de padrões do framework quando necessário para adequação a bancos legados ou regras de negócio:
    - Definição de tabela customizada via propriedade `protected $table`.
    - Definição de chave primária customizada via `protected $primaryKey`.
    - Customização dos nomes das colunas de data via constantes `CREATED_AT` e `UPDATED_AT`.
- **Operações Fundamentais de Dados**:
  - Consulta e recuperação de dados através de métodos estáticos do modelo (`Model::get()`).
  - Instanciação de novos registros, atribuição de valores e persistência no banco de dados via `$model->save()`.

### 5. Validação de Formulários
- Validação no lado do servidor diretamente na requisição através de `$request->validate([...])`.
- Aplicação de regras essenciais: campos obrigatórios (`required`), limites de tamanho mínimo e máximo (`min`, `max`), formato de e-mail e regras de integridade.
- Redirecionamento automático com retenção dos dados preenchidos e exibição de mensagens de inconsistência.

---

## 📁 Estrutura de Pastas do Projeto

```text
tw-eloquent/
├── app/
│   ├── Http/Controllers/
│   │   ├── ClienteController.php        # Listagem, validação e persistência com Eloquent
│   │   ├── SiteController.php           # Ações de páginas estáticas
│   │   ├── SiteHerancaController.php    # Demonstração de templates com herança clássica
│   │   ├── SiteComponenteController.php # Demonstração de templates baseados em componentes
│   │   └── VerServicos.php              # Exemplo de controlador de ação única (__invoke)
│   ├── Models/
│   │   ├── Client.php                   # Modelo de cliente convencional
│   │   ├── Employee.php                 # Modelo de funcionário
│   │   └── Funcionario.php              # Modelo com configurações customizadas (tabela, PK e datas)
│   ├── Providers/
│   │   └── AppServiceProvider.php       # Registro de View Composers para compartilhamento de menus
│   └── View/Components/                 # Classes de componentes Blade reutilizáveis
│
├── database/
│   └── migrations/                      # Histórico de criação e alteração incremental de tabelas
│
├── resources/views/
│   ├── clientes/                        # Telas de listagem e formulário de cadastro de clientes
│   ├── componente/                      # Telas construídas com a abordagem de componentes
│   ├── components/                      # Definições de componentes anônimos e layouts
│   ├── exemplos/                        # Demonstrações de diretivas de fluxo e sintaxe do Blade
│   └── heranca/                         # Telas construídas com a abordagem clássica de herança
│
└── routes/
    └── web.php                          # Declaração das rotas web da aplicação
```

---

## 🌐 Rotas de Teste e Demonstração

Com a aplicação em execução, os conceitos podem ser visualizados diretamente pelas seguintes rotas:

| Rota | Descrição do Conceito Demonstrado |
| :--- | :--- |
| `/clientes` | Listagem de clientes com dados carregados via Eloquent |
| `/clientes/create` | Formulário de cadastro com validação de dados no servidor e gravação |
| `/site/heranca` | Layout construído com o modelo clássico de **Herança de Templates (`@extends`)** |
| `/site/componente` | Layout construído com o modelo moderno de **Componentes Blade (`<x-layout>`)** |
| `/condicional/if` | Exemplos práticos das diretivas condicionais `@if`, `@elseif` e `@else` |
| `/condicional/switch` | Exemplos práticos da diretiva condicional `@switch` e `@case` |
| `/exibicao/json` | Serialização e passagem de dados PHP para JSON via diretiva `@json` |
| `/servico/php` | Execução de rota com controlador de ação única e parâmetro dinâmico |

---

## 💻 Instalação e Execução Local

### Pré-requisitos
- **PHP** na versão 8.2 ou superior
- **Composer** instalado globalmente
- Extensão do PHP para o banco de dados pretendido (`pdo_sqlite` ou `pdo_mysql`)

### Passo a Passo

1. **Clonar o repositório:**
   ```bash
   git clone https://github.com/somentebruno/learn-laravel.git
   cd learn-laravel
   ```

2. **Instalar as dependências do projeto:**
   ```bash
   composer install
   ```

3. **Configurar as variáveis de ambiente:**
   ```bash
   cp .env.example .env
   ```

4. **Gerar a chave única da aplicação:**
   ```bash
   php artisan key:generate
   ```

5. **Preparar e executar as migrações no banco de dados:**
   - *Caso utilize SQLite:*
     ```bash
     touch database/database.sqlite
     php artisan migrate
     ```
   - *Caso utilize MySQL/PostgreSQL:* configure as credenciais no arquivo `.env` e execute `php artisan migrate`.

6. **Iniciar o servidor de desenvolvimento:**
   ```bash
   php artisan serve
   ```
   Acesse a aplicação pelo navegador em: **`http://localhost:8000`**

---

## 🚀 Próximos Tópicos de Estudo

- [ ] Relacionamentos no Eloquent (*Um para Um*, *Um para Muitos*, *Muitos para Muitos*)
- [ ] Carregamento Adiantado (*Eager Loading*) com o método `with()` para prevenção de consultas $N+1$
- [ ] Mutadores, Acessores e Conversão de Tipos (*Casts*) em Modelos
- [ ] Escopos de Consulta (*Query Scopes*) locais e globais
- [ ] Isolamento de regras de validação em classes dedicadas (*Form Requests*)
- [ ] Geração de dados de teste com Fábricas (*Factories*) e Povoamento de Dados (*Seeders*)

---

## 📄 Licença

Este projeto é desenvolvido para fins exclusivamente educacionais e de estudo, distribuído sob a licença [MIT](LICENSE).
