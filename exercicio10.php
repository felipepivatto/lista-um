<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa sequencia de Fibonacci ate um número</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero_final">Verifica sequencia de fibonacci até:</label>
        <input type="number" id="numero_final" name="numero_final" required>
        <button type="submit" name="verificar_numero">Verificar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verificar_numero'])) {
            $numero = $_POST['numero_final'];
        }

        function fibonacciSequencia($numero)
        {
            $sequencia = array();
            $a = 0;
            $b = 1;
            $sequencia[] = $a; // Adiciona o primeiro número

            if ($numero > 1) {
                $sequencia[] = $b; // Adiciona o segundo número
                while ($b <= $numero) {
                    $proximo = $a + $b;
                    if ($proximo <= $numero) {
                        $sequencia[] = $proximo;
                    }
                    $a = $b;
                    $b = $proximo;
                }
            }
            return $sequencia;
        }
        echo "Sequência de Fibonacci até $numero: ";
    echo implode(", ", fibonacciSequencia($numero));
    }
    

    ?>

</body>

</html>