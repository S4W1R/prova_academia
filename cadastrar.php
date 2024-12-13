<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera o email do formulário
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    // Validação de senha
    if ($password === $confirm_password) {
        // Salva o email no arquivo emails.txt
        file_put_contents('emails.txt', $email . PHP_EOL, FILE_APPEND);
        // Redireciona para o site.php após o cadastro
        header('Location: site.php');
        exit;
    } else {
        echo "As senhas não coincidem.";
    }
}
?>
