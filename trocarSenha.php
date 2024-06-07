<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Senha</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    
    <?php include 'header.php'; ?>

    <h2>Alteração de Senha</h2>
    <form action="Scripts/alterar_senha.php" method="post">
        <label for="senha_atual">Senha Atual:</label>
        <input type="password" id="senha_atual" name="senha_atual" required><br><br>

        <label for="nova_senha">Nova Senha:</label>
        <input type="password" id="nova_senha" name="nova_senha" required><br><br>

        <label for="confirmar_senha">Confirmar Nova Senha:</label>
        <input type="password" id="confirmar_senha" name="confirmar_senha" required><br><br>

        <input type="submit" value="Alterar Senha">
            
    </form>


</body>
</html>