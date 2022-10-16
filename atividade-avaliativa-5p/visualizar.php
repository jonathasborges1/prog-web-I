
<?php
require_once ("./config/conexao.php");
require_once ("./model/alunoDAO.php");

?>

<!DOCTYPE html>

<html>

	<head>
		<meta charset="UTF-8" />
		<link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet" type="text/css" />
		<link href="https://cdn.jsdelivr.net/npm/quasar@^1.0.0-beta.0/dist/quasar.min.css" rel="stylesheet" type="text/css" />
		<link href="styles.css" rel="stylesheet" type="text/css" />
	</head>

  <style>
    body > table{
        width: 80%;
    }
    table{
        border-collapse: collapse;
    }
    table.list{
        width: 100%;
    }
    td, th{
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even),table.list thead>tr{
        background-color: #dddddd;
    }
    input[type=text], input[type=number] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        cursor: pointer;
    }
    form div.form-action-buttons{
        text-align: right;
    }
    a{
        cursor: pointer;
        text-decoration: underline;
        color: #0000ee;
        margin-right: 4px;   
    }
    label.validation-error{
        color: red;
        margin-left: 5px;
    }
    .hide{
        display: none;
    }
  </style>

	<body>
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
              </tr>
          </thead>
          <tbody>
              <tr>
                <?php
                  $db = new Conexao();
                  $alunoDAO = new alunoDAO($db);
                  $listaDeAlunos = $alunoDAO->listar();

                  foreach($listaDeAlunos as $aluno){
                    echo "<td> " . $aluno['id_alu'] . "</td>";
                    echo "<td> " . $aluno['nome_alu'] . "</td>";
                    echo "<td> " . $aluno['cidade_alu'] . "</td>";
                    echo "<td> " . $aluno['tel_alu'] . "</td>";
                    echo "<td> " . $aluno['sexo_alu'] . "</td>";
                    echo "<td> " . $aluno['email_alu'] . "</td>";
                  }
              ?>
              </tr>
          </tbody>
      </table>   <!--table end-->
      
    </div>   <!--container end-->
  </body>
</html>



<!-- 
    Referencias:
      https://codepen.io/toy5429274/pen/avNGLP?editors=1010
-->
