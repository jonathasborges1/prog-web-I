
<?php

require_once (__DIR__. "/controller/alunoController.php");
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
      @import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
    @import url(https://fonts.googleapis.com/css?family=Roboto:300,400);
    .snip1459 {
      font-family: 'Roboto', Arial, sans-serif;
      text-align: left;
      text-transform: uppercase;
      font-weight: 300;
      background-color: #eee;
      display: inline-block;
      padding: 0;
      letter-spacing: 2px;
      background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0.1) 0%, transparent 100%);
      background-image: linear-gradient(to top, rgba(0, 0, 0, 0.1) 0%, transparent 100%);
    }
    .snip1459 *,
    .snip1459 *:before {
      -webkit-transition: all 0.3s ease;
      transition: all 0.3s ease;
    }
    .snip1459 li {
      display: inline-block;
      list-style: outside none none;
      margin: 0;
      position: relative;
      float: left;
    }
    .snip1459 > li {
      border-left: 1px solid #ffffff;
      border-right: 1px solid #b3b3b3;
    }
    .snip1459 > li:first-of-type {
      border-left: none;
    }
    .snip1459 > li:last-of-type {
      border-right: none;
    }
    .snip1459 a {
      color: #000000;
      display: block;
      padding: 1.1em 2em 1.3em;
      position: relative;
      text-decoration: none;
    }
    .snip1459 a:hover {
      color: #ffffff;
    }
    .snip1459 > li:before,
    .snip1459 > li:after {
      position: absolute;
      content: '';
    }
    .snip1459 > li:before {
      background-color: #962d22;
      left: 50%;
      right: 50%;
      bottom: 0;
      top: 0;
      opacity: 0;
    }
    .snip1459 > li:after {
      position: absolute;
      bottom: 0;
      left: -1px;
      right: -1px;
      height: 5px;
      background-color: #6d2018;
      box-shadow: 0px -1px 2px rgba(0, 0, 0, 0.5);
    }
    .snip1459 ul {
      display: none;
      position: absolute;
      top: 100%;
      margin: 0;
      padding: 5px 0;
      white-space: nowrap;
      font-size: 0.8em;
      background-color: #8e2a20;
      color: #ffffff;
      font-weight: 400;
    }
    .snip1459 ul li {
      display: list-item;
      float: none;
      position: relative;
    }
    .snip1459 ul li a {
      padding: 0.8em 1.2em;
      color: #ffffff;
      text-transform: none;
      opacity: 0.8;
    }
    .snip1459 ul li a:hover {
      opacity: 1;
    }
    .snip1459 li:hover > ul {
      display: inherit;
    }
    .snip1459 li > a:after {
      content: ' \f3d0';
      font-family: "Ionicons";
    }
    .snip1459 li > a:only-child:after {
      content: '';
    }
    .snip1459 ul ul {
      background-color: #962d22;
      top: 0px;
      left: 100%;
      list-style: none;
      font-size: 1em;
    }
    .snip1459 ul li > a:after {
      content: ' \f3d1';
    }
    .snip1459 > li:hover > a,
    .snip1459 > li.current > a {
      color: #fff;
    }
    .snip1459 > li:hover:before,
    .snip1459 > li.current:before {
      left: 0;
      right: 0;
      opacity: 1;
    }
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
                    echo "</tr>";
                  }
                
              ?>
          </tbody>
      </table>   <!--table end-->
      
    </div>   <!--container end-->
  </body>
</html>



<!-- 
    Referencias:
      https://codepen.io/toy5429274/pen/avNGLP?editors=1010
-->
