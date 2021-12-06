<?php 
require_once "C:\wamp64\www\lifesig\mvc\inc\config.php";
require_once "C:\wamp64\www\lifesig\mvc\model\Farmacia.php";
require_once "C:\wamp64\www\lifesig\mvc\controller\FarmaciaController.php";
$app = new FarmaciaController;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LifeSig</title>
    <link rel="stylesheet" href="../view/feed/feed.css">
</head>
<body>
    <section>

        <header>
            <label class="logo">LifeSig</label>
            <ul class="barra">
                <li><a href="../view/index/index.php">Início</a></li>

            </ul>

        </header>
        <div>
        <table class="content-table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Cep</th>
                <th>Ações</th>
              </tr>
            </thead>

            <tbody>
            <?php $i=1; foreach($farmacias AS $farmacia){ ?>
                    <tr>
                        <td><?=$farmacia->id?></td>
                        <td><?=$farmacia->nome ?></td>
                        <td><?=$farmacia->cep ?></td>
                        <td><a href="?acao=delete&id=<?=$farmacia->id?>">Excluir</a></td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>
    </section>
    
    

</body>
</html>