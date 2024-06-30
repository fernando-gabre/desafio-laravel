# Projeto Laravel - Cadastro de Produto, Categoria e Usuário

Este projeto é um desafio Laravel para gerenciar o cadastro de produtos, categorias e usuários. Ele fornece alguns endpoint para acesso externo 
para listar os produtos cadastrados e listar os produtos de um determinado usuário. Possui documentação swagger para a api.

## Requisitos

- PHP (>= 8.1)
- Composer
- MySQL 

## Instalação

Siga os passos abaixo para configurar o projeto em seu ambiente local.

### 1. Clonar o Repositório

Clone o repositório do projeto:

```bash
git clone https://github.com/fernando-gabre/desafio-laravel.git

 - Atualizar dados do arquivo .env

Executar no diretorio do projeto
 - composer install
 - php artisan key:generate
 - php artisan migrate
 - php artisan db:seed
