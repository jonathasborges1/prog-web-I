<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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

  body {
    width: 60%;
      background: #092756;
      background: 
        -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), 
        -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), 
        -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%); 
    }
  h1, h2, h3, h4, h5, h6 {
    margin: 0 0 5px 0;
  }
  .albums {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); /* Organiza os bloco em colunas de 2 por linha */
        grid-gap: 20px; /* Criar Espaçamento entre os blocos de foto */
      }
      .album {
        background: rgba(255, 255, 255, 0.2);
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
        display: grid;
        grid-template-columns: 150px 1fr;
        grid-gap: 10px;
        align-items: center;
        color: white;
        font-weight: 100;
      }
      .album__artwork {
        width: 100%;
        height: 100%;
      }
  p {
    margin: 0 0 20px 0;
  }
  
  .sample-image {
    transition:all 1s ease;
    width: 100%;
  }

  .sample-image-large:hover {
    /* width: 200% !important; */
    /* background-color: blue; */
    transform: scale(1.2);
  }
</style>
<body>
  <script>
    function sizeEffect(){
      
      const albumList = document.getElementsByClassName('album__artwork') ;
      Object.values(albumList).forEach(element => {
        element.addEventListener( 'mouseover',
          (event) => { 
            const targetEvent = event.target; 
            targetEvent.classList.toggle('sample-image-large');
          })
      });

      console.log('debug')

    }

  </script>


  <a href="site.php"> 
    <img src="https://cdn-icons-png.flaticon.com/16/61/61449.png" alt="seta">
    <button>Retornar para Home</button> 
  </a>  <br><br>

  <h1 style="text-align: center;" >Album de Fotos</h1>

  <div class="albums">

    <div class="album">
      <img class="album__artwork" src="./img/album-shippuden-0.jpeg" onmouseover="sizeEffect()">
      <div>
        <h2>Autor do Album</h2>
        <p class="album__artist">Jonathas Borges</p>
        <p class="album__desc">Tomando uma chícara de café com Leite em Família</p>
      </div>
    </div>
  
    <div class="album">
      <img class="album__artwork" src="./img/album-shippuden-1.jpeg" onmouseover="sizeEffect()">
      <div>
        <h2>Episódio 113</h2>
        <p>Voltando para Casa</p>
        <p>Kakashi Senpai e o  time 7 no inicio do treinamento ninja </p>
      </div>
    </div>
  
    <div class="album">
      <img class="album__artwork" src="./img/album-shippuden-2.jpeg" onmouseover="sizeEffect()">
      <div>
        <h2>Episodio 344</h2>
        <p class="album__artist">Os 5 Kages </p>
        <p class="album__desc">Aliança Ninja contra Uchiha Madara</p>
      </div>
    </div>
  
    <div class="album">
      <img class="album__artwork" src="./img/album-shippuden-3.jpeg" onmouseover="sizeEffect()">
      <div>
        <h2>Episódio 233 </h2>
        <p class="album__artist">Treinamento Shinobi</p>
        <p class="album__desc">Jiraya Sensei e a jornada do discipulo</p>
      </div>
    </div>
  
    <div class="album">
      <img class="album__artwork" src="./img/album-shippuden-4.jpeg" onmouseover="sizeEffect()">
      <div>
        <h2>Episódio 321</h2>
        <p class="album__artist">O artista da time 7</p>
        <p class="album__desc"> Expressando sua forma de ver o mundo através de seus desenho </p>
      </div>
    </div>

  </div>

</body>
</html>

<!-- 
  Referencias
    - https://codepen.io/pratheeshps-me/pen/eYEBGRV
    - https://codepen.io/didondio/pen/WyKXKK
    - https://www.youtube.com/watch?v=p4vS9wy3drg&t=1s
    - https://www.youtube.com/watch?v=GRnuz7DbHLM
    - 
    - https://stackoverflow.com/questions/71034865/zoom-in-and-out-of-image-on-click-using-event-listeners (manipulacao de eventos com javascript)

-->