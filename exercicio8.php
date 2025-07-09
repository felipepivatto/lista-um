<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa quantos numeros pares existem de 1 até o numero informado</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numeros_pares">Verifica numeros pares de 1 até:</label>
        <input type="number" id="numeros_pares" name="numeros_pares" required>
        <button type="submit" name="verificar_numero">Verificar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verificar_numero'])) {
            $numero = $_POST['numeros_pares'];
        }
        function contarPares($numeros_pares)
        {
            $contador = 0;
            for ($i = 2; $i <= $numeros_pares; $i += 2) {
                $contador++;
            }
            return $contador;
        }
    }
        echo "Existem " . contarPares($numero) . " números pares entre 1 e " . $numero . ".";


    ?>

</body>

</html>