

<?php
// === Tentando com $_POST ===========
// Podemos até criar variáveis dinamicamente com o laço foreach:

    // AQUI A DIFERENÇA QUE OS DADOS SÂO OCULTADOS DA BARRA "URL".

/* Verifica se $_GET['nome'] existe e não está vazio */
if (   isset( $_POST['nome'] ) && 
	 ! empty( $_POST['nome'] ) 
)
/*
 {
	// Cria variáveis dinamicamente
	foreach ( $_POST as $chave => $valor ) {
		$$chave = $valor;
	}
	
	// Mostra os dados na tela
	echo $nome . '<br>';
	echo $telefone . '<br>';
	echo $email . '<br>';
}

*/

?>

<form method="post" action="">
	<p>Nome: <input type="text" name="nome"></p>
	<p>Telefone: <input type="text" name="telefone"></p>
	<p>Email: <input type="text" name="email"></p>
	<p><input type="submit" value="Enviar"></p>
</form>