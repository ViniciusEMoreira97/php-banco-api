<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Pessoa
 *
 * @author Cliente
 */
class Pessoa {
    //put your code here
    public int $id;
    public string $nome;
    public string $sexo;
    public DateTime $nascimento;
    
    public function __construct(int $id, string $nome, string $sexo, DateTime $nascimento) {
        $this->id = $id;
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->nascimento = $nascimento;
    }
    
    public function getId(): int {
        return $this->id;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getSexo(): string {
        return $this->sexo;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function setSexo(string $sexo): void {
        $this->sexo = $sexo;
    }
    
    public function getNascimento(): DateTime {
        return $this->nascimento;
    }

    public function setNascimento(DateTime $nascimento): void {
        $this->nascimento = $nascimento;
    }





}
