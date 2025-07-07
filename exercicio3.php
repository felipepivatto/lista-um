<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa Positivo, Negativo ou Zero</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero_informar">Verifica número:</label>
        <input type="number" id="numero_informar" name="numero_informar" required>
        <button type="submit" name="verificar_numero">Verificar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verificar_numero'])) {
            $numero = $_POST['numero_informar'];
        }

        if ($numero > 0) {
            echo "O número é positivo.";
        } elseif ($numero < 0) {
            echo "O número é negativo.";
        } else {
            echo "O número é zero.";
        }
    };

    ?>

</body>

</html>