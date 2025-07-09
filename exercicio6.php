<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa divisores</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero_divisores">Verifica divisores:</label>
        <input type="number" id="numero_divisores" name="numero_divisores" required>
        <button type="submit" name="verificar_numero">Verificar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verificar_numero'])) {
            $numero = $_POST['numero_divisores'];
        }



        echo "Divisores de $numero: ";
        for ($i = 1; $i <= $numero; $i++) {
            if ($numero % $i == 0) {
                echo $i . " ";
            }
        }
        echo "\n";
    }


    ?>

</body>

</html>