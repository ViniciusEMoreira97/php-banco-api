<?php

require_once 'Infraestrutura/Persistencia/FabricaConexao.php';
require_once 'Domain/Repository/RepositorioEstudante.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of RepositorioEstudantePDO
 *
 * @author Cliente
 */
class RepositorioEstudantePDO implements RepositorioEstudante {
    //put your code here
    private \PDO $conexao;
    
    public function __construct(\PDO $conexao) {
        $this->conexao = $conexao;
    }
    
    #[\Override]
    public function adicionarEstudante($nome): bool {
        $query = 'insert into treino_php(nome) values (:nome)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nome', $nome);
        $sucess = $stmt->execute();
        
        return $sucess;
    }

    #[\Override]
    public function removerEstudante($id): bool {
        $query = 'delete from treino_php where id = :id';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id', $id);
        $sucess = $stmt->execute();
        
        return $sucess;
    }

    #[\Override]
    public function todosEstudantes(): array {
        $query = 'select * from treino_php';
        $resultado = $this->conexao->query($query);
        $lista = $resultado->fetchAll(PDO::FETCH_ASSOC);
        
        return var_dump($lista);
    }
}
