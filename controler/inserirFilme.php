<?php

include_once("../view/header.php");



include_once("../model/conexao.php");
include_once("../model/filmeModel.php");



extract($_REQUEST,EXTR_OVERWRITE);




if(inserirFilme($conn,$nomefilmes,$datadelancamento,$duracaofilme,$elencofilme,$direcaofilme)){
echo("O Filme foi cadastrado com sucesso");



}else{
echo("Filme não Cadastrado");
}




?>