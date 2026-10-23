# Garage Classics - PHP + MySQL

## Funcionalidade
Formulario de contato com CRUD das mensagens.

## Banco
Banco: garage_classics
Tabela: mensagens

## Arquivos PHP
- php/conexao.php - conexão PDO.
- php/contato.php - CREATE (INSERT).
- php/mensagens.php - READ (SELECT).
- php/editar.php - formulário de edição.
- php/atualizar.php - UPDATE.
- php/excluir.php - DELETE.

## Teste no XAMPP
1. Coloque a pasta do projeto em C:\xampp\htdocs\
2. Inicie Apache e MySQL.
3. Abra o phpMyAdmin.
4. Importe garage_classics.sql.
5. Acesse o projeto por http://localhost/NOME_DA_PASTA/
6. Abra CONTATO e envie uma mensagem.
7. Abra php/mensagens.php.
8. Teste EDITAR e EXCLUIR.
