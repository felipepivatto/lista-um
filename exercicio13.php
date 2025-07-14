<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter graus Celsius para Fahrenheit</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero_graus">Digite uma temperatura em Celsius para converter para Fahrenheit:</label>
        <input type="text" id="numero_graus" name="numero_graus" required>
        <button type="submit" name="verificar_palavra">Verificar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verificar_palavra'])) {
            $celsius = $_POST['numero_graus'];
        }
       $fahrenheit = ($celsius * 9/5) + 32;
       echo "A temperatura em Fahrenheit é:" , $fahrenheit;
        }
    


    ?>

</body>

</html>