<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_banco.php';
?>

<div id='promo'class="container">
<h2 id="promoind">Promoção</h2>
    <div class="row mt-5">
        
    <?php
    $sql = "SELECT * FROM produtos WHERE ativo = 1 LIMIT 3";
    $exec = mysqli_query($conn,$sql);
    $contar = mysqli_num_rows($exec);
    while ($dados = mysqli_fetch_assoc($exec)){
      echo '<h1>'.$dados['Nome'].'</h1>';
    ?>
    <div id='jogadores' class="card m-3" style="width: 18rem;">
  <img src="./content/<?php echo $dados['imagem'];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $dados['Nome'];?></h5>
    <p class="card-text"><?php echo $dados['Descricao'];?></p>
    <a href="produto-detalhe.php?id=<?php echo $dados['ProdutoID']?>&tipo=promocao" class="btn btn-primary">Comprar</a>
  </div>
</div>
<?php
    };
?>
</div>
</div>

<


<?php
// include do footer
include_once './includes/_footer.php';
?>
