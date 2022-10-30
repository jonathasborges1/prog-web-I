

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

  </style>
  <body>

  <?php
    session_start();
    $nome = $_SESSION['nome'] != null ? $_SESSION['nome']  : null;
    
    if($nome == ''){
      header('Location: index.php');
    }
    echo "<p style='color:white;background-color:blue'> .. Bem vindo Usuario {$nome} .. </p>";
  ?>
  <ul class="snip1459">
    <li class="current"><a href="#">Home</a></li>
    <li><a href="cadastrar.php">Cadastrar</a></li>
    <li><a href="visualizar.php">Visualizar</a></li>
    <li><a href="#">Alterar</a></li>
    <li><a href="excluir.php">Excluir</a></li>
  </ul>
  </body>
</html>



<!-- 
    Referencias:
      https://codepen.io/littlesnippets/pen/YqVgOB
-->