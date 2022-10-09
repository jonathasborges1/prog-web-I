<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  OI
  <?php
      $pagina[1] = "cadastro.php";
      $pagina[2] = "produto.php";
      $pagina[3] = "download.php";
      $pagina[4] = "imagens.php";

      $link = $_GET['link'];
  
      if(!empty($link)) {
  
        if(file_exists($pagina[$link])) {
          include $pagina[$link];
        }
        else {
          include "site.php";
        }
      }else {

        include "site.php";
      }
  ?>

</body>
</html>