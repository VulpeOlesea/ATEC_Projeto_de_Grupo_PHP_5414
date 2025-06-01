# 🧱 Projeto de Grupo – UFCD 5414: Sistema de Gestão de Conteúdos (PHP/MySQL)  
_ATEC – Curso de Tecnologias e Programação de Sistemas de Informação (Nível 5)_

## 📘 Sobre o Projeto

Este repositório contém o desenvolvimento de um sistema de **gestão de conteúdos (backend)**, realizado no âmbito da **UFCD 5414**, com recurso a tecnologias **PHP** e **MySQL**.

O objetivo é construir um sistema funcional que permita a gestão de **utilizadores**, **categorias**, **produtos** e **encomendas**, com funcionalidades específicas de registo, autenticação, controlo de acessos e apresentação de dados no frontend.

## 🎯 Objetivos de Aprendizagem

- Desenvolver um backend funcional em **PHP/MySQL**
- Implementar um sistema de autenticação e gestão de contas
- Praticar manipulação de dados, relacionamentos e controlo de permissões
- Desenvolver interfaces de administração para categorias, produtos e utilizadores
- Criar um frontend de apresentação com lógica de encomenda
- Trabalhar com **CRUD completo**, validações e uploads de ficheiros

## 🧠 Funcionalidades Implementadas

### 🔐 Autenticação e Gestão de Utilizadores

- Registo de utilizadores (manual e por auto-registo)
- Prevenção de registos duplicados
- Escolha obrigatória de **Distrito** e **Concelho**
- Login e controlo de sessões
- Edição de perfil (exceto email)
- Visualização da data do último acesso
- Contagem de utilizadores por **Distrito** e **Concelho** (admin)

### 🗂️ Gestão de Categorias

- Criação, edição e eliminação de categorias
- Exibição da quantidade de produtos por categoria

### 📦 Gestão de Produtos

- Criação, edição e eliminação de produtos
- Cada produto possui:
  - Título
  - Descrição
  - Preço
  - Categoria
  - Imagem(s)
- Garantia de manutenção de imagem em caso de edição sem nova imagem
- Substituição correta de imagem se uma nova for carregada

### 🛍️ Encomendas (Extra - Frontend)

- Apresentação de produtos por categoria numa "montra"
- Registo de encomendas por utilizador
- Backend mostra detalhes da encomenda: data, utilizador, e produtos incluídos

## 🛠️ Tecnologias Utilizadas

- PHP
- MySQL
- HTML
- CSS
- Bootstrap
- Ferramenta de desenvolvimento: XAMPP

## 👥 Trabalho de Grupo
Este projeto foi desenvolvido de forma colaborativa por alunos do curso:

- Leila Arruda
- Lucas Patrício
- Olesea Vulpe
- Rúben Fonseca
