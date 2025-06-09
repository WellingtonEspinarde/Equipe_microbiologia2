<?php



 class ConnectionFactory { // padrão singleton  
    static $connection;

    public static function getConnection() {
        if (!isset(self::$connection)) {
            $host = "localhost";
            $dbName = 'micro';
            $user = "root";
            $pass = "";
            $port = 3307;

            try {
                self::$connection = new PDO( "mysql:host=$host;dbname=$dbName;port=$port",$user,$pass);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                 echo "Conectado com sucesso!!";


            } catch (PDOException $ex){
                echo "ERRO ao conectar no banco de dados!<br>" . $ex->getMessage();
            }
        }

        return self::$connection;
    } 

 }

?>
