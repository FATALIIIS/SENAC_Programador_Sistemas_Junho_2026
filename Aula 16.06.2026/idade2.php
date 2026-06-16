<?php require_once 'cabecalho.php'; ?>
<section class="resultado">
<?php
	$nome=$_POST['nome'];
	$datanasci=new DateTime($_POST['datanasci']);
	$dataatual=new DateTime(date('Y-m-d'));
	$idade=$dataatual->diff($datanasci)->y;
	echo "<p>$nome,</p>";
	echo "<p>Sua idade é $idade.</p>";
?>
<a href="idade.php">[Clique aqui para calcular a sua idade novamente]</a>
</section>
</body>
</html>