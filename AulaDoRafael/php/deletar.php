<?php
include 'Conexao.php';

$deletar = $_GET['deletar'];

$sql = "DELETE FROM `gaveta` WHERE id = :id";
$id = $deletar;
$result = $db->prepare($sql);
$result->execute(array(":id"=>$id));

if($result){
    header('Location: /AulaDoRafael/index.html');
}
?>