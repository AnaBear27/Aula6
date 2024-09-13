<?php
	$produtos["arroz"]=22.00;
	$produtos["feijão"]=6.50;
	$produtos["massa"]=1.99;
	$produtos["cebola"]=0.85;
	$produtos["alho"]=0.95;
	$produtos["farinha"]=3.50;
	$produtos["queijo"]=5.00;
	$produtos["frango"]=6.99;
	
	foreach($produtos as $indice=>$conteudo){
		echo 'preço de '.$indice.':'.$conteudo.'<br/>';
	}
?>