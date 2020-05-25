<?php
include 'Conexao.php';

$ent1 = $_GET['ent1'];
$ent2 = $_GET['ent2'];

$sql = "INSERT INTO `gaveta`(`livro`, `quantidade`) VALUES (:ent1, :ent2)";
$result = $db->prepare($sql);
$exec = $result->execute(array(":ent1"=>$ent1, ":ent2"=>$ent2));

if($exec){
    header('Location: /AulaDoRafael/index.html');
}else{
    echo "<a href='/AulaDoRafael/index.html'>VOLTAR</a>";
}
?>