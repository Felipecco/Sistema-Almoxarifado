<?php
	session_start();
	if (!isset($_POST['senha'])){
		echo "<script>alert(\"Preencha corretamente!\");history.back(-1);</script>";
		exit;
	}
	$senha = ($_POST['senha']);

	 $base = mysql_connect('localhost','root','');
	if (mysql_errno()){
	echo "ERRO : " . mysql_errno() . "</body></html>";
	exit;
	}
	
	mysql_select_db("banco_de_dados", $base);
	
	$sql = "SELECT * FROM usuarios WHERE senha = '$senha'";
	$tabela = mysql_query($sql, $base);
	$registro = mysql_num_rows($tabela);
	
	if ($registro == 0){
	header("Location: index.php?errologin=1");
	exit;
	} else {
	$reg = mysql_fetch_array($tabela);
	$_SESSION['id'] = $reg['id'];
	$_SESSION['nivel'] = $reg['nivel'];
	header("Location: intranet.php");
	}
?>