<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atividade Avaliativa - Pos_Web - Css</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,600,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>

    html {
      font-family: 'Montserrat', sans-serif;

      height: 100%;             /* Auxila no css gradient background para que ele ocupe a tela inteira */
      
      display: flex;            /* As propriedade abaixo funcionam apenas com display flex */
      justify-content: center;  /* Faz o alinhamento na horizontal */
      align-items: center;      /* Faz o alinhamento na vertical */

      
    }

    body {
      background: #092756;
      background: 
        -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), 
        -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), 
        -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%); 
    }

    .login-box {
      
      color: white;                /* Define a cor do TEXTO                      */
      text-align: center;            /* Define o alinhamento centralizado do TEXTO */
      padding: 0.6rem;               /* Define a espaçamento interno do TEXTO      */

      width: 30rem;                  /* Define a altura do BLOCO        */
      height: 25rem;                 /* Define a altura do BLOCO        */
      background: rgba(0,0,0,.2);  /* Define a cor de fundo do BLOCO  */
      box-sizing: border-box;        
      box-shadow: 0 15px 25px rgba(0,0,0,.6); /* Define a sombra do BLOCO  */
      border-radius: 1rem;                      /* Define a borda do BLOCO   */

    }
    input { 
      width: 75%; 

      margin-bottom: 1rem; 
      padding: 1rem;
      
      background: rgba(0,0,0,0.3);
      font-size: 1rem;                      /* Define o tamanho do TEXTO do placeholder e do que for digitado pelo usuario */
      color: #fff;                        /* Define a cor do TEXTO digitado pelo usuario no input */
      
      /* border: 0.15rem solid rgba(0,0,0,0.3); */
      border-radius: 0.25rem;
      /* box-shadow: inset 0 -5px 45px rgba(100,100,100,0.1), 0 1px 1px rgba(255,255,255,0.1); */
  }

  .login-buttom{
    font-family: 'Montserrat', sans-serif;
    color: #0DB8DE;
    font-weight: bold;
    font-size: 1.2rem;
    letter-spacing: 0.1rem;

    width: 100%; 
    padding: 0.8rem;

    background-color: transparent;
    border: 0.2rem solid #0DB8DE;
    border-radius: 0.5rem;

    box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);
    cursor: pointer;
  }

  .login-buttom:hover {
    background-color: #0DB8DE;
    color:black;
    right: 0px;
  } 
  .label-icon{
    /* border: 1px solid red; */
    width: 50%; 
    padding: 1rem;
    
    background-color: #272b31;

    padding-left: 1.25rem;
    padding-right: 1.25rem;
    box-shadow: inset 0 -5px 45px rgba(100,100,100,0.1), 0 1px 1px rgba(255,255,255,0.2);

  }
  </style>
</head>
<body>
  <script>
    
    function Login(){
      let username = document.login.myUsername.value;
      username = username.toLowerCase();
      
      let password = document.login.myPassword.value;
      password = password.toLowerCase();

      if(username === "admin" && password === "123"){
        window.location = "site.html";
      }else {
        alert("Usuário ou Senha Invalido.");
      }
    }
    
  </script>
  <?php
    echo "Olá mundo";
  ?>

  
  <div class="login-box">
    <h1>Login</h1>
    <form method="post" name="login">
      
      <label for="" class="label-icon"> 
        <i class="fa-solid fa-user"></i> 
      </label> 
      
      <input type="text" name="myUsername" placeholder="Seu nome" required="required" />
      
      <label for="" class="label-icon"> 
        <i class="fa-solid fa-lock"></i>
      </label>  
      
      <input type="password" name="myPassword" placeholder="Sua Senha" required="required" />
  
      <!-- <button type="submit" class="login-buttom"> Entrar  </button>  -->
      <input type="button" value="Entrar" onclick="Login()"> 
 
    </form>

    <p style="font-size:0.8rem;">Ainda Não Possui Cadastro? 
      <a href="#" style="color:#0DB8DE">Cadastrar agora</a> 
      <i class="fa fa-arrow-up-right-from-square" style="color:#0DB8DE"></i>
    </p>
  </div>

</body>
</html>

<!-- 
  
  Fonte de referencia :
    -> CDN para usar os icones : https://cdnjs.com/libraries/font-awesome
    -> Banco de icones : https://fontawesome.com/icons/lock?s=duotone&f=classic
    -> Inspiracao para o background  : https://codepen.io/frytyler/pen/nJYVEO
    -> Inspiracao para Tela de login : https://codepen.io/marcobiedermann/pen/nbpKWV
    -> Inspiracao para Tela de login : https://codepen.io/emreberber/pen/oeREoZ
    
    -> Visualizar codigo fonte do Projeto completo : https://codepen.io/jonathasborges1/pen/qBYVbZv
    
 -->