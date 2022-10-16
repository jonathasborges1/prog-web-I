<?php
$rootDir = __DIR__ . '/..';
require_once ($rootDir. "/config/conexao.php");
require_once "aluno.php";

class AlunoDAO{

  private $db;

  // public function AlunoDAO(Conexao $db){
  //   $this->db = $db;
  // }

  function __construct(Conexao $db){
    $this->db = $db;
  }


  public function listar(){
    $listaDeAlunos = array();

    $query = "SELECT * FROM aluno";
    $resultado = pg_query($this->db->getConexao(), $query);

    while($aluno = pg_fetch_assoc($resultado)){
      array_push($listaDeAlunos, $aluno);
    }
    // this->db->desconectar();
    return $listaDeAlunos;
  }

}
?>