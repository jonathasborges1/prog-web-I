<?php

class Aluno{
    private $nome;
    private $cidade;
    private $telefone;
    private $sexo;
    private $email;

    public function getNome(){
      return $this->nome;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function getSexo(){
       return $this->sexo;
    }   
    
    public function getEmail(){
      return $this->email;
   } 
   
}

?>