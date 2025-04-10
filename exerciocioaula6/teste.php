<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <h1>Aqui está o resultado</h1>
    </header>
    <main>
        <?php
        /*
            Implemente uma página onde o usuário informe os valores do lado de um retângulo
            (campos devem ficar centralizados na página criada). Crie outra página que receba
            os dados e exiba o valor da área e do perímetro do retângulo. Crie um botão para
            voltar para a página anterior e outro para limpar os campos do formulário. Faça
            as devidas validações nas entradas de dados
            */
            $ladoa = $_GET["a"];
            $ladob = $_GET["b"];

            $area = $ladoa * $ladob;
            $perimetro = 2 * ($ladoa + $ladob);

            echo "<p>A área do retângulo é $area e o perímetro é $perimetro<p>";

        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>