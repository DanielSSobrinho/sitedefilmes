<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/filmeModel.php");
?>



<div class="centroform" >
<form action="#" method="Post" class="teste">
<div class="col-12">
<label class="visually-hidden" for="inlineFormInputGroupUsername">Digite o Nome do Filme</label>
<div class="input-group">
<div class="input-group-text">Nome</div>
<input type="text" name="nomeFilmes" class="form-control" id="inlineFormInputGroupUsername" placeholder="Nome do Filme">
<div class="col-4">
<button type="submit" class="btn btn-primary">Pesquisar</button>
</div>
</div>
</div>

</form>



<table class="table">
<thead>
<tr>
<th scope="col">Código</th>
<th scope="col">Nome</th>
<th scope="col">Data Lancamento</th>
<th scope="col">Duração Filme</th>
<th scope="col">Imagem</th>
<th scope="col">Elenco Filme</th>
<th scope="col">Direção Filme</th>
</tr>
</thead>
<tbody>



<?php
$nomefilmes = isset($_POST["nomeFilmes"])? $_POST["nomeFilmes"] : " ";



$dado = visuFilmeNome($conn,$nomefilmes);



foreach($dado as $nomeFilmes):
?>
<tr>
<th scope="row"><?=$nomeFilmes["idfilmes"];?></th>
<td action="../view/indexPrincipal.php"><?=$nomeFilmes["nomefilmes"]?></td>
<td><?=$nomeFilmes["datadelancamento"]?></td>
<td><?=$nomeFilmes["duracaofilme"]?></td>
<td><img src="img/jpg" width="50" heigth="50"></td>
<td><?=$nomeFilmes["elencofilme"]?></td>
<td><?=$nomeFilmes["direcaofilme"]?></td>

</tr>
<?php
endforeach;
?>

</tbody>
</table>



</div>



<?php
include_once("../view/footer.php");
?>