<?php

include_once("header.php");

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<br>


<link rel="stylesheet" type="text/css" href="CSS/style.css">

<div class="container">
<form class="row g-3" action="../controler/inserirCadastro.php" method="post">
<div class="col-md-6">
<label for="inputNome4" class="form-label"><strong>Nome<strong></label>
<input type="text" name="nomeusu" class="form-control" id="inputNome4" placeholder="Digite seu nome" required >
</div>
<hr>
<div class="col-md-6">
<label for="inputEmail4" class="form-label"><strong>Email<strong></label>
<input type="email" name="emailusu" class="form-control" id="inputEmail4" placeholder="Digite seu email" required>
</div>
<hr>
<div class="col-6">
<label for="inputAddress" class="form-label"><strong>Telefone<strong></label>
<input type="text" name="foneusu" class="form-control" id="inputAddress" placeholder="(00) 00000-0000" required>
</div>
<hr>
<div class="col-md-6">
<label for="inputCPF" class="form-label"><strong>CPF<strong></label>
<input type="text" name="cpfusu" class="form-control" id="inputCPF" placeholder="000.000.000-00" required>
</div>

<hr>
<div class="col-md-4"method="GET">
<label for="inputSenha" class="form-label"><strong>Senha<strong></label>
<input type="password" name="senhausu" class="form-control" id="inputSenha" placeholder="Digite a seha de acesso" required>
</div>

<hr>
<div class="col-md-4">
<label for="inputPin" class="form-label"><strong>Pin<strong></label>
<input type="text" name="pinusu" class="form-control" required id="inputPin" placeholder="..." >
</div>

<hr>
<div class="col-12">
<div class="form-check">
<input class="form-check-input" type="checkbox" required id="gridCheck">
<label class="form-check-label" for="gridCheck">Aceito o contrato </label>

<hr>
</div>
</div>

<div class="col-12">
<button  id="cas"  type="submit" class="btn btn-primary">Salvar</button>
</div>

<hr>
<div>
<a href="index.php">
<button id="cas" class="btn btn-primary" >Voltar</button>
</a>
</div>

</form>
</div>





<?php
include_once("footer.php");
?>