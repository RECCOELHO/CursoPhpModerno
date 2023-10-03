<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>teste</h1>
    <?php
        $nome = "Carlos";
        $sobrenome = "Jessé";
        const PAIS = "Brasil";

        echo "Muito prazer, $nome $sobrenome! Você mora no ". PAIS;

        echo "É verdade que teu nome é $nome "
    ?>
    <!-- 
        7 regras
        1 Variaveis sempre comeca com $
        2 O segundo pode ser letra ou simbolo_
        3 Aceite caracteres a-z,A-Z, 0-9, _
        4 Aceite caracteres da tabela ASCII a partir de 128
        5 Aceite caracteres acentuados como á,õ ç
        6 A linguagem é case sensintive em relação aos nomes
        7 Nomes especiais como $this nao podem ser utilizadas
        8 nao pode ter espaço no entre as palavras de nome das variaveis

        7 Recomendações
        1 Tente dar nomes claros e de facil identificação
        2 Evite nomes muitos curtos ou muito longos
        3 Defina um padrão de nomeação e siga em todo o projeto
        4 Para variaveis, de preferencia a letra minuscula
        5 PARA CONSTANTES, de preferencia para as letras Maisculas
        6 use camelCase para variaveis 
        7 use snack_case para costantes
     -->

</body>
</html>