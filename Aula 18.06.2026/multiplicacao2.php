<?php require_once 'cabecalho.php'; ?>
<section class="resultado">
<?php
	$numero1=$_GET['numero1'];
	$numero2=$_GET['numero2'];
	$multiplicacao=$numero1*$numero2;
	$multiplicacao=number_format($multiplicacao,0,"",".");
	echo "<p>$numero1&times$numero2 = $multiplicacao</p>";
?>
<a href="multiplicacao.php">Clique aqui para realizar um novo cálculo</a>
</section>
</body>
</html>