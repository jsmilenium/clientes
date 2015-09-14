<?php

include 'GrauImportancia.php';

class PessoaFisica extends Cliente  implements GrauImportancia{

    private $cpf;
    private $tipo;

    public function getCpf(){
            return $this->cpf;
    }

    public function setCpf($cpf){
            $this->cpf = $cpf;
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
