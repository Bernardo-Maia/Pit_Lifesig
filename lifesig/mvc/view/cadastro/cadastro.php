
<?php 
require_once "../../inc/config.php"; 
require_once "../../model/Usuario.php";
require_once "../../controller/UsuarioController.php";

$app = new UsuarioController;
$app->createUsuario()
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LifeSig</title>
    <link rel="stylesheet" href="../login/login.css">
</head>

<body>
    <div>
        <h1>Seja Bem-Vindo(a)</h1>

        <form method= "post" action="">

        <label for="nome">
                <span>Usuario</span>
                <input type="text" id="nome" name="nome" placeholder="Insira seu nome." required>
            </label>

            <label for="email">
                <span>E-mail</span>
                <input type="email" id="email" name="email" placeholder="Insira seu E-mail."  required>
            </label>

            <label for="senha">
                <span>Senha</span>
                <input type="senha" id="senha" name="senha" placeholder="Insira sua senha."  required>
            </label>

           
            <label for="cep">
                <span>Insira seu cep</span>
                <input type="number" id="cep" name="cep" placeholder="Insira seu cep" required>
            </label>

            
            <a href="#">Esqueceu sua senha?</a>
            <a href="cadastroF.php">Cadastrar como farmácia</a>
            <a href="../index/index.php">Voltar para a tela inicial.</a>
            <input type="submit" value="Cadastrar">

        </form>

    </div>


</body>

</html>