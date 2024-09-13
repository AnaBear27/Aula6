<?php
	$produtos["arroz"]=22.00;
	$produtos["feijão"]=6.50;
	$produtos["massa"]=1.99;
	$produtos["cebola"]=0.85;
	$produtos["alho"]=0.95;
	$produtos["farinha"]=3.50;
	$produtos["queijo"]=5.00;
	$produtos["frango"]=6.99;
	
	$total=array_sum($produtos);
	echo "Total: ".$total;
	echo "<br/>";
	
	$quantidadeProdutos=sizeof($produtos);
	
	$media=$total/$quantidadeProdutos;
	echo "Media: ".$media;
?>