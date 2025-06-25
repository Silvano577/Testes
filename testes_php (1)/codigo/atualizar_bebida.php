<?php 

require_once "conexao.php"; 
require_once "funcoes.php"; 
atualizar_bebida($conexao, 1, "Coca-Cola Zero", 6.00, "coca_zero.jpg"); 
echo "Bebida atualizada!"; ?>