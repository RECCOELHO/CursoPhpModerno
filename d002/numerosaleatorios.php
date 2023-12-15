<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Numeros Aleatorios</title>
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatorio entre 0 e 100...</p>
        <p>Seu numero aleatorio é:
        
        <?php 
            $numero = rand(0, 100);
            echo $numero."<br>";
        ?>
        </p>
        <button id="reloadButton">Recarregar Página</button>
    </main>
    <script src="seu_script.js"></script>
</body>
</html>