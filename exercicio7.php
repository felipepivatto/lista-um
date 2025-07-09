<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa numero perfeito</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero_perfeito">Verifica numeros perfeitos:</label>
        <input type="number" id="numero_perfeito" name="numero_perfeito" required>
        <button type="submit" name="verificar_numero">Verificar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verificar_numero'])) {
            $numero = $_POST['numero_perfeito'];
        }

        function soma($numero)
        {
            $divisores = 0;
            for ($count = 1; $count < $numero; $count++)
                if ($numero % $count == 0)
                    $divisores += $count;
            return $divisores;
        }
        if ($numero == soma($numero))
            echo "É perfeito";
        else
            echo "$numero não é um número perfeito";
    }


    ?>

</body>

</html>