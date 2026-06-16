<?php require_once 'cabecalho.php'; $dataatual=new DateTime(date('Y-m-d'));
$dataminima=date_modify($dataatual, "-120 years")
?>
<form action="idade2.php" method="post">
	<h1>Cálculo de idade</h1>
	<p>DIGITE SEU NOME:</p>
	<p><input type="text" name="nome" size="40" maxlength="40" required></p>
	<!--<p>ANO DE NASCIMENTO:</p>
	<p><input type="number" name="anonasci" step="1" min="1926" max="<?= date('Y')?>" required></p>-->
	<p>DATA DE NASCIMENTO:</p>
	<p><input type="date" name="datanasci" min="<?= $dataminima->format('Y-m-d') ?>" max="<?= date('Y-m-d') ?>"</p>
	<p><input type="submit" name="botao" value="Calcular"></p>
</form>
</body>
</html>