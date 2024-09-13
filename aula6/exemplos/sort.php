<?php
	$produtos=["Massa","Azeite","Molho de Tomate","Creme de Leite","Suco de Uva","Arroz","Feijão","Batata","Cebola","Alho"];
	sort($produtos); //sua função é para deixar a lista em ordem crescente.
	for ($contador=0;$contador<count($produtos);$contador++){
		echo $produtos[$contador]."<br/>";
	}
?>