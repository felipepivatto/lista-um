<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informar se pode votar</title>
</head>


<body>
    <form method="post" action="">
        <label for="dia">Informe um dia: </label><br>
        <input type="text" id="dia" name="dia"><br><br>


        <label for="mes">Informe um mês(em número): </label><br>
        <input type="text" id="mes" name="mes"><br><br>


        <label for="ano">Informe um ano: </label><br>
        <input type="text" id="ano" name="ano"><br><br>


        <button type="submit" name="verificar_palavra">Verificar</button>
    </form>
</body>


</html>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (isset($_POST['verificar_palavra'])) {
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $ano = $_POST['ano'];
    }
    function is_valid_date($dia, $mes, $ano)
    {
        return checkdate($dia, $mes, $ano);
    }
    if (is_valid_date($mes, $dia, $ano)) {
        echo "A data $dia/$mes/$ano é válida.";
    } else {
        echo "A data $dia/$mes/$ano é inválida.";
    }
}


?>
</body>


</html>