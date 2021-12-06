<?php
class FarmaciaController{


    public function all(){
        $obj = new Farmacia();
        $farmacias = $obj->all();
       include 'C:\wamp64\www\lifesig\mvc\view\feed\feed.php';
       
    }

    public function createFarmacia(){
        $obj = new Farmacia();

        if( isset($_POST['email']) && isset($_POST['nome']) ){
            $obj->setEmailF($_POST['email']);
            $obj->setNomeF($_POST['nome']);
            $obj->setSenhaF($_POST['senha']);
            $obj->setCepF($_POST['cep']);
            $obj->createFarmacia();
        }

    }

    public function read(){

    }

    public function delete(){

        if( !isset($_GET['id']) ){
            echo "Id não informado";
            exit;
        }

        $obj = new Farmacia();
        $obj->setIdF($_GET['id']);
        $obj->delete();

        
    }

 
}