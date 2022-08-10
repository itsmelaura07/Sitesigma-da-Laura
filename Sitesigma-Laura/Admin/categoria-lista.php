<?php
include_once './includes/_dados.php';

include_once './includes/_head.php';

$sql - "SELECT * FROM categorias";
$resultado = mysqli_query($conexao,$sql);

$total = mysqli_num_rows($resultado);

include_once './includes/_menu.php';
?>

<main>
    <h2> Administração das categorias</h2>
    <a href ="categoria-salvar.php">Inserir</a>
    <br>
    <table border="1">
        <tr>
       <th>Id</th>
       <th>Nome</th>
       <th>Ações</th>
</tr>
<?php
if ($resultado) {
    while ($dado = mysqli_fetch_array($resultado)) {

?>
<tr>
    <td><?php echo $dado['CategoriaID'];?></td>
    <td><a href= "categoria-salvar.php?acao-salvar&id<?php echo $dado['CategoriaID'];?>"><?php echo $dado['Nome'];?></a></td>
    <td><a href= "categoria-salvar.php?acao-excluir&id<?php echo $dado['CategoriaID'];?>">Excluir</a></td>
    </tr>
    <?php
    # code...
    }
}else{
?>
<tr>
    <tr>
        <td colspan ="3">Resultado não encotrado</td>
</tr>
<?php
}
?>
<tr
<td colspan ="3">Total de Registros: <?php echo $total;?></td>
</tr>
</table>

</main>
<?php
include_once './includes/_footer.php';
?>

