<?php
require_once "../conexao.php";
require_once "../funcoes.php";

$idpedido = salvarPedido($conexao, 1, 1, 1, 89.90);
echo "ID do Pedido: $idpedido\n";
