<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informar se pode votar</title>
</head>

<body>
    <form method="post" action="">
        <label for="nome">Informe seu nome: </label><br>
        <input type="text" id="nome" name="nome"><br><br>

        <label for="idade">Informe sua idade: </label><br>
        <input type="text" id="idade" name="idade"><br><br>

        <button type="submit" name="verificar_palavra">Verificar</button>
    </form>
</body>

</html>



<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['verificar_palavra'])) {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
    }
    if ($idade >= 18 ){
    echo $nome, ", você é obrigado a votar";
    }else{
        echo $nome, ", você ainda não tem idade para votar";
    }

}


?>
</body>

</html>