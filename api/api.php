<?php
    require_once '../Infraestrutura/Persistencia/FabricaConexao.php';

    $pdo = FabricaConexao::criarConexao();
    
    $acao = $_REQUEST["acao"];
    $return = array();
    
    if($acao === 'carregar-dados'){
        $query = "select * from treino_php";
        $consulta = $pdo->prepare($query);
        $consulta->execute();
        
        while($data = $consulta->fetch(PDO::FETCH_ASSOC)){
            $return[] = array(
                "id" => $data["id"],
                "nome" => $data["nome"]
            );
        }
    }
    
    die(json_encode($return));
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

