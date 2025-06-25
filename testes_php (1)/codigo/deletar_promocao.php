<?php 
require_once "conexao.php"; 
require_once "funcoes.php"; 
remover_promocao($conexao, 1); 
echo "Promoção deletada!"; ?>