<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura e sanitiza os dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $idade = htmlspecialchars($_POST['idade']);
    $mensagem = htmlspecialchars($_POST['mensagem']);
    
    // Valida os dados (simples validação)
    if (empty($nome) || empty($email) || empty($mensagem)) {
        echo "Por favor, preencha todos os campos obrigatórios.";
    } else {
        // Exibe os dados capturados (para fins de teste)
        echo "<h1>Dados Recebidos:</h1>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>E-mail:</strong> $email</p>";
        echo "<p><strong>Idade:</strong> $idade</p>";
        echo "<p><strong>Mensagem:</strong> $mensagem</p>";
    }
} else {
    echo "Nenhum dado recebido.";
}
?>
