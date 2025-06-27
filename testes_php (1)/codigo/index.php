<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Testes do Sistema - Pizzaria</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f8f8f8;
        }
        h1 {
            color: #333;
        }
        h2 {
            color: #555;
            margin-top: 30px;
        }
        ul {
            list-style-type: none;
            padding-left: 0;
        }
        li {
            margin: 8px 0;
        }
        a {
            text-decoration: none;
            color: #0066cc;
        }
        a:hover {
            text-decoration: underline;
        }
        .grupo {
            background: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 8px #ccc;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <h1>🏠 Home de Testes - Sistema Pizzaria</h1>

    <div class="grupo">
        <h2>Usuário</h2>
        <ul>
            <li><a href="criar_usuario.php">Criar Usuário</a></li>
            <li><a href="listar_usuarios.php">Listar Usuários</a></li>
            <li><a href="buscar_usuario.php">Buscar Usuário</a></li>
            <li><a href="atualizar_usuario.php">Atualizar Usuário</a></li>
            <li><a href="deletar_usuario.php">Deletar Usuário</a></li>
        </ul>
    </div>

    <div class="grupo">
        <h2>Cliente</h2>
        <ul>
            <li><a href="criar_cliente.php">Criar Cliente</a></li>
            <li><a href="listar_clientes.php">Listar Clientes</a></li>
            <li><a href="buscar_cliente.php">Buscar Cliente</a></li>
            <li><a href="atualizar_cliente.php">Atualizar Cliente</a></li>
            <li><a href="deletar_cliente.php">Deletar Cliente</a></li>
        </ul>
    </div>

    <div class="grupo">
        <h2>Produto</h2>
        <ul>
            <li><a href="criar_produto.php">Criar Produto</a></li>
            <li><a href="listar_produtos.php">Listar Produtos</a></li>
            <li><a href="buscar_produto.php">Buscar Produto</a></li>
            <li><a href="atualizar_produto.php">Atualizar Produto</a></li>
            <li><a href="deletar_produto.php">Deletar Produto</a></li>
        </ul>
    </div>

    <div class="grupo">
        <h2>Pedido</h2>
        <ul>
            <li><a href="criar_pedido.php">Salvar Pedido</a></li>
            <li><a href="listar_pedidos.php">Listar Pedidos</a></li>
            <li><a href="buscar_pedido.php">Buscar Pedido</a></li>
            <li><a href="atualizar_pedido.php">Atualizar Pedido</a></li>
            <li><a href="deletar_pedido.php">Deletar Pedido</a></li>
        </ul>
    </div>

    <div class="grupo">
        <h2>Feedback</h2>
        <ul>
            <li><a href="criar_feedback.php">Registrar Feedback</a></li>
            <li><a href="listar_feedbacks.php">Listar Feedbacks</a></li>
            <li><a href="buscar_feedback.php">Buscar Feedback</a></li>
            <li><a href="atualizar_feedback.php">Atualizar Feedback</a></li>
            <li><a href="deletar_feedback.php">Deletar Feedback</a></li>
        </ul>
    </div>

    <div class="grupo">
        <h2>Delivery</h2>
        <ul>
            <li><a href="criar_delivery.php">Criar Delivery</a></li>
            <li><a href="listar_deliveries.php">Listar Deliveries</a></li>
            <li><a href="buscar_delivery.php">Buscar Delivery</a></li>
            <li><a href="deletar_delivery.php">Cancelar Delivery</a></li>
        </ul>
    </div>

    <div class="grupo">
        <h2>Pagamento</h2>
        <ul>
            <li><a href="criar_pagamento.php">Cadastrar Pagamento</a></li>
            <li><a href="listar_pagamentos.php">Listar Pagamentos</a></li>
        </ul>
    </div>

    <div class="grupo">
        <h2>Pedido_Produto</h2>
        <ul>
            <li><a href="salvarAtualizarItemPedido.php">Salvar ou Atualizar Item de Pedido</a></li>
        </ul>
    </div>

</body>
</html>
