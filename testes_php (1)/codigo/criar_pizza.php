<?php 
require_once "conexao.php"; 
require_once "funcoes.php"; 
criar_pizza($conexao, "Calabresa", "Grande", 35.90, "pizza.jpg"); 
echo "Pizza criada!"; ?>