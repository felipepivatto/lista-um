<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descobrir o IMC de uma pessoa</title>
</head>

<body>
    <form method="post" action="">
        <label for="altura">Informe sua altura: </label><br>
        <input type="text" id="altura" name="altura"><br><br>

        <label for="peso">Informe seu peso: </label><br>
        <input type="text" id="peso" name="peso"><br><br>

        <button type="submit" name="verificar_palavra">Verificar</button>
    </form>
</body>

</html>



<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['verificar_palavra'])) {
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];
    }

    if (is_numeric($peso) && is_numeric($altura) && $altura > 0) {
        $imc = $peso / ($altura * $altura);

        if ($imc < 18.5) {
            $classificacao = "Magreza";
        } elseif ($imc < 25) {
            $classificacao = "Peso normal";
        } elseif ($imc < 30) {
            $classificacao = "Sobrepeso";
        } else {
            $classificacao = "Obesidade";
        }

        echo "Seu IMC é: " . $imc . "<br>";
        echo "Classificação: " . $classificacao;
    } else {
        echo "Por favor, insira valores válidos para peso e altura.";
    }
}


?>
</body>

</html>