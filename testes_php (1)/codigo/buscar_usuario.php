<?php
require_once "../conexao.php";
require_once "../funcoes.php";

print_r(buscar_usuario($conexao, 0, "joao"));
