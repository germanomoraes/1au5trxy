<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# PWEB-laravel - Atividade Prática: Rotas, Views e Controllers

Repositório destinado à resolução da atividade prática da disciplina de **Programação Web I** do curso de **Análise e Desenvolvimento de Sistemas** do **IFCE - Campus Boa Viagem**. Desenvolvido por **Germano Moraes** como parte das atividades do IFCE Boa Viagem.

## Objetivos
Compreender o funcionamento das rotas no Laravel e sua integração com views e controllers, seguindo o padrão arquitetural MVC (Model-View-Controller).

## Tecnologias Utilizadas
* PHP
* Laravel Framework
* Composer
* VSCode

## Como Executar o Projeto

1.  **Clone o repositório:**
    ```bash
    git clone https://github.com/germanomoraes/PWEB.git
    ```

2.  **Navegue até a pasta do projeto:**
    ```bash
    cd PWEB/PWEB-laravel
    ```

3.  **Instale as dependências do PHP:**
    ```bash
    composer install
    ```

4.  **Configure o ambiente:**
    * Crie o arquivo `.env` copiando o `.env.example`:
        ```bash
        cp .env.example .env
        ```
    * Gere a chave da aplicação:
        ```bash
        php artisan key:generate
        ```

5.  **Inicie o servidor de desenvolvimento:**
    ```bash
    php artisan serve
    ```

6.  **Acesse no navegador:**
    [http://localhost:8000](http://localhost:8000)

---
