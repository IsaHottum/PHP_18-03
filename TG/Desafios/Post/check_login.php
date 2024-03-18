<!-- check_login.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Login</title>
</head>
<body>
    <?php
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Verificar se o usuário e a senha correspondem ao esperado
        if ($username === 'admin' && $password === 'admin123') {
            echo "<h2>Login bem-sucedido!</h2>";
        } else {
            echo "<h2>Usuário ou senha incorretos. Tente novamente.</h2>";
        }
    } else {
        echo "<h2>Por favor, preencha o nome de usuário e a senha.</h2>";
    }
    ?>
</body>
</html>
