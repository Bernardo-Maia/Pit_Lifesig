<?php
require_once "C:\wamp64\www\lifesig\mvc\inc\config.php";
require_once "C:\wamp64\www\lifesig\mvc\model\Farmacia.php";
require_once "C:\wamp64\www\lifesig\mvc\controller\FarmaciaController.php";
$app = new FarmaciaController;

if(isset($_GET['acao']))
{
    if ( $_GET['acao']=='delete'){
        $app->delete();};
}
else{
$app -> all();
}
?>