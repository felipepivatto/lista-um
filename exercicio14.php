<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descobrir se um ano é bissexto</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero_ano">Digite um ano para eu informar se ele é bissexto: </label>
        <input type="text" id="numero_ano" name="numero_ano" required>
        <button type="submit" name="verificar_palavra">Verificar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verificar_palavra'])) {
            $ano = $_POST['numero_ano'];
        }
            if($ano % 4 == 0 ) {
                echo $ano, " é um ano bissexto.";
            } else{
                echo $ano, " não é ano bissexto.";
            }
        }
    


    ?>

</body>

</html>