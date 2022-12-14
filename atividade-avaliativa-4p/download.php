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
    color: green;
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
  table { 
	width: 750px; 
	border-collapse: collapse; 
	margin:50px auto;
	}

/* Zebra striping */
tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #3498db; 
	color: white; 
	font-weight: bold; 
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 18px;
	}

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table { 
	  	width: 100%; 
	}

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}

	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		/* Label the data */
		content: attr(data-column);

		color: #000;
		font-weight: bold;
	}

}
</style>

<body>

  <a href="site.php"> 
    <img src="https://cdn-icons-png.flaticon.com/16/61/61449.png" alt="seta">
    <button>Retornar para Home</button> 
  </a>  <br>

  <table>
    <thead>
      <tr>
        <th>Titulo</th>
        <th>Descri????o</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td data-label="Titulo">Atividade Avaliativa - Programa????o Web</td>
        <td data-label="Descri????o">
          <a href="https://cdn.discordapp.com/attachments/1020847196255559700/1020847426422194216/Atividade_Avaliativa_-_POS.pdf"><button>Download - Atividade_AvaliativaPOS.pdf</button></a>
        </td>
      </tr>
      
      <tr>
        <td data-label="Titulo">Anime Goku Pensativo</td>
        <td data-label="Descri????o">
          <a href="https://cdn.discordapp.com/attachments/1020847196255559700/1020848736018112623/gokupensativo.jpg"><button>Download - anime.jpg</button></a>
        </td>
      </tr>

      <tr>
        <td data-label="Titulo">Lets Coders Compactado</td>
        <td data-label="Descri????o">
          <a href="https://cdn.discordapp.com/attachments/1020847196255559700/1020852271464075264/letscoders.zip"><button>Download - letscoders.rar</button></a>
        </td>
      </tr>
      
      <tr>
        <td data-label="Titulo">Jesus Bood MP3 music</td>
        <td data-label="Descri????o">
          <a href="https://cdn.discordapp.com/attachments/1020847196255559700/1020854980061704362/Jesus_Blood_-_Martin_Smith_Fingerstyle_Guitar_Cover_by_Albert_Gyorfi_TABS_128_kbps.mp3"><button>Download - Jesus_Blood.mp3</button></a>
        </td>
      </tr>
 
      <tr>
        <td data-label="Titulo">Frases do amor de Jesus MP4 movie</td>
        <td data-label="Descri????o">
          <a href="https://cdn.discordapp.com/attachments/1020847196255559700/1020857016022999101/frasesdoamordejesus.mp4"><button>Download - frasesdoamordejesus.mp4</button></a>
        </td>
      </tr>

      <tr>
        <td>
          <img src="https://cdn-icons-png.flaticon.com/256/3000/3000359.png" alt="">
        </td>
        <td>

        </td>
      </tr>

    </tbody>
  </table>

  <a href="">

    </img>
  </a>


</body>
</html>