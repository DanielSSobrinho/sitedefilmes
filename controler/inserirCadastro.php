<?php

include_once("../view/header.php");



include_once("../model/conexao.php");
include_once("../model/usuarioModel.php");



extract($_REQUEST,EXTR_OVERWRITE);




if(inserirUsuario($conn,$nomeusu,$emailusu,$foneusu,$cpfusu,$senhausu,$pinusu)){
echo("Os dados foram cadastrados com sucesso");



}else{
echo("Não foi possivel cadastrar seu dados. Por favor revise seus dados");
}

?>