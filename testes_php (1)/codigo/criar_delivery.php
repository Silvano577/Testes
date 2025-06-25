<?php 
require_once "conexao.php"; 
require_once "funcoes.php"; 
criar_delivery($conexao, "Rua Entrega 123", "45 minutos"); 
echo "Delivery criado!"; ?>