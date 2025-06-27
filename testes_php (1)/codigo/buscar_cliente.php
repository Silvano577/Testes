<?php
require_once "../conexao.php";
require_once "../funcoes.php";

print_r(buscar_cliente($conexao, 0, "Maria"));
