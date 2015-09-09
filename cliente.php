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

$cliente = array();

// Cliente 1
$cliente[1] = new Cliente();
$cliente[1]->setNome('Paulo');
$cliente[1]->setIdade(30);
$cliente[1]->setCpf('342.012.955-89');
$cliente[1]->setEndereco('Rua das Flores');
$cliente[1]->setTelefone('4515-9595');

// Cliente 2
$cliente[2] = new Cliente();
$cliente[2]->setNome('João');
$cliente[2]->setIdade(34);
$cliente[2]->setCpf('323.102.465-15');
$cliente[2]->setEndereco('Rua das Hortências');
$cliente[2]->setTelefone('5215-2555');

// Cliente 3
$cliente[3] = new Cliente();
$cliente[3]->setNome('Marcos');
$cliente[3]->setIdade(18);
$cliente[3]->setCpf('111.233.455-09');
$cliente[3]->setEndereco('Rua das Alvoradas');
$cliente[3]->setTelefone('3331-2325');

// Cliente 4
$cliente[4] = new Cliente();
$cliente[4]->setNome('Silvio');
$cliente[4]->setIdade(39);
$cliente[4]->setCpf('222.344.566-19');
$cliente[4]->setEndereco('Rua 2 de Julho');
$cliente[4]->setTelefone('2278-2121');

// Cliente 5
$cliente[5] = new Cliente();
$cliente[5]->setNome('Leonardo');
$cliente[5]->setIdade(40);
$cliente[5]->setCpf('334.778.342-21');
$cliente[5]->setEndereco('Rua 7 de Setembro');
$cliente[5]->setTelefone('3178-4567');

// Cliente 6
$cliente[6] = new Cliente();
$cliente[6]->setNome('Enock');
$cliente[6]->setIdade(35);
$cliente[6]->setCpf('123.321.432-02');
$cliente[6]->setEndereco('Rua Estrada do Côco');
$cliente[6]->setTelefone('3321-4512');

// Cliente 7
$cliente[7] = new Cliente();
$cliente[7]->setNome('Mille');
$cliente[7]->setIdade(35);
$cliente[7]->setCpf('689.009.404-56');
$cliente[7]->setEndereco('Rua Ipitanga');
$cliente[7]->setTelefone('7778-9890');

// Cliente 8
$cliente[8] = new Cliente();
$cliente[8]->setNome('Felipe');
$cliente[8]->setIdade(27);
$cliente[8]->setCpf('334.567.098-03');
$cliente[8]->setEndereco('Rua de Feira');
$cliente[8]->setTelefone('2341-4532');

// Cliente 9
$cliente[9] = new Cliente();
$cliente[9]->setNome('Simara');
$cliente[9]->setIdade(35);
$cliente[9]->setCpf('111.998.766-67');
$cliente[9]->setEndereco('Rua Maralhão');
$cliente[9]->setTelefone('8894-9988');

// Cliente 10
$cliente[10] = new Cliente();
$cliente[10]->setNome('Mila');
$cliente[10]->setIdade(29);
$cliente[10]->setCpf('677.108.009-38');
$cliente[10]->setEndereco('Rua 2 de Fevereiro');
$cliente[10]->setTelefone('1123-5455');

?>