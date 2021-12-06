<?php
require_once "../../model/Usuario.php"; 
class UsuarioController{


  
    public function createUsuario(){
        $obj = new Usuario();

        if( isset($_POST['email']) && isset($_POST['nome']) && isset($_POST['senha'])&& isset($_POST['cep'])){
            $obj->setEmailU($_POST['email']);
            $obj->setNomeU($_POST['nome']);
            $obj->setSenhaU($_POST['senha']);
            $obj->setCepU($_POST['cep']);
            $obj->inserirUsuario();
        }

    }

 
}