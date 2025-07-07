<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa fatorial</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero_fatorial">Informa o fatorial de um numero:</label>
        <input type="number" id="numero_fatorial" name="numero_fatorial" required>
        <button type="submit" name="verificar_numero">Verificar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verificar_numero'])) {
            $numero = $_POST['numero_fatorial'];
        }

        function fatorialLoop($numero)
        {
            $fatorial = 1;
            for ($i = 1; $i <= $numero; $i++) {
                $fatorial *= $i;
            }
            return $fatorial;
        }
        echo "O fatorial de $numero é: " . fatorialLoop($numero) . "\n";
    };

    ?>

</body>

</html>