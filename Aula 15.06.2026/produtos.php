<?php require_once 'cabecalho.php'; ?>
<form action="produtos2.php" method="get">
	<h1>Cálculo de Estoque de Produtos</h1>
	<p>NOME:</p>
	<p><input type="text" name="nome" size="40" maxlength="40" required></p>
	<p>VALOR (R$):</p>
	<p><input type="number" name="valor" step="0.01" min="0.01" max="999999.99" required></p>
	<p>QUANTIDADE:</p>
	<p><input type="number" name="quantidade" step="1" min="1" max="50000" required></p>
	<p><input type="submit" name="botao" value="Calcular"></p>
</form>
</body>
</html>