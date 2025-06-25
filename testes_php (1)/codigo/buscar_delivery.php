<?php 
require_once "conexao.php"; 
require_once "funcoes.php"; 
echo "<pre>";
print_r(buscar_delivery($conexao, 1)); 
echo "</pre>"; ?>