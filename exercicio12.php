<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa quantas vogais tem na palavra</title>
</head>

<body>

    <form method="POST" action="">
        <label for="palavra_vogal">Digite uma palavra para eu informar quantas vogais tem na palavra:</label>
        <input type="text" id="palavra_vogal" name="palavra_vogal" required>
        <button type="submit" name="verificar_palavra">Verificar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verificar_palavra'])) {
            $palavra = $_POST['palavra_vogal'];
        }
       $vogais = ['a', 'e', 'i', 'o', 'u'];
            $quantidade_vogais = 0;

            for ($i = 0; $i < strlen($palavra); $i++) {
    
                if (in_array($palavra[$i], $vogais)) {
                    $quantidade_vogais++;
                }
            }

            echo "A quantidade de vogais na palavra $palavra é: $quantidade_vogais";
        }
    


    ?>

</body>

</html>