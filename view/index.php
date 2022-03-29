
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS/style.css">
    <title>Document</title>
</head>
<body>
<div >
<main>  


    
<div id="cem" class="col-8" style=" padding-left: 0px;" >
<form class="container" action="../controler/liberaAcesso.php" method="post" >
    
<div class="email" class="mb-8">
<label for="exampleInputEmail1" ><strong>Endereço de E-mail</strong></label>
<input id="text" type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="color: white;">

<div id="emailHelp" class="form-text"></div>
</div>
<div class="mb-4">
<label for="exampleInputPassword1" class="form-label"><strong>Senha</strong></label>
<input id="text" type="password" name="senha" class="form-control" id="exampleInputPassword1" style="color: white;">
</div>
<button type="submit" class="btn btn-primary">Logar</button>

</form>
</div>


<div id="cad">
<a  href="cadusu.php">
    <button id="cas" class="btn btn-" >Cadastrar</button>
</a>
</div>


</main>
</div>
</body>
</html>