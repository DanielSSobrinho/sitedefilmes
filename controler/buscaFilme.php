<?php

include_once("../model/conexao.php");
include_once("../model/filmeModel.php");



$nomefilmes = $_POST["nomeFilmes"];



if(visuFilmeNome($conn,$nomefilmes)){
header("Location:../view/visuFilme.php");
}else{
header("Location:../view/visuFilme.php");
}
?>