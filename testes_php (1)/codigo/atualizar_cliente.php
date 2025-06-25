<?php 
require_once "conexao.php"; 
require_once "funcoes.php"; 
atualizar_cliente($conexao, 1, "Cliente Atualizado", "2001-01-01", "Rua Nova", "8888-8888", "foto_nova.jpg"); 
echo "Cliente atualizado!"; ?>