<?php
	$cliente=["Marcos","Vini","David","Ana Beatriz","Carlos","Theo","Alicia","Robert","Gabriel","João"];
	
	echo count($cliente)." clientes <br/>";
	
	echo "<hr/>";
	
	foreach($cliente as $indice=>$conteudo){
		echo $cliente.$indice.$conteudo."<br/>";
	}
	
	echo sort($cliente);
	
	echo "<hr/>";
?>