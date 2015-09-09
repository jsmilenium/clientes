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

include 'cliente.php';

if (isset($_GET['asc'])) {
  ksort($cliente);
}

if (isset($_GET['desc'])) {
  krsort($cliente);
}

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
?>

<table class="table table-bordered">
	<tr>
		<td id="tlord" colspan="2" class="info text-center">
			<p><strong>Ordenação</strong></p>
		</td>
	</tr>
	<tr>
		<th>
			<p align="center"><a href="principal.php?asc=true" id="asc" class="btn btn-primary">Ascendente</a></p>
		</th>
		<th>
			<p align="center"><a href="principal.php?desc=true" id="desc" class="btn btn-danger">Descendente</a></p>
		</th>
		<!--<th id="alf">
			<p align="center"><a href="principal.php?alf=true">Alfabética</a></p>
		</th>-->
	</tr>
</table>
<table class="table table-bordered" id="tabela">
	<tr class="success text-center">
		<td colspan="6">
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
			<strong>CPF</strong>
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
			<th id="cpf">
				<?php echo $value->getCpf(); ?>
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