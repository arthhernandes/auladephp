<?php
    include_once('Model/conexao.php');

    class usuario{
        private $idUsuario;
        private $nomeUsuario;
        private $dataNascimento;
        private $estadoCivil;
        private $estadoNascimento;
        private $cpf;
        private $profissao;

        public function cadastrarUsuario(){
            try{

            }catch(PDOException $erro){
                echo "Cadastro falhou! " . $erro->getMessage();
            }
        }
    }
?>