<?php 
require_once "conexao.php"; 
require_once "funcoes.php"; 
atualizar_usuario($conexao, 1, "usuario_atualizado", "atualizado@exemplo.com", "nova_senha"); 
echo "Usuário atualizado!"; ?>