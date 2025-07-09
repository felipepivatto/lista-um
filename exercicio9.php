<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma dos números de um valor até o outro</title>
</head>

<body>
    <form method="post" action="">
        <label for="numero1">Número 1:</label><br>
        <input type="text" id="numero1" name="numero1"><br><br>
        <label for="numero2">Número 2:</label><br>
        <input type="text" id="numero2" name="numero2"><br><br>
        <input type="submit" value="Verificar">
    </form>
</body>

</html>

<!-- PESQUISEI PARA FAZER - não sabia  -->

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    function somaEntreNumeros($numero1, $numero2)
    {
        $soma = 0;
        $inicio = min($numero1, $numero2);
        $fim = max($numero1, $numero2);

        for ($i = $inicio; $i <= $fim; $i++) {
            $soma += $i;
        }
        return $soma;
    }
    echo "A soma dos números entre $numero1 e $numero2 é: " . somaEntreNumeros($numero1, $numero2);
}
?>