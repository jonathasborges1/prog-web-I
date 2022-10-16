<?php

require_once 'db-connect.php';

$sql = "insert into users (name, age, country)  values('Dark Night', 30, 'Gotham')";

$result = pg_query($dbconn, $sql);

if(!$result){
  echo pg_last_error($dbconn);
} else {
  echo "Updated successfully";
}

// Close the connection
pg_close($dbconn);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>
    <table>
      <tr>
        <td>
          <form onsubmit="event.preventDefault();onFormSubmit();" autocomplete="off">
              <div>
                  <label>Nome</label>
                  <input type="text" name="fullName" id="fullName">
              </div>
              <div>
                  <label>Cidade</label>
                  <input type="text" name="empCode" id="empCode">
              </div>
              <div>
                  <label>Telefone</label>
                  <input type="text" name="salary" id="salary">
              </div>
              <div>
                  <label>Sexo</label>
                  <input type="text" name="city" id="city">
              </div>
              <div>
                  <label>Email</label>
                  <input type="text" name="city" id="city">
              </div>
              <div class="form-action-buttons">
                  <input type="submit" value="Submit">
              </div>
          </form>
        </td>
      <tr>
    <table>
  </body>
</html>