<?php

namespace classes;

Class Cliente implements EnderecoCobranca, GrauImportancia{

    public $nome;
    public $idade;
    public $endereco;
    public $telefone;

    public function getNome(){
            return $this->nome;
    }

    public function setNome($nome){
            $this->nome = $nome;
    }

    public function getIdade(){
            return $this->idade;
    }

    public function setIdade($idade){
            $this->idade = $idade;
    }

    public function getEndereco(){
            return $this->endereco;
    }

    public function setEndereco($endereco){
            $this->endereco = $endereco;
    }

    public function getTelefone(){
            return $this->telefone;
    }

    public function setTelefone($telefone){
            $this->telefone = $telefone;
    }
    
    public function enderecoCobranca($endereco) {
        return $endereco;
    }

    public function classificaGrau($valor) {
        return $valor;
    }
    
}

?>
