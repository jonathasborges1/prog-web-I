<?php
require_once (__DIR__. "/controller/alunoController.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Excluir Aluno</title>
</head>
<body>
  
<a href="menu.php"> 
      <img src="https://cdn-icons-png.flaticon.com/16/61/61449.png" alt="seta">
      <button>Retornar para Home</button> 
    </a>  <br>
    <div class="container">   <!--container start-->

      <table class="list">   <!--table start-->
          <thead>
              <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Cidade</th>
                <th>Telefone</th>
                <th>Sexo</th>
                <th>Email</th>
                <th>DELETAR</th>
              </tr>
          </thead>
          <tbody>
                <?php
              
                  $alunoController = new AlunoController();
                  $listaDeAlunos = $alunoController->listarTodos();

                  foreach($listaDeAlunos as $aluno){
                    echo "<tr>";
                    echo "<td> " . $aluno['id_alu']     . "</td>";
                    echo "<td> " . $aluno['nome_alu']   . "</td>";
                    echo "<td> " . $aluno['cidade_alu'] . "</td>";
                    echo "<td> " . $aluno['tel_alu']    . "</td>";
                    echo "<td> " . $aluno['sexo_alu']   . "</td>";
                    echo "<td> " . $aluno['email_alu']  . "</td>";
                    echo "<td> " .  " <a href='./controller/alunoController.php?id={$aluno['id_alu']}'>Excluir</a>"
                    // " <form method='GET' action='./controller/alunoController.php?id=teste'>" .
                    // "  <input type='submit' value='Excluir'> </form>" 
                    . "</td>";
                    echo "</tr>";
                  }
                  // {$aluno['id_alu']}'
              ?>
          </tbody>
      </table>   <!--table end-->
      
    </div>   <!--container end-->

</body>
</html>

