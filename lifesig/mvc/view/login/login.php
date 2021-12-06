<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LifeSig</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div >
        <h1>Seja Bem-Vindo(a)</h1>

        <form action="">

            <label for="email">
                <span>E-mail</span>
                <input type="email" id="email" name="email" placeholder="Insira seu E-mail." required>
            </label>

            <label for="senha">
                <span>Senha</span>
                <input type="senha" id="senha" name="senha" placeholder="Insira sua senha." required>
            </label>

            <a href="#">Esqueceu sua senha?</a>
            <a href="../cadastro/cadastro.php">Ainda não tem uma conta?</a>
            <a href="../index/index.php">Voltar para a tela inicial.</a>
            <input type="submit" value="Logar">
        </form>

    </div>

</body>

</html>