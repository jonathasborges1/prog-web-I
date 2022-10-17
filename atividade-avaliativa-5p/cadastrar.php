

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    
    <a href="menu.php"> 
      <img src="https://cdn-icons-png.flaticon.com/16/61/61449.png" alt="seta">
      <button>Retornar para Home</button> 
    </a>  <br>

    <table>
      <tr>
        <td>
          <form method="post" action="./controller/alunoController.php" autocomplete="off">
              <div>
                  <label>Nome</label>
                  <input type="text" name="nome_input" id="fullName" required>
              </div>
              <div>
                  <label>Cidade</label>
                  <input type="text" name="cidade_input">
              </div>
              <div>
                  <label>Telefone</label>
                  <input type="text" name="telefone_input">
              </div>
              <div>
                  <label>Sexo</label>
                  <input type="text" name="sexo_input">
              </div>
              <div>
                  <label>Email</label>
                  <input type="text" name="email_input">
              </div>
              <div class="form-action-buttons">
                  <input type="submit" value="Cadastrar Usuario">
              </div>
          </form>
        </td>
      <tr>
    <table>
  </body>

</html>