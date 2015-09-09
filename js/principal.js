$(document).ready(function() {
	//esconder os dados de cliente
	$("tr").each(function() {
		$('[id="idade"]').hide();
		$('[id="cpf"]').hide();
		$('[id="endereco"]').hide();
		$('[id="telefone"]').hide();
	});
	
	$("#linha").each(function() {
		$('[id="nome"]').click(function(){
			$(this).next().toggle();
			$(this).next().next().toggle();
			$(this).next().next().next().toggle();
			$(this).next().next().next().next().toggle();
		});
	});
	
	var url = window.location.href;
	var splitUrl = url.split('?');
	if(typeof splitUrl[1] !== "undefined"){
		var newSplit = splitUrl[1].split('=');
		if(newSplit[0] == 'desc'){
			$('#desc').bind('click', false);
		}
		if(newSplit[0] == 'asc'){
			$('#asc').bind('click', false);
		}
	}
});