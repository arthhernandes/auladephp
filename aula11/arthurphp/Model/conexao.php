
<?php
    class conexao{
        public static function conectar(){
            try{
                $conm = new PDO('mysql:host=localhost;dbname=bancoDeDados', 'root', '');
                $conm->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Conexão realizada com sucesso!";
            }catch(PDOException $erro){
                echo "Conexão falhou! => " . $erro->getMessage();
                return null;
            }
        }
    }
?>