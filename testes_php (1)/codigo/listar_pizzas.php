<?php 
require_once "conexao.php"; 
require_once "funcoes.php"; 
echo "<pre>"; 
print_r(listar_pizzas($conexao)); 
echo "</pre>"; ?>