<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resiltado</title>
</head>
<body>
    <main> 

    <H1>Resultado Final</H1>
    <?php
            $numero = $_GET["numero"];
            $anterior = $numero - 1;
            $sucessor = $anterior + 2;

    
    echo
     "
        <p>
            O numero sugerido foi: <strong>$numero </strong>
        </p>
        <p>
            O sucessor dele é: <strong> $sucessor </strong>
        </p>
        <p>
            O antecessor dele é: <strong> $anterior </strong>
        </p>
    ";   
    ?>
    <br> <br>
    <a class="botao" href="javascript:history.go(-1)">Voltar</a>

    <strong></strong>
    </main>
</body>
</html>