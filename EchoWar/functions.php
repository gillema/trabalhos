<?php
require('conexao.php');

if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $gmail = $_POST['gmail'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Segurança
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO cadastro (nome, gmail, senha, telefone) VALUES (?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("ssss", $nome, $gmail, $senha, $telefone);
        $stmt->execute();
        $stmt->close();
        header("Location: cadastrar.php?sucesso=1");
        exit;
    } else {
        echo "Erro ao preparar o SQL: " . $conexao->error;
    }
}
?>
