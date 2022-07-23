<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_banco.php';



$id = $_GET['id'];
echo $id;
?>


<div class="center">
    <div class="row">
        <div class="col">
<h1><?php echo $produtos [$id] ['nome'];?></h1>
<img class="img"src="./content/<?php echo $dados[$id]['imagem'];?>">
<h3><?php echo $produtos [$id] ['descricao'];?></h3>
<h3><?php echo $produtos [$id] ['preco'];?></h3>
</div>
</div>
<div class="row">
    <div class="col">voltar</div>
    <div class="col">comprar</div>
    </div>
</div>
<?php
// include do footer
include_once './includes/_footer.php';
?>