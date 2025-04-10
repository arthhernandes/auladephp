<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação De String</title>
</head>
<body>
    <?php
        $nome = 'JAVA';
        echo 'Minha linguagem favorita é $nome. <br>';

        $nome1 = 'JavaScript';
        echo 'Minha linguagem favorita é ' . $nome1 . '<br>';

        $nome2 = 'PHP';
        echo "Minha linguagem favorita é $nome2. <br><br><br>";

        $name = "Acelino";
        $sname = "Freitas";
        // echo "$name" . " " . "$sname";
        echo '$name "Popó" $sname <br>';
        echo "$name 'Popó' $sname <br>";
        echo "$name \"Popó\" $sname <br><br>";

        // Manipulação de Strings

        $nome01Manipula = " linguagem javascript ";
        $nome02Manipula = 'linguagem python';
        $nome03Manipula = 'linguagem PHP';

        echo "O número de caracteres é " . strlen($nome01Manipula) . "<br><br>";

        // Validando datas

        function validar_data($data){
            $partesData = explode('/',$data);
            if(count($partesData) != 3){
                return "A data informada está incompleta";
            }

            $dia = $partesData[0];
            echo $dia;
            echo "<br>";
            $mes = $partesData[1];
            echo $mes;
            echo "<br>";
            $ano = $partesData[2];
            echo $ano;
            echo "<br>";

            if(strlen($dia) < 1 or strlen($dia) > 2){
                return "O número de caracteres informados para o dia estão incorretos";
            }
            if(strlen($mes) < 1 or strlen($mes) > 2){
                return "O número de caracteres informados para o mês estão incorretos";
            }
            if(strlen($ano) != 4){
                return "O número de caracteres informados para o ano estão incorretos";
            }
                return "A data informada está correta";
        }

        echo validar_data('02/02/2005');
    ?>
</body>
</html>