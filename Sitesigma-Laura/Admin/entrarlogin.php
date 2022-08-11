<?php
require '../includes/Banco.php';

$user = $_POST['user'];
$password = $_POST['password'];

$sql = "SELECT * FROM adm WHERE usuario = '{$user}' and senha = '{$password}'";
$res = mysqli_query($conn, $sql);
$linhas = mysqli_num_rows($res);

if($linhas > 0){
    session_start();
    $_SESSION['logado'] = 'logado';
    header('Location: ./admin.php');
}else{
    header('Location: ./login.php');
}
mysqli_close($conn);
?>
