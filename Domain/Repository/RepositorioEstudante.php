<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

/**
 *
 * @author Cliente
 */
interface RepositorioEstudante {
    //put your code here
    public function todosEstudantes(): array;
    public function adicionarEstudante($nome): bool;
    public function removerEstudante($id): bool;
}
