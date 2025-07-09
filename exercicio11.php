<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa se uma palavra é  um palíndromo</title>
</head>

<body>

    <form method="POST" action="">
        <label for="palavra_palindromo">Digite uma palavra para eu informar se é um palíndromo:</label>
        <input type="text" id="palavra_palindromo" name="palavra_palindromo" required>
        <button type="submit" name="verificar_palavra">Verificar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verificar_palavra'])) {
            $palavra = $_POST['palavra_palindromo'];
            $palavra_invertida = strrev($palavra); 


            if (strcasecmp($palavra, $palavra_invertida) == 0) { 
            echo "\"$palavra\" é um palíndromo!";
        } else {
            echo "\"$palavra\" não é um palíndromo.";
        }
        }

    }
    

    ?>

</body>

</html>