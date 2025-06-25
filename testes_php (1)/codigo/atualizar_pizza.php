<?php 
require_once "conexao.php"; 
require_once "funcoes.php"; 
atualizar_pizza($conexao, 1, "Calabresa Especial", "Grande", 39.90, "pizza_nova.jpg"); 
echo "Pizza atualizada!"; ?>