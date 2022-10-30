<?php
$rootDir = __DIR__ . '/..';
require_once ($rootDir . "/model/aluno.php");
require_once ($rootDir . "/model/alunoDAO.php");
require_once ($rootDir . "/config/conexao.php");


class AlunoController {

  public function listarTodos(){
    try {

      $conexao = new Conexao();
      $alunoDAO = new AlunoDAO($conexao);
      $listaDeAlunos = $alunoDAO->listar();

      return $listaDeAlunos;
    } catch (\Throwable $th) {
      throw $th;
    }

  }

  public function recuperarAluno($nome){
    try {

      $conexao = new Conexao();
      $alunoDAO = new AlunoDAO($conexao);
      $recuperarAluno = $alunoDAO->buscarUmAluno($nome);

      // echo "<p style='color:white;background-color:blue'> . {$recuperarAluno?->getNome()} . </p>";

      return $recuperarAluno;
    } catch (\Throwable $th) {
      throw $th;
    }

  }

  public function cadastrarAluno(){
    try {
      $aluno = new Aluno($_POST['nome_input'], $_POST['cidade_input'], $_POST['telefone_input'], $_POST['sexo_input'], $_POST['email_input']);
      $conexao = new Conexao();
      $alunoDao = new AlunoDAO($conexao);
      $alunoDao->cadastrar($aluno);

      echo '<script>alert("Aluno cadastrado com sucesso");</script>';
      echo '<script>window.location="../visualizar.php";</script>';

    } catch (\Throwable $th) {
      echo '<script>alert("Erro ao cadastrar o Aluno, contate o suporte para ajuda!");</script>';
      echo '<script>window.location="../menu.php";</script>';
      throw $th;
    }

  }

  public function excluirAluno(){
    try {
      $conexao = new Conexao();
      $alunoDao = new AlunoDAO($conexao);
      $alunoDao->excluir($_GET['id']);

      echo '<script>alert("Aluno EXCLUIDO com sucesso");</script>';
      echo '<script>window.location="../visualizar.php";</script>';
    } catch (\Throwable $th) {

      echo '<script>alert("Erro ao EXCLUIR o Aluno, contate o suporte para ajuda!");</script>';
      echo '<script>window.location="../menu.php";</script>';
      throw $th;
    }

  }

  public function atualizarAluno(){

  }
}

// echo $_SERVER['REQUEST_METHOD'];
// echo var_dump($_GET);

// echo "Valida 1 - " . isset( $_GET['id']);
// echo "Valida 2 - " . !empty( $_GET['id']);


if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset( $_GET['id']) && !empty( $_GET['id']) ) {

  $alunoController = new AlunoController();
  $alunoController->excluirAluno();

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
  // $alunoController = new AlunoController();
  // $alunoController->cadastrarAluno();

}

?>