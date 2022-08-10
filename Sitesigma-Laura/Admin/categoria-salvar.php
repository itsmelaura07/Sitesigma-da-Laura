<?php

include_once './includes/_dados.php';

include_once './includes/_head.php';

if(isset($_GET['id']) || !empty($_GET['id'])){
    $id = $GET['id'];

    $sql "SELECT * FROM categorias WHERE CategoriaID = " .$id;
    $resultado = mysqli_query($conexao,$sql);
    $dados = msqli_fetch_array($resultado,MYSQLI_ASSOC);
}else{
    $id='';
    $dados= ['Nome'];
    $dados= ['Descriçao']='';
    $dados= ['Imagem']='';
}
include_once './includes/_head.php';
?>
 
 <main>
    <h2>Administração das Categorias</h2>
    <a href = "categoria-lista.php">Listagem</a>
    <hr>
    <form action = "categoria-processa.php" method = "post" enctype = "multipart/form-data">
        <imput type = "hidden" value = "salvar" name = "acao">
        <imput type = "text" value = "<?php echo $dados['Imagem'];?>" name = "imagem">
        <imput type = "text" name = "id" value ="<?php echo $id;?>"><br>
        <label for = "nome">Nome:</label><br>
        <input type ="text" id = "nome" name ="nome" value = "<?php echo $dados['Nome'];?>"><br>
        <label for = "descricao">Descrição:></label><br>
        <textaerea id ="descricao" name ="descricao"><?php echo $dados['Descricao'];?></textaerea><br>
        <label for ="imagem">Imagem:</label><br>
        <?php
        if( !empty($dados['Imagem'])){
            ?>
            <img src="../imagens/categorias/<?php echo $dados['imagem'];?>" width="150"/><br>
            <?php
        }
        ?>
        <input type ="file" name = "foto">
        <hr>
        <input type = "submit" value = "Enviar"
    </form>
    </main>
    <?php
    include_once './includes/_footer.php';
    