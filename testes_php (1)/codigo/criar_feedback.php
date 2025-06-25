<?php 
require_once "conexao.php"; 
require_once "funcoes.php"; 
registrar_feedback($conexao, "Sugestão", "Muito bom!"); 
echo "Feedback criado!"; ?>