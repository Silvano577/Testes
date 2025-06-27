<?php
require_once "../conexao.php";
require_once "../funcoes.php";

print_r(buscar_produto($conexao, 0, "Pizza"));
