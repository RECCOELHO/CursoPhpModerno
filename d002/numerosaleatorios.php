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
        <h1>Rolagem de Dados pro RPG</h1>
        <p>Gerando um número aleatorio entre 1 e 20...</p>
        <p>Seu numero aleatorio é:

        <?php 
            $numero = rand(1, 20);
            echo $numero."<br>";
            if($numero < 5 ){
                echo "<p>Que azar.</p>";
            } elseif($numero >= 6 && $numero <= 10 ){
                echo "<p>Não é tão ruim, mas é ruim.</p>";
            } elseif($numero >= 11 && $numero <= 15 ){
                echo "<p>Deu Certo!</p>";
            } elseif($numero >= 16 && $numero <= 20 ){
                echo "<p>Critocooo!!! boa.</p>";
            };
        ?>
        </p>
        <button id="reloadButton">Recarregar Página</button>
    </main>
    <script src="seu_script.js"></script>
</body>
</html>