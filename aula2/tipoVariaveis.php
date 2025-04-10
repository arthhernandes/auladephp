<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        /*
            Variáveis sempre começam com o símbolo $;
            Variáveis aceitam caracteres á, õ, ç e afins;
            A linguagem é case sensitive em relação aos nomes;
            Algumas palavras possuem o uso reservado ($this, por exemplo);
            Evite nomes muito curtos ou muito longos;
        */

        echo "Hello World!" . "<br>";
        print "Hello World! <br><br>";

        // $varEcho = echo "Hello World!" . "<br>";
        $varPrint = print "Hello World!" . "<br>";

        // $%var00 = "Errada";
        // $1var01 = "Errada"; 

        $_var02 = "Correto";
        $varOriginal = "Correto e comum";

        echo $_var02 . "<br>";
        echo $varOriginal . "<br><br>";

        echo "A variável é do tipo " . gettype($varOriginal);
    ?>

    <br>

    <?php
        $varInt = 333;
        echo gettype($varInt) . "<br>";

        $varReal = 456.98;
        echo gettype($varReal) . "<br>";

        $varBooleano = true;
        echo gettype($varBooleano) . "<br>";

        $varVetor = array(1,2,3);
        echo gettype($varVetor) . "<br>";
    ?>

    <br>

    <?php
        $nome = "Carlos";
        $sobrenome = "Ferreira";

        // echo "Muito prazer, " . $nome " " . $sobrenome;
        echo "Muito prazer, $nome $sobrenome";
    ?>

    <br><br><br>

    <?php
        // Operadores aritméticos
        $var5 = 2;
        $var6 = 8;
        echo "O valor da adição de dois números é " . $var5 + $var6 . "<br>";

        echo "O valor de exponenciação é " . $var5 ** $var6 . "<br>";
        echo "O valor de exponenciação é " . pow($var5, $var6) . "<br>";
    ?>

    <br><br>
        
    <?php
        // Casting
        $var7 = 11.59;
        $var8 = (int)$var7;
        echo $var8 . "<br>";
        echo gettype($var7) . "<br>";
        echo gettype($var8) . "<br>";
    ?>

    <br><br>

    <?php
        $varTeste01 = 33;
        var_dump($varTeste01) . "<br><br>";

        $vetorTeste = array("PHP", "Java", "Python", "JavaScript", "MySQL");
        var_dump($vetorTeste);

        /*
            Calcule o perímetro e a área de uma circunferência e
            mostre o tipo de variável referente as respostas obtidas.
        */

        $perimetro = 7;
        $area = 7;
    ?>

</body>

</html>