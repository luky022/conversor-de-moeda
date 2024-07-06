<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>real resultado</title>
</head>
<body>

<?php 
$taxa = 5.46;

$real = $_GET["real"];

$resultadoreal = $real / $taxa;

$valor = number_format($resultadoreal, 2, ',');


echo "VOCÊ TEM $valor REAIS";



?>
    
</body>
</html>