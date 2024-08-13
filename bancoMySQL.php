<?php

require_once 'Pessoa.php';
require_once 'Infraestrutura/Repositorio/RepositorioEstudantePDO.php';

$dataTempo = new DateTime();
$dataTempo->format('Y-m-d H:i:s');
$pessoa = new Pessoa(id: 5,nome: 'Vinicius', sexo: 'Masculino', nascimento: $dataTempo);
$nome = $pessoa->getNome();

$pdo = FabricaConexao::criarConexao();
$adicionar = new RepositorioEstudantePDO($pdo);
$adicionar->adicionarEstudante($nome);

$lista = new RepositorioEstudantePDO($pdo);
$lista->todosEstudantes();


/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

