<?php

include 'PJInterface.php';

class PessoaJuridica extends Cliente implements PJInterface{
    
    public function getCNPJ() {
        return $this->cnpj;
    }
    
    public function setCNPJ($cnpj) {
        $this->cnpj = $cnpj;
    }
    
    public function getTipo(){
            return $this->tipo;
    }

    public function setTipo($tipo){
            $this->tipo = $tipo;
    }
	
}
?>
