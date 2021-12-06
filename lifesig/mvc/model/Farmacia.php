<?php
class Farmacia{


    private $idF;
    private $emailF;
    private $nomeF;
    private $senhaF;
    private $cepF;

 private $con;

    public function __construct(){
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }
    
      public function all(){
        $sql = $this->con->prepare("SELECT * FROM farmacia");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
        return $rows;
    }

    
    public function createFarmacia(){
        $sql = $this->con->prepare("INSERT INTO farmacia (nome, senha, email, cep) VALUES (?,aes_encrypt(?,'virtuos'),?,?)");
        $sql->execute([$this->getNomeF(), $this->getSenhaF(), $this->getEmailF(), $this->getCepF()]);

        if($sql->errorCode()!='00000'){
            echo $sql->errorInfo()[2];
        }else{
			header("Location: ..\..\controller\listar.php");
   	 	}
    }
    
    public function update(){
		$sql = $this->con->prepare("UPDATE farmacia SET nome=?, cep=? WHERE id=?");
		$sql->execute([$this->getNomeF(), $this->getCepF(), $this->getIdF()]);

		if($sql->errorCode()!='00000'){
            echo $sql->errorInfo()[2];
        }else{
           header("Location: ..\..\controller\listar.php");
		}
	}

	public function delete(){
		$sql = $this->con->prepare("DELETE FROM farmacia WHERE id=?");
		$sql->execute([$this->getIdF()]);

		if($sql->errorCode()!='00000'){
            echo $sql->errorInfo()[2];
        }else{
           header("Location: ..\controller\listar.php");
		}
	}

   	

    
    /**
     * Get the value of idF
     */
    public function getIdF()
    {
        return $this->idF;
    }

    /**
     * Set the value of idF
     */
    public function setIdF($idF): self
    {
        $this->idF = $idF;

        return $this;
    }

    /**
     * Get the value of emailF
     */
    public function getEmailF()
    {
        return $this->emailF;
    }

    /**
     * Set the value of emailF
     */
    public function setEmailF($emailF): self
    {
        $this->emailF = $emailF;

        return $this;
    }

    /**
     * Get the value of nomeF
     */
    public function getNomeF()
    {
        return $this->nomeF;
    }

    /**
     * Set the value of nomeF
     */
    public function setNomeF($nomeF): self
    {
        $this->nomeF = $nomeF;

        return $this;
    }

    /**
     * Get the value of cepF
     */
    public function getCepF()
    {
        return $this->cepF;
    }

    /**
     * Set the value of cepF
     */
    public function setCepF($cepF): self
    {
        $this->cepF = $cepF;

        return $this;
    }

    /**
     * Get the value of senhaF
     */
    public function getSenhaF()
    {
        return $this->senhaF;
    }

    /**
     * Set the value of senhaF
     */
    public function setSenhaF($senhaF): self
    {
        $this->senhaF = $senhaF;

        return $this;
    }
}