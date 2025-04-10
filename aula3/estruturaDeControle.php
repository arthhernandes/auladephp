<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de controle</title>
</head>
<body>

    <?php
        $num01 = 10;
        $num02 = 333;

        if($num01 == $num02){
            echo "As variáveis $num01 e $num02 são iguais";
        }else if($num01 <= $num02){
            echo "O valor da primeira variável é $num01" . "<br>";
            echo "O valor da segunda variável é $num02";
        }else{
            echo "Variáveis diferentes";
        }
    ?>
    
</body>
</html>