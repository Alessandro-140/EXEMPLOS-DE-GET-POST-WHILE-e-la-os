
<?php
// === Tentando com $_POST ===========
// Podemos até criar variáveis dinamicamente com o laço foreach:

    // AQUI A DIFERENÇA QUE OS DADOS SÂO OCULTADOS DA BARRA "URL".

/* Verifica se $_GET['nome'] existe e não está vazio */
if (   isset( $_POST['nome'] ) && 
	 ! empty( $_POST['nome'] ) 
) {
	// Cria variáveis dinamicamente
	foreach ( $_POST as $chave => $valor ) {
		$$chave = $valor;
	}
	
	// Mostra os dados na tela
	echo $nome . '<br>';
	echo $telefone . '<br>';
	echo $email . '<br>';
}
?>