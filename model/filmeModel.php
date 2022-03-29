<?php

function inserirFilme($conn,$nomefilmes,$datadelancamento,$duracaofilme,$elencofilme,$direcaofilme){
$query = "INSERT INTO `tbfilmes` (`idfilmes`, `nomefilmes`, `datadelancamento`, `duracaofilme`,
`elencofilme`,`direcaofilme`) VALUES (NULL,
'{$nomefilmes}', '{$datadelancamento}', '{$duracaofilme}','{$elencofilme}',
'{$direcaofilme}');";

$dados = mysqli_query($conn,$query);
return $dados;
}

function visuFilmeNome($conn, $nomefilmes){
    $query = "Select * from tbfilmes where nomefilmes like '%{$nomefilmes}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
    }

?>