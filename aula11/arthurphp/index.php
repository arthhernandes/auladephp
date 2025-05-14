<?php
    $url = $_GET['url']??'';

    if(empty($url)){
        echo "<p style='text-align:center; color: red,'> Rota não informada! </p><br>";
        exit;
    }
    $url = strtoupper(htmlspecialchars($url));

    if($url == "CADASTRO"){
        require_once("View/cadastro.php");
    }elseif($url == "CADASTROUSUARIO"){
        require_once("Controller/usuarioController.php");
        $controle = new usuarioController();
        $controle->processa("C");
    }elseif($url == "LISTAUSUARIO"){
        require_once("Controller/usuarioController.php");
        $controle = new usuarioController();
        $controle->processa("R");
    }elseif($url = "EXCLUIR"){
        require_once("Controller/usuarioController.php");
        $controle = new usuarioController();
        $id = $_SERVER['REQUEST_URI'];//traz a url inteira
        $teste = explode("=", $id);
        $idExcluir = $teste[1] ?? null;
        $controle->processaDelete("E", $idExcluir);
    }

?>