# Estrutura básica de uma aplicação usando Slim Framework

Sistema básico PHP usando como base Slim Framework, CakePHP-ORM, Monolog e Twig.
Este exemplo utiliza como banco de dados MYSQL.

Tutorial para criação de aplicação seguido: https://gist.github.com/odan/d2b889c350aa2ea0ff8e5ca93ce588a2#installation.

Script para criação do banco de dados se encontra em: /config/database.sql

Configuração do banco de dados deve ser feita em: /cofig/settings.php

Dependências:
 - "php": "^7.0",
 - "cakephp/orm": "dev-master",
 - "monolog/monolog": "dev-master",
 - "slim/slim": "^3.9",
 - "slim/twig-view": "dev-master"

Na raiz do projeto deve-se criar os diretórios com permissão de escrita:
 - /tmp
 - /log 
