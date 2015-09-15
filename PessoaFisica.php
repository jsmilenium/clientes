<?php

include 'PFInterface.php';

class PessoaFisica extends Cliente implements PFInterface{

    public function getCPF() {
        return $this->cpf;
    }
    
    public function setCPF($cpf) {
        $this->cpf = $cpf;
    }

    public function getTipo(){
            return $this->tipo;
    }

    public function setTipo($tipo){
            $this->tipo = $tipo;
    }
	
}
?>
