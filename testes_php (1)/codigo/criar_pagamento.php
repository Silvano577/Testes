<?php 
require_once "conexao.php"; 
require_once "funcoes.php"; 
cadastrar_pagamento($conexao, "Cartão", 100.00, "Pago", "2025-06-21"); 
echo "Pagamento criado!"; ?>