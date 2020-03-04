<?php
    include "classCarro.php";
    include "cabecalho.php";

    $id = $_POST["id"];
    $tipo = $_POST["tipo"];
    $af = $_POST["af"];
    $tp = $_POST["tp"];

    if($tipo=="a"){
        $_SESSION["carro"][$id]->acelera($tp, $af);
    } else{
        $_SESSION["carro"][$id]->frear($tp, $af);
    }

    header("location: lista_carro.php");

?>