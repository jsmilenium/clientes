<?php

include 'bootstrap.php';

use classes\Cliente,
    classes\PessoaFisica,
    classes\PessoaJuridica;

?>

<html>
<head>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/principal.js" type="text/javascript"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/principal.css" rel="stylesheet">
   </head>
<body>
<?php

header ('Content-type: text/html; charset=UTF-8');

//include 'Cliente.php';
//include 'PessoaFisica.php';
//include 'PessoaJuridica.php';

/*if (isset($_GET['alf'])) {
  asort($cliente);
}*/

/*
Cadastro de clientes
- Crie uma classe com os principais atributos que um cliente deve ter, como nome, cpf, endereço, etc.
- Crie um array de objetos de clientes, com 10 clientes dentro.
- Crie uma página e faça a listagem geral dos clientes. Quando clicar sobre o cliente, você deverá mostrar os dados específicos do cliente selecionado.
- Nessa listagem você também deverá ter a opção de ordenar os clientes pelo seu índice de forma ascendente e descendente.
Não se esqueça de caprichar na interface utilizando o twitter bootstrap.
*/

$cliente = array();

// Cliente 1
$cliente[1] = new PessoaFisica();
$cliente[1]->setNome('Paulo');
$cliente[1]->setIdade(30);
$cliente[1]->setCpf('342.012.955-89');
$cliente[1]->setEndereco('Rua das Flores');
$cliente[1]->setTelefone('4515-9595');
$cliente[1]->setTipo('2');
$cliente[1]->classificaGrau('2');
$cliente[1]->enderecoCobranca('Rua a');

// Cliente 2
$cliente[2] = new PessoaJuridica();
$cliente[2]->setNome('João');
$cliente[2]->setIdade(34);
$cliente[2]->setCnpj('31.159.246/0001-34');
$cliente[2]->setEndereco('Rua das Hortências');
$cliente[2]->setTelefone('5215-2555');
$cliente[2]->setTipo('1');
$cliente[2]->classificaGrau('4');
$cliente[2]->enderecoCobranca('Rua b');

// Cliente 3
$cliente[3] = new PessoaFisica();
$cliente[3]->setNome('Marcos');
$cliente[3]->setIdade(18);
$cliente[3]->setCpf('010.233.455-09');
$cliente[3]->setEndereco('Rua das Alvoradas');
$cliente[3]->setTelefone('3331-2325');
$cliente[3]->setTipo('2');
$cliente[3]->classificaGrau('1');
$cliente[3]->enderecoCobranca('Rua c');

// Cliente 4
$cliente[4] = new PessoaJuridica();
$cliente[4]->setNome('Silvio');
$cliente[4]->setIdade(39);
$cliente[4]->setCnpj('34.675.477/0001-99');
$cliente[4]->setEndereco('Rua 2 de Julho');
$cliente[4]->setTelefone('2278-2121');
$cliente[4]->setTipo('1');
$cliente[4]->classificaGrau('5');
$cliente[4]->enderecoCobranca('Rua d');

// Cliente 5
$cliente[5] = new PessoaFisica();
$cliente[5]->setNome('Leonardo');
$cliente[5]->setIdade(40);
$cliente[5]->setCpf('334.778.342-21');
$cliente[5]->setEndereco('Rua 7 de Setembro');
$cliente[5]->setTelefone('3178-4567');
$cliente[5]->setTipo('2');
$cliente[5]->classificaGrau('1');
$cliente[5]->enderecoCobranca('Rua e');

// Cliente 6
$cliente[6] = new PessoaJuridica();
$cliente[6]->setNome('Enock');
$cliente[6]->setIdade(35);
$cliente[6]->setCnpj('53.536.387/0001-61');
$cliente[6]->setEndereco('Rua Estrada do Côco');
$cliente[6]->setTelefone('3321-4512');
$cliente[6]->setTipo('1');
$cliente[6]->classificaGrau('4');
$cliente[6]->enderecoCobranca('Rua f');

// Cliente 7
$cliente[7] = new PessoaFisica();
$cliente[7]->setNome('Mille');
$cliente[7]->setIdade(35);
$cliente[7]->setCpf('689.009.404-56');
$cliente[7]->setEndereco('Rua Ipitanga');
$cliente[7]->setTelefone('7778-9890');
$cliente[7]->setTipo('2');
$cliente[7]->classificaGrau('2');
$cliente[7]->enderecoCobranca('Rua g');

// Cliente 8
$cliente[8] = new PessoaJuridica();
$cliente[8]->setNome('Felipe');
$cliente[8]->setIdade(27);
$cliente[8]->setCnpj('74.469.356/0001-05');
$cliente[8]->setEndereco('Rua de Feira');
$cliente[8]->setTelefone('2341-4532');
$cliente[8]->setTipo('1');
$cliente[8]->classificaGrau('3');
$cliente[8]->enderecoCobranca('Rua x');

// Cliente 9
$cliente[9] = new PessoaFisica();
$cliente[9]->setNome('Simara');
$cliente[9]->setIdade(35);
$cliente[9]->setCpf('111.998.766-67');
$cliente[9]->setEndereco('Rua Maralhão');
$cliente[9]->setTelefone('8894-9988');
$cliente[9]->setTipo('2');
$cliente[9]->classificaGrau('4');
$cliente[9]->enderecoCobranca('Rua y');

// Cliente 10
$cliente[10] = new PessoaJuridica();
$cliente[10]->setNome('Mila');
$cliente[10]->setIdade(29);
$cliente[10]->setCnpj('00.356.144/0001-85');
$cliente[10]->setEndereco('Rua 2 de Fevereiro');
$cliente[10]->setTelefone('1123-5455');
$cliente[10]->setTipo('1');
$cliente[10]->classificaGrau('5');
$cliente[10]->enderecoCobranca('Rua z');

if (isset($_GET['asc'])) {
  ksort($cliente);
}

if (isset($_GET['desc'])) {
  krsort($cliente);
}
?>

<table class="table table-bordered">
	<tr>
		<td id="tlord" colspan="2" class="info text-center">
			<p><strong>Ordenação</strong></p>
		</td>
	</tr>
	<tr>
		<th>
			<p align="center"><a href="index.php?asc=true" id="asc" class="btn btn-primary">Ascendente</a></p>
		</th>
		<th>
			<p align="center"><a href="index.php?desc=true" id="desc" class="btn btn-danger">Descendente</a></p>
		</th>
		<!--<th id="alf">
			<p align="center"><a href="principal.php?alf=true">Alfabética</a></p>
		</th>-->
	</tr>
</table>
<table class="table table-bordered" id="tabela">
	<tr class="success text-center">
		<td colspan="7">
			<p><strong>Clientes</strong></p>
		</td>
	</td>
	<tr id="title">
		<td id="tralha" class="text-center">
			<strong>#</strong>
		</td>	
		<td id="tlnome">
			<strong>Nome</strong>
		</td>
		<td id="tlidade">
			<strong>Idade</strong>
		</td>
		<td id="tlcpf">
			<strong>CPF/CNPJ</strong>
		</td>
		<td id="tltipopessoa">
			<strong>Tipo</strong>
		</td>
		<td id="tlendereco">
			<strong>Endereço</strong>
		</td>
		<td id="tltelefone">
			<strong>Telefone</strong>
		</td>
	</tr>
	<?php
	//ksort($cliente); //ordena array
	//krsort($cliente); //reverse array
	foreach ($cliente as $cli => $value){
		?>
		<tr id="linha">
			<th id="tralha" class="text-center">
				<?php echo $cli;?>
			</th>		
			<th id="nome">
				<a href="#"><?php echo $value->getNome();?></a>
			</th>
			<th id="idade">
				<?php echo $value->getIdade(); ?>
			</th>
			<th id="cpf-cnpj">
				<?php 
				if ($value->getTipo() == 1){
					echo $value->getCnpj();
				}else{
					echo $value->getCpf();
				}				
				?>
			</th>
			<th id="tp">
				<?php 
				if ($value->getTipo() == 1){
					echo 'Pessoa Jurídica';
				}else{
					echo 'Pessoa Física';
				}				
				?>
			</th>
			<th id="endereco">
				<?php echo $value->getEndereco(); ?>
			</th>
			<th id="telefone">
				<?php echo $value->getTelefone(); ?>
			</th>
		</tr>
<?php } ?>
</table>
</body>
</html>
