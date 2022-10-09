<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Produtos</title>
</head>
<style>
    html{
    color: white;
    background: #092756;
      background: 
        -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), 
        -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), 
        -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%); 
    
    margin: 0px;
    padding: 0px;

    height: 100%;

    display: flex;
    justify-content: center;  /* Faz o alinhamento na horizontal */
    align-items: center;      /* Faz o alinhamento na vertical */

  }
</style>
<body>

  <a href="site.php"> 
    <img src="https://cdn-icons-png.flaticon.com/16/61/61449.png" alt="seta">
    <button>Retornar para Home</button> 
  </a>  <br><br>

  <fieldset> 
    <legend>Lista Ordenada de Produtos</legend>

    <ol>
      <li>abacaxi</li>
      <li>abacate</li>
      <li>amora</li>
      <li>banana</li>
      <li>bacuri</li>
      <li>buriti</li>
    </ol>

  </fieldset> <br>


  <fieldset>
    <legend>Lista Não Ordenada de Produtos</legend>

    <ul>
      <li>caju</li>
      <li>carambola</li>
      <li>cacau</li>
      <li>goiaba</li>
      <li>graviola</li>
      <li>groselha</li>
    </ul>
    
  </fieldset>

</body>
</html>