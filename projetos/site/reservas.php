<?php
// Verifica se foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta dos dados do html
    $nome = htmlspecialchars($_POST['nome']);
    $cpf = htmlspecialchars($_POST['cpf']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $email = htmlspecialchars($_POST['email']);
    $data_reserva = $_POST['data_reserva'];
    $hora_reserva = $_POST['hora_reserva'];
    $quantidade_pessoas = (int) $_POST['quantidade_pessoas'];
    $observacoes = htmlspecialchars($_POST['observacoes']);
    $confirmacao = isset($_POST['confirmacao']) ? "Sim" : "Não";
} else {
    //erro
    echo "<p>Formulário não enviado corretamente.</p>";
    exit;
}
?>
<!-- estilização -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Confirmação de Reserva</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #f4f0f0;
            font-family: 'Garet', sans-serif;
            color: #333;
        }
        .confirmacao-container {
            max-width: 900px;
            margin: 80px auto;
            background: #f8f8f8;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        h1 {
            color: #ff6664;
            font-size: 2rem;
            
        }
        p {
            font-size: 1.1em;
            margin-bottom: 15px;
        }
        .voltar {
            margin-top: 30px;
            justify-self: center;
        }
        .voltar a {
            text-decoration: none;
            color: white;
            background-color: #ff6664;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .voltar a:hover {
            background-color: #e14b49;
        }
    </style>
</head>
<body>
    <div class="confirmacao-container">
        <h1>Reserva Recebida</h1>
        <p>Obrigado, <strong><?= $nome ?></strong>! Sua reserva foi registrada com sucesso.</p>
        <p><strong>Data:</strong> <?= $data_reserva ?> às <?= $hora_reserva ?></p>
        <p><strong>Quantidade de Pessoas:</strong> <?= $quantidade_pessoas ?></p>
        <p><strong>Telefone:</strong> <?= $telefone ?> | <strong>Email:</strong> <?= $email ?></p>
        <p><strong>Observações:</strong> <?= $observacoes ? $observacoes : "Nenhuma" ?></p>
        <p><strong>Termos aceitos:</strong> <?= $confirmacao ?></p>

        <div class="voltar">
            <a href="index.html">Voltar ao Início</a>
        </div>
    </div>
    <div><p class="email_confirmacao">Essas informaçôes foram enviadas no email do solicitante da reserva.</p></div>
</body>
</html>