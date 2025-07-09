<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Amigo</title>
</head>
<body>
    <h1>Número Amigo</h1>
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
function somaDivisores($numero) {
    $soma = 0;
    for ($i = 1; $i <= $numero / 2; $i++) {
        if ($numero % $i == 0) {
            $soma += $i;
        }
    }
    return $soma;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    if (is_numeric($numero1) && is_numeric($numero2)) {
        $soma1 = somaDivisores($numero1);
        $soma2 = somaDivisores($numero2);

        if ($soma1 == $numero2 && $soma2 == $numero1) {
            echo "<p>{$numero1} e {$numero2} são números amigos.</p>";
        } else {
            echo "<p>{$numero1} e {$numero2} não são números amigos.</p>";
        }
    } else {
        echo "<p>Por favor, insira números válidos.</p>";
    }
}
?>