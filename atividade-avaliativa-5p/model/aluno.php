<?php

class Aluno{

    private string $nome;
    private string $cidade;
    private string $telefone;
    private string $sexo;
    private string $email;

    function __construct(string $nome_, string $cidade_, string $telefone_, string $sexo_, string $email_){
      $this->nome = $nome_;
      $this->cidade = $cidade_;
      $this->telefone = $telefone_;
      $this->sexo = $sexo_;
      $this->email = $email_;
    }

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