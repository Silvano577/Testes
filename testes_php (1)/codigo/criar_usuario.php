<?php 
require_once "conexao.php"; 
require_once "funcoes.php"; 
criar_usuario($conexao, "usuario_teste", "teste@exemplo.com", "123456"); 
echo "Usuário criado!"; ?>