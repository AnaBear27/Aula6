<?php
	
	//CABEÇALHO
	$cliente=["Marcos","Vini","David","Ana Beatriz","Carlos","Theo","Alicia","Robert","Gabriel","João"];
	sort($cliente);
	
	echo count($cliente)." clientes <br/>";
	
	echo "<hr/>";
	
	//EXIBIR TABELA
	
	foreach($cliente as $lista){
		echo $lista."<br/>";
	}
	
	// LINHA DE BAIXO
	
	echo "<hr/>";
?>
