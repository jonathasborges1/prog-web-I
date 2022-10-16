<?php 

// $host = "localhost";
// $port = "5432";
// $dbname = "escola";

// $user = "postgres";
// $password = "admin";
// $pg_options = "--client_encoding=UTF8";

// $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} options='{$pg_options}'";

class Conexao {

   private $host = "localhost";
   private $port = "5432";
   private $dbname = "escola";

   private $user = "postgres";
   private $password = "admin";
   private $conexao = null;

   private $pg_options = "--client_encoding=UTF8";


    // public function Conexao(){
    //     $this->conectar();
    // }
    
    function __construct(){
        $this->conectar();
    }

    public function getConexao(){
        return $this->conexao;
    }

	private function conectar(){
        try{
            $connection_string = "host={$this->host} port={$this->port} dbname={$this->dbname} user={$this->user} password={$this->password} options='{$this->pg_options}'";
            // $this->conexao = pg_connect("host=localhost port=5432 dbname=crud user=postgres password=leonardo") or die('Could not connect: ' . pg_last_error());

            $this->conexao = pg_connect($connection_string);
            echo "Conectou ao banco de dados. <br/>";

            // $this->conexao = new PDO($pdo_string, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }catch (Throwable $th) {
            echo "Falha ao conectar ao banco de dados. <br/>";
            die($th->getMessage());
        }
	}

    // private function desconectar(){
    //     try {
    //         $this->conexao = null;
    //         pg_close($conexao);	
    //     } catch (\Throwable $th) {
    //         echo "Falha ao desconectar. <br/>";
    //         throw $th;
    //     }
    // }


}

// $host = "localhost";
// $port = "5432";
// $dbname = "escola";

// $pdo_string = "pgsql:host={$host} port={$port} dbname={$dbname}";

// $user = "postgres";
// $password = "admin";

// $pg_options = "--client_encoding=UTF8";
// $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} options='{$pg_options}'";

// $dbconn = pg_connect($connection_string);

// try{
//     // $pdo = pg_connect($connection_string);
//     $pdo = new PDO($pdo_string, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
//     echo "Conectado com ao banco de dados com sucesso <br/>";

//     // $pdo = new PDO($connection_string);
// } catch (PDOException $e) {
//     echo "Falha ao conectar ao banco de dados. <br/>";
//     die($e->getMessage());
// }

// if($dbconn){
//     echo "Connected to ". pg_host($dbconn); 
// }else{
//     echo "Error in connecting to database.";
// }

// echo "<br />";

?>


<!-- 
    Referencias:
        https://www.idiotinside.com/2015/07/25/postgres-crud-operations-in-php/

-->