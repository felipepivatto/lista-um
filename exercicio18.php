<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informar maior número</title>
</head>

<body>
    <form method="post" action="">
        <label for="num1">Informe um número: </label><br>
        <input type="number" id="num1" name="num1"><br><br>

        <label for="num2">Informe mais um número: </label><br>
        <input type="number" id="num2" name="num2"><br><br>

        <label for="num3">Informe mais um número:</label><br>
        <input type="number" id="num3" name="num3"><br><br>

        <button type="submit" name="verificar_palavra">Verificar</button>
    </form>
</body>

</html>



<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['verificar_palavra'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
    }
    function encontrarMaior($num1, $num2, $num3)
    {
        if ($num1 >= $num2 && $num1 >= $num3) {
            return $num1;
        } elseif ($num2 >= $num1 && $num2 >= $num3) {
            return $num2;
        } else {
            return $num3;
        }
    }
    $maior = encontrarMaior($num1, $num2, $num3);
    echo "O maior número é: ", $maior;
}


?>
</body>

</html>