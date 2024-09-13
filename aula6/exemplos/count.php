<?php
	$produtos=["Massa","Azeite","Molho de Tomate","Creme de Leite","Suco de Uva"];
	for($contador=0;$contador<count($produtos);$contador++){ //o count auxilia contando quantas posições há um determinado array.
															// o for podemos usar para nos recorrer a um array.
		echo $produtos[$contador]."<br/>";
	}
?>