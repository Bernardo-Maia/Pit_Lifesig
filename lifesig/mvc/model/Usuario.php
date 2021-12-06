<?php
class Usuario{
private $idU;
private $emailU;
private $nomeU;
private $senhaU;
private $cepU;
private $con;

public function __construct(){
    $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
}

public function inserirUsuario(){
    $sql = $this->con->prepare("INSERT INTO usuario (nome, senha, email, cep) VALUES (?,aes_encrypt(?,'virtuos'),?,?)");
    $sql->execute([$this->getNomeU(), $this->getSenhaU(), $this->getEmailU(), $this->getCepU()]);

    if($sql->errorCode()!='00000'){
        echo $sql->errorInfo()[2];
    }else{
        header("Location: ..\..\controller\listar.php");
        }

    }
        /**
     * Get the value of idU
     */
    public function getIdU()
    {
        return $this->idU;
    }

    /**
     * Set the value of idU
     */
    public function setIdU($idU): self
    {
        $this->idU = $idU;

        return $this;
    }

    /**
     * Get the value of emailU
     */
    public function getEmailU()
    {
        return $this->emailU;
    }

    /**
     * Set the value of emailU
     */
    public function setEmailU($emailU): self
    {
        $this->emailU = $emailU;

        return $this;
    }

    /**
     * Get the value of nomeU
     */
    public function getNomeU()
    {
        return $this->nomeU;
    }

    /**
     * Set the value of nomeU
     */
    public function setNomeU($nomeU): self
    {
        $this->nomeU = $nomeU;

        return $this;
    }

    /**
     * Get the value of cepU
     */
    public function getCepU()
    {
        return $this->cepU;
    }

    /**
     * Set the value of cepU
     */
    public function setCepU($cepU): self
    {
        $this->cepU = $cepU;

        return $this;
    }


/**
 * Get the value of senhaU
 */
public function getSenhaU()
{
return $this->senhaU;
}

/**
 * Set the value of senhaU
 */
public function setSenhaU($senhaU): self
{
$this->senhaU = $senhaU;

return $this;
}
}