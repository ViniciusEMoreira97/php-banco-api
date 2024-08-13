<?php
require_once 'Infraestrutura/Persistencia/FabricaConexao.php';

$pdo = FabricaConexao::criarConexao();

$insert = 'insert into treino_php(nome) values (:nome);';
$statement = $pdo->prepare($insert);
$statement->bindValue(':nome', 'Macau');
$statement->execute();
echo 'Sucesso';

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

