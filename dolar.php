<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>moeda</title>
</head>

<body>

    <?php

    $taxa = 5.46;


    $dolar = $_GET["dolar"];


    $real = $_GET["real"];


    $resultadodolar = $dolar * $taxa;
    $resultadoreal = $real / $taxa;




    echo "VOCÊ TEM $resultadodolar REAIS";
    echo "VOCÊ TEM $resultadoreal REAIS";





    ?>
    <button> <a href="calculos.html">VOLTAR PÁGINA</a> </button>
</body>

</html>