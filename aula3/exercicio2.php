<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    
    <?php

        $vetor = array("PR" => "Curitiba", "SP" => "São Paulo", "PB" => "Recife", "RJ" => "Rio de Janeiro", 
        "AM" => "Manaus", "GO" => "Goiânia", "CE" => "Fortaleza", "SC" => "Florianópolis");

       foreach($vetor as $estado => $capital){
            echo "A capita de $estado é $capital <br>";
       }

       $numeros = array(1,2,3,4,5,6,7,8,9,10);

       $total = 0;
       
       for($i = 0; $i < 10; $i++){
            $total += $numeros[$i];
       }

       $media = $total / 10;

       echo "<br>" . "A média dos números é " . $media;

    ?>

</body>
</html>