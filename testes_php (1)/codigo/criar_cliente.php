<?php 
require_once "conexao.php"; 
require_once "funcoes.php"; 
criar_cliente($conexao, "Novo Cliente", "2000-01-01", "Rua Teste", "9999-9999", "foto.jpg"); 
echo "Cliente criado!"; ?>