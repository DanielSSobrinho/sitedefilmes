<?php

include_once("headerAdm.php");

?>

<link rel="stylesheet" type="text/css" href="CSS/style.css">

<div class="container">
<form class="row g-3" action="../controler/inserirFilme.php" method="GET">

<div class="col-md-6">
<label for="inputNome4" class="form-label"><strong>Nome<strong></label>
<input type="text" name="nomefilmes" class="form-control" id="inputNome4" placeholder="Nome Do Filme" required >
</div>
<hr>
<div class="col-md-6">
<label for="inputLancamento" class="form-label"><strong>Data de Lançamento<strong></label>
<input type="date" name="datadelancamento" class="form-control" id="inputEmail4" placeholder="Data de Lançamento" required>
</div>
<hr>
<div class="col-6">
<label for="inputDuracao" class="form-label"><strong>Duração<strong></label>
<input type="text" name="duracaofilme" class="form-control" id="inputAddress" placeholder="" required>
</div>
<hr>
<div class="col-md-6">
<label for="inputElenco" class="form-label"><strong>Elenco<strong></label>
<input type="text" name="elencofilme" class="form-control" id="inputCPF" placeholder="" required>
</div>

<hr>
<div class="col-md-4"method="GET">
<label for="inputDirecao" class="form-label"><strong>Direção<strong></label>
<input type="text" name="direcaofilme" class="form-control" id="inputSenha" placeholder="" required>
</div>

<hr>
<div class="col-12">
<div class="form-check">
<input class="form-check-input" type="checkbox" id="gridCheck">
<label class="form-check-label" for="gridCheck">Aceito o contrato </label>
<hr>
</div>
</div>
<div class="col-12">
<button type="submit" class="btn btn-primary">Salvar</button>
</div>
</form>



</div>





<?php
include_once("footer.php");
?>