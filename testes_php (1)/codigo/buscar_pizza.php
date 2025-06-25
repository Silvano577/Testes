<?php 
require_once "conexao.php"; 
require_once "funcoes.php"; 
echo "<pre>"; 
print_r(buscar_pizza($conexao, 1, "Calabresa")); 
echo "</pre>"; ?>