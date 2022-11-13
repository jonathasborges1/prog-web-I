<?php
    $server = "localhost";
    $port = "5432";

    $user = "postgres";
    $password = "admin";

    $dbname = "loja";
    $pg_options = "--client_encoding=UTF8";

    $connection_string = "host={$server} port={$port} dbname={$dbname} user={$user} password={$password} options='{$pg_options}'";

    try {
        $connection = pg_connect($connection_string);
        // echo "Conectou ao banco de dados. <br/>";
    } catch (Throwable $th) {
        die("There was an error connecting: " . throw $th);
    }

    // $conexao = mysqli_connect($server,$user,$password,$dbname);
    // $conexao = pg_connect($connection_string);
    // if(!$conexao){
    //     die("There was an error connecting: " .mysqli_connect_error());
    // }
?>