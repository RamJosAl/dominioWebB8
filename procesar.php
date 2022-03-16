<html>
<head>
	<title>Recibiendo Datos a PHP</title>
</head>
<body>
	<h1><center>Enviando Datos a PHP</center></h1>
	<?php
		echo "Los valores que recibí son: <br>";
		echo "Para x = ".$_POST['num1']."<br>";
		echo "Para y = ".$_POST['num2']."<br>";
	?>
	<h1><center>Procesamiento de Datos</center></h1>
	<?php
		//Suma
		$suma=$_POST['num1'] + $_POST['num2'];
		echo $_POST['num1']."+".$_POST['num2']."=".$suma."<br>";
		//Resta
		$resta=$_POST['num1'] - $_POST['num2'];
		echo $_POST['num1']."-".$_POST['num2']."=".$resta."<br>";
		//Multiplicación
		$multi=$_POST['num1'] * $_POST['num2'];
		echo $_POST['num1']."*".$_POST['num2']."=".$multi."<br>";
		//División
		$div=$_POST['num1'] / $_POST['num2'];
		echo $_POST['num1']."/".$_POST['num2']."=".$div."<br>";
		//Potencia
		$potencia=$_POST['num1'] ** $_POST['num2'];
		echo $_POST['num1']."^".$_POST['num2']."=".$potencia."<br>";
	?>
</body>
</html>