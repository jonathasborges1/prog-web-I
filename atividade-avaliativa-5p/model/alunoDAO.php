<?php
$rootDir = __DIR__ . '/..';
require_once ($rootDir. "/config/conexao.php");
require_once (__DIR__ ."/aluno.php");

class AlunoDAO{

  private $db;

  // public function AlunoDAO(Conexao $db){
  //   $this->db = $db;
  // }

  function __construct(Conexao $db){
    $this->db = $db;
  }

  public function listar(){

    try {

      $listaDeAlunos = array();
      $query = "SELECT * FROM aluno";
      $resultado = pg_query($this->db->getConexao(), $query);

      while($aluno = pg_fetch_assoc($resultado)){
        array_push($listaDeAlunos, $aluno);
      }
 
      $this->db->desconectar();

      return $listaDeAlunos;
    } catch(err){
      echo "AlunoDAO > listar() > Deu ruim =( - " . $err;
      return $err;
    }

  }

  public function cadastrar(Aluno $aluno){
    $query = "INSERT INTO aluno(nome_alu, cidade_alu, tel_alu, sexo_alu, email_alu) VALUES ('{$aluno->getNome()}','{$aluno->getCidade()}','{$aluno->getTelefone()}','{$aluno->getSexo()}','{$aluno->getEmail()}')";
    return pg_query($this->db->getConexao(),$query);
  }

  public function excluir(string $_id){
    $query = "DELETE FROM aluno WHERE id_alu = {$_id}";
    $resultado = pg_query($this->db->getConexao(), $query);
    // return $resultado;
    return pg_fetch_assoc($resultado);
  }

}
?>