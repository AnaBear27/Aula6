<?php
	$produtos["bolsa"]=60.00;
	$produtos["pulseira"]=5.50;
	$produtos["corrente"]=7.50;
	$produtos["brincos"]=17.00;
	$produtos["mochila"]=23.00;
	$produtos["caderno"]=17.90;
	$produtos["estojo"]=5.30;
	$produtos["pendrive"]=32.00;
	$produtos["fone de ouvido"]=5.00;
	$produtos["cadeira plástica"]=55.00;
	$produtos["caneta"]=2.40;
	$produtos["teclado 102 teclas"]=65.00;
	
	echo count($produtos)." produtos <br/>"; //exibe: 12 produtos.
	
	echo "<hr/>"; //exibe linha.
	
	foreach($produtos as $indice=>$conteudo){
		echo "Preço do ".$indice." : ".$conteudo."<br/>";
	}
	
	$total=array_sum($produtos); //calculo das compras.
	
	echo "<hr/>";
	
	echo "Total: ".number_format($total,2); //exibe: Total: 295.60.
?>