<?php

Class Cliente{

	public $nome;
	public $idade;
	public $cpf;
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
	
	public function getCpf(){
		return $this->cpf;
	}
	
	public function setCpf($cpf){
		$this->cpf = $cpf;
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
	
}

?>
