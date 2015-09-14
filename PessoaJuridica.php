<?php

class PessoaJuridica extends Cliente implements GrauImportancia{

    private $cnpj;
    private $tipo;

    public function getCnpj(){
            return $this->cnpj;
    }

    public function setCnpj($cnpj){
            $this->cnpj = $cnpj;
    }

    public function getTipo(){
            return $this->tipo;
    }

    public function setTipo($tipo){
            $this->tipo = $tipo;
    }
    
    public function classificaGrau($valor) {
        return $valor;
    }
	
}
?>
