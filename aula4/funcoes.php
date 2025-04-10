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
            Desenvolva um código onde se tenha uma função que calcule a média do aluno após 4 avaliações. 
            Ressalta-se que é necessário apresentar o nome do aluno e dizer se tal foi aprovado, reprovado ou 
            está em recuperação. Deve-se apresentar tal solução para 3 alunos simultaneamente.
        

        function multiplicacao(&$num_1){
            $num_1 *= 5;
            return $num_1;
        }

        $num_2 = 3;
        multiplicacao($num_2);
        echo $num_2;
        */
        /*
        function minhaFuncao(){
            return "Usando o return pela primeira vez";
        }

        echo minhaFuncao();
        

        
            Crie uma função que faça a conversão de uma variável de string para float.
            - Primeiro informe o tipo da variável antes de ser convertida;
            - Em um segundo momento informe o tipo da variável após ser convertida;

            is_bool() - Verifica se a variável é um booleano
            is_int() - Verifica se o tipo da variável é um inteiro
            is_float() - Verifica se o tipo da variável é um float
            is_array() - Verifica se o tipo da variável é um array
        */

        function convertToFloat($var_01){
            if(is_float($var_01)){
                return $var_01;
            }else{
                return (float)$var_01;
            }
        }

        $var_01 = "15";
        echo "<br>Variável não convertida: ";
        echo gettype($var_01);
        $var_01 = convertToFloat($var_01);
        echo "<br>Foi convertida: ";
        echo gettype($var_01);
    ?>

</body>
</html>



