<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of FabricaConexao
 *
 * @author Cliente
 */
//namespace Infraestrutura\Persistencia;

class FabricaConexao {
    //put your code here
    public static function criarConexao(): PDO{
        $username = 'root';
        $password = '';
        $dsn = 'mysql:dbname=bd_treino_cohab;host=localhost';

        return new PDO($dsn, $username, $password);
    }
    
    

}
