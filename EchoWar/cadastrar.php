<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="cadastrar.css">
</head>
<body>
    <div class="form-container">
        <h1>Formulário de Cadastro</h1>
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" placeholder="(00) 00000-0000">
            </div>
                <button type="submit">Enviar Formulário</button>
            </div>
        </form>
    </div>
</body>
</html>

<?php
    conectarDB(
        'localhost',
        'root',
        '',
        'echowar'
    );

    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $gmail = $_POST['gmail'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];  
        
        $sql = "INSERT INTO cadastro VALUES('$nome','$gmail','$senha','$telefone')";
        executarSQL($sql);
        header("Location:index.php");
    }
?>

