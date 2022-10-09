<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>home</title>
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

  nav {
    text-align: center;
    width: 100%;
  }
  nav ul {
    list-style: none;
  }
  nav ul li {
    display: inline-block;
  }
  nav ul li a {
    text-decoration: none; 
    color: #fff; 
    background: #000; 
    border: solid 2px white; 
    padding: 0.5rem;
  }
  nav ul li a:hover {
    background: red;
  }

  .middle-wrapper {
    text-align: center;
    /* border: 3px solid green; */
    margin: 0.5rem;
    display: flex;
    width: 100%;
  }

  .middle-left {
    border: 1px solid white;
    margin: 0.5rem;
    width: 50%;
  }

  .middle-right {
    text-align: -webkit-center; /* Faz o alinhamento  do TEXTO na horizontal */
    border: 1px solid purple;
    margin: 0.5rem;
    width: 50%;
  }

  .middle-article {
    border: 3px solid yellowgreen;
    width: 45%;
    margin: 0.4rem;

  }
  .middle-left-wrapper{
    width: 100%;
    display: flex;
    justify-content: center;  /* Faz o alinhamento na horizontal */
    align-items: center;      /* Faz o alinhamento na vertical */
  }

  /* - - - - - - - - - - - - - - - - - - - -  CSS FOOTER - - - - - - - - - - - - - - - - - - - - */
  footer {
    background-color:#26272b;
    color:#939393;
    /* border: 2px solid yellow; */
    line-height:24px;
    width: 100%;
    margin-top: auto;

  }
  footer ht {
    border-top-color:#bbb;
    opacity:0.5
  }
  footer h6 {
    color:#fff;
    font-size:16px;
    text-transform:uppercase;
    margin-top:5px;
    letter-spacing:2px;
  }
  footer a {
    color:#737373;
  }
  footer a:hover {
    color:#3366cc;
    text-decoration:none;
  }


  .footer-links {
    padding-left:0;
    list-style:none;
  }
  .footer-links li {
    display:block
  }
  .footer-links a {
    color:#737373
  }
  .footer-links a:active,.footer-links a:focus,.footer-links a:hover {
    color:#3366cc;
    text-decoration:none;
  }
  .footer-links.inline li {
    display:inline-block
  }

  footer .social-icons{
    text-align:right;
  }
  footer .social-icons a {
    width:40px;
    height:40px;
    line-height:40px;
    margin-left:6px;
    margin-right:0;
    border-radius:100%;
    background-color:#33353d
  }

  .copyright-text{
    margin:0;

  }


  .footer-container{
    width: 80%;
    margin: auto;
  }

  .footer-rows{

    /* border: 2px solid black; */
    display: flex;
    justify-content: center;  /* Faz o alinhamento na horizontal */

    width: 100%;
    margin: auto;
  }

  .footer-columns-2{
    /* border: 2px solid purple; */

    padding: 0.8rem;

    align-self: center;
    width: 50%
  }
  .footer-columns-3{
    /* border: 2px solid purple; */

    padding: 0.8rem;

    align-self: center;
    width: 25%
  }

  .social-icons {
    text-align:center;
    padding-left:0;
    margin:0;
    list-style:none
  }
  .social-icons li {
    display:inline-block;
    margin-bottom:4px
  }
  .social-icons li.title {
    margin-right:15px;
    text-transform:uppercase;
    color:#96a2b2;
    font-weight:700;
    font-size:13px
  }
  .social-icons a {
    background-color:#eceeef;
    color:#818a91;
    font-size:16px;
    display:inline-block;
    line-height:44px;
    width:44px;
    height:44px;
    text-align:center;
    margin-right:8px;
    border-radius:100%;
    -webkit-transition:all .2s linear;
    -o-transition:all .2s linear;
    transition:all .2s linear
  }
  .social-icons a:active,.social-icons a:focus,.social-icons a:hover{
    color:#fff;
    background-color:#29aafe
  }
  .social-icons.size-sm a{
    line-height:34px;
    height:34px;
    width:34px;
    font-size:14px
  }
  .social-icons a.facebook:hover{
    background-color:#3b5998
  }
  .social-icons a.twitter:hover{
    background-color:#00aced
  }
  .social-icons a.linkedin:hover{
    background-color:#007bb6
  }
  .social-icons a.dribbble:hover{
    background-color:#ea4c89
  }


</style>
<body>

  <?php 
    $today = date('d/m/Y H:i:s');
    echo "</br>Exibindo data com PHP - $today ";
    $day = getdate();
    switch ($day["wday"]) {
      case 0:
        echo "Hoje é Domingo";
        break;
      
      case 1:
        echo "Hoje é Segunda-Feira";
        break;   
  
      case 2:
        echo "Hoje é Terça-Feira";
        break;
        
      case 3:
        echo "Hoje é Quarta-Feira";
        break;
     
      case 4:
        echo "Hoje é Quinta-Feira";
        break;

      case 5:
        echo "Hoje é Sexta-Feira";
        break;
  
      case 6:
        echo "Hoje é Sábado";
        break;
  
      default:
      echo "Não foi possivel definir o dia da semana";
        break;
    }

  ?>

  <script>
    function showName(){
      let nome = document.getElementById("nameUser").value;
      alert("Welcome " + nome);
    }

    function insertZero(s){
      return (s < 10) ? '0' + s : s;
    }

    const data = new Date();
    const hour = data.getHours()+":"+insertZero(data.getMinutes())+":"+insertZero(data.getSeconds());
    const day = data.getDate();
    const week = data.getDay();
    const month = data.getMonth()+1;
    const year = data.getFullYear();
    const weekDescription = ["Domingo", "Segunda-Feira", "Terça-Feira", "Quarta-Feira", "Quinta-Feira", "Sexta-Feira", "Sábado"];
    const monthDescription = ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];
    
    document.write("</br>Exibindo data com Javascript - Hoje é " + weekDescription[week]+ " dia " + day + " de " + monthDescription[month] + " de " + year + " às " + hour);

    function changeBackGround(){
      const titleBackgroundColor = document.getElementById("titleChangeColor"); // Muda o background para azul quando passar o mouse por cima do titulo
      titleBackgroundColor.style.backgroundColor = 'blue';
    }

    function backgroundDefault(){
      const titleBackgroundColor = document.getElementById("titleChangeColor"); // Muda o background para preto quando tira o mouse de cima do título
      titleBackgroundColor.style.backgroundColor = 'black';
    }

  </script>



  <h1 id="titleChangeColor" onmouseover="changeBackGround()" onMouseOut="backgroundDefault()" >Por favor, Digite seu nome</h1>
  <label for="nome"> Seu Nome: </label> <input type="text" id="nameUser">
  <button id="buttom" onclick="showName()">botao</button>
  <nav class="navbar">
    <ul>
      <li > <a class="item" href="router.php?link=1">Cadastro de Clientes</a></li>
      <li > <a class="item" href="router.php?link=2">Lista de Produtos</a></li>
      <li > <a class="item" href="router.php?link=3">Download</a></li>
      <li > <a class="item" href="router.php?link=4">Imagens</a></li>

    </ul> 
  </nav>

  <section class="middle-wrapper">
    <section class="middle-left">

      <h2>Área Reservada para artigos  [Título do Artigo]</h2>
      <p>Este elemento representa um parágrafo que faz parte do conteudo do artigo principal [Descrição do artigo]</p>
     
      <section class="middle-left-wrapper">
        <article class="middle-article">
          <h3>Sessão Área I [Título da sessão]</h3>
          <p>Este elemento representa o primeiro parágrafo que faz parte da sessão Area I [Descrição do sessão I]</p>
        </article>
    
        <article class="middle-article">
          <h3>Sessão Área II [Título da sessão II]</h3>
          <p>Este elemento representa o segundo parágrafo que faz parte da sessão Area II [Descrição do sessão II]</p>
        </article>
      </section>

    </section>
    
    <aside class="middle-right">
      <h2> Área Reservada para tag ASIDE [Título do Artigo]</h2>
      <p> Este elemento representa a primeira descrição do bloco ASIDE, geralmente usado descrever sobre o que se trata o texto de acordo com o título acima. </p>
      <p> Este elemento representa a segunda descrição ou segundo parágrafo do bloco representado pela tag p </p>
    </aside>

  </section>

  

  <footer>
    <div class="footer-container">

      <div class="footer-rows">

        <div class="footer-columns-2">
          <h6>Sobre</h6>
          <p>
            A pagina foi criada com intuito de dar continuidade as atividades de programação web ofertado pelo Instituto Federal do Sul de Minas.
            Todas as atividades exigidas ao longo do curso serao postadas neste espaço com objetivo de dar mais tranparência e celeridade a todas as entregas.
            Gostaria de deixar meus agradecimentos ao docente Sílder Vecchi, professor responsavel por ministrar a disciplina Programação Web I.
          </p>
        </div>

        <div class="footer-columns-3">
          <h6>Linguagens Utilizadas </h6>
          <ul class="footer-links">
            <li><a href="#">HTML5</a></li>
            <li><a href="#">CSS3</a></li>
            <li><a href="#">JAVASCRIPT</a></li>
            <li><a href="#">PHP</a></li>
            <li><a href="#">ReactJS</a></li>
          </ul>
        </div>

        <div class="footer-columns-3">
          <h6>Links De Referencia</h6>
          <ul class="footer-links">
            <li><a href="https://codepen.io/jonathasborges1">Codepen</a></li>
            <li><a href="https://fontawesome.com/icons/">fontawesome</a></li>
            <li><a href="https://github.com/jonathasborges1">Github</a></li>
            <li><a href="#">Politicas de Privacidade</a></li>
            <li><a href="#">LGPD</a></li>
          </ul>
        </div>
      </div>

      <hr>

      <div class="footer-rows">

        <div class="footer-columns-2">
          <p class="copyright-text">Copyright © 2022 All Rights Reserved by Jonathas Borges.</p>
        </div>
        
        <div class="footer-columns-2">  
          <ul class="social-icons"> 
            <li><a class="facebook" href="facebook.com/jonathas.cavalcante/"> <i class="fa-brands fa-facebook"></i> </a></li>
            <li><a class="twitter" href="https://twitter.com/jonathasborges_"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fa-brands fa-dribbble"></i></a></li>
            <li><a class="linkedin" href="https://www.linkedin.com/in/jonathascavalcante/"><i class="fa-brands fa-linkedin"></i></a></li>   
          </ul>
        </div>

      </div>
    </div>


  </footer>

</body>
</html>


<!-- 
  
  Fonte de referencia :
    -> CDN para usar os icones : https://cdnjs.com/libraries/font-awesome
    -> Banco de icones : https://fontawesome.com/icons/lock?s=duotone&f=classic
    -> Inspiracao para footer da Tela HOME : https://codepen.io/scanfcode/pen/MEZPNd
    -> Inspiracao para footer da Tela HOME : https://codepen.io/0exploits/pen/joWyoN?&page=1
    -> Inspiracao para Tela HOME : https://codepen.io/Dentz/pen/wMYRXY

 -->