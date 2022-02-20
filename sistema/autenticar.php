<?php

require_once("conexao.php");

$query = $pdo->prepare("SELECT * from usuarios where 
    email = :email and senha = :senha");
$query->bindValue(":email","$email");
$query->bindValue(":senha","$senha");
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);

?>