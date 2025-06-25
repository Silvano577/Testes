<?php 
require_once "conexao.php"; 
require_once "funcoes.php"; 
echo "<pre>"; 
print_r(buscar_pedido($conexao, 1)); 
echo "</pre>"; ?>