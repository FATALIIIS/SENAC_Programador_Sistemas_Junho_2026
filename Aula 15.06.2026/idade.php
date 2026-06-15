<?php require_once 'cabecalho.php'; ?>
<form action="idade2.php" method="get">
	<h1>Cálculo de idade</h1>
	<p>DIGITE SEU NOME:</p>
	<p><input type="text" name="nome" size="40" maxlength="40" required></p>
	<p>ANO DE NASCIMENTO:</p>
	<p><input type="number" name="anonasci" step="1" min="1926" max="2026" required></p>
	<p><input type="submit" name="botao" value="Calcular"></p>
</form>
</body>
</html>