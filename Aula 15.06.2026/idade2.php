<?php require_once 'cabecalho.php'; ?>
<section class="resultado">
<?php
	$nome=$_GET['nome'];
	$ano=$_GET['anonasci'];
	$idade=2026-$ano;
	echo "<p>$nome</p>";
	echo "<p>Sua idade é $idade</p>";
?>
<a href="idade.php">[Clique aqui para calcular a sua idade novamente]</a>
</section>
</body>
</html>