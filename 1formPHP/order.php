<!DOCTYPE>
<html lang="pl">
<head>
<meta charset="utf-8"/>
<title> Piekarnia </title>
</head>
<body>

<?php

$paczki = $_POST['paczkow'];
$grzebienie = $_POST['grzebieni'];
$suma = 0.99*$paczki + 1.29*$grzebienie;

echo<<<END

	<h2>Podsumowanie zamówienia</h2>
	
	<table border="1" cellpadding="10" cellspacing="0">
	
	<tr>
	<td>Pączek(0.99PLN/szt)</td> <td>$paczki szt.</td>
	</tr>
	
	<tr>
	<td>Grzebień(1.29PLN/szt)</td> <td>$grzebienie szt.</td>
	</tr>
	
	<tr>
	<td>SUMA wartości zamówienia</td> <td>$suma PLN</td>
	</tr>
	
	</table>
	
	</br>
	
	<a href="index.php"> Powrót do zamówienia </a>

END;

?>

</body>
</html>