<?php


function inserirUsuario($conn,$nomeusu,$emailusu,$foneusu,$cpfusu,$senhausu,$pinusu){

$salto = ['cost'=>8];
$senhaCrip = password_hash($senhausu,PASSWORD_BCRYPT,$salto );

$query = "INSERT INTO `tbusuario` (`idusu`, `nomeusu`, `emailusu`, `foneusu`,`cpfusu`,`senhausu`,`pinusu`) VALUES (NULL,'{$nomeusu}', '{$emailusu}', '{$foneusu}','{$cpfusu}','{$senhaCrip}','{$pinusu}');";

$dados = mysqli_query($conn,$query);
return $dados;


}
function verificaAcesso($conn,$email,$senha){
    $query = "select * from tbusuario where emailusu ='{$email}'";
    $resultado = mysqli_query($conn,$query);
    
    if(mysqli_num_rows($resultado) > 0){
    $row =mysqli_fetch_assoc($resultado);
    if(password_verify($senha,$row["senhausu"])){
    $_SESSION["email"] = $row["emailusu"];
    $_SESSION["nome"] = $row["nomeusu"];
    
    return $row ["emailusu"];
    }else{
    return "Acesso negado1";
    }
    }else{
    return"Acesso negado2";
    }
    return "Acesso negado3";
    }

function usarAcesso(){
    $email = isset($_SESSION["email"]);
    if(!$email){
            $_SESSION["msg"] = "<div class='alert alert-danger'
            role='alert'> Faça Login para ter acesso ao sistema.</div>";
            header("Location:../view/indexPrincipal.php");
            die();
        }
    
    }
    function logout(){
    return session_destroy();
    }
    ?>
