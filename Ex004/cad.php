<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>       
    </header>
    <main>
        <?php 
            $name = $_GET["nome"] ?? "voce nao escreveu nem o nome";
            $lastname = $_GET["sobrenome"] ?? " e nem sobrenome";
            echo "<p> É um prazer te conhecer,<strong> $name $lastname! </strong>, este é o meu site";
        ?>
        <p><a href="javascript:history.go(-1)">quer voltar para a pagina anterior? click aqui</a></p>
    </main>
</body>
</html>