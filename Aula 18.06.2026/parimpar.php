<?php require_once 'cabecalho.php'; ?>
<form action="parimpar.php" method="GET">
	<h1>Par ou ímpar</h1>
	<p>Digite um número</p>
	<p><input type="number" name="numero" step="1" min="1" required></p>
	<p><input type="submit" name="botao" value="Verificar"></p>
</form>
<?php
	if (isset($_GET['botao'])) { //teste do envio do formulário 
		$numero=$_GET['numero'];
		echo "<section class='resultado'>";
		if ($numero%2==0) {
			$numero=number_format($numero,0,"",".");
			echo "<p>O número $numero é par!</p>";
		}else{
			$numero=number_format($numero,0,"",".");
			echo "<p>O número $numero é ímpar!</p>";
		}
	}
?>