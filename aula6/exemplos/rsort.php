<?php
	$produtos=["Massa","Azeite","Molho de Tomate","Creme de Leite","Suco de Uva","Arroz","Feijão","Batata","Cebola","Alho"];
	rsort($produtos); //deixa a lista em ordem decrescente.
	for ($contador=0;$contador<count($produtos);$contador++){
		echo $produtos[$contador]."<br/>";
	}
?>