<?php

class ConnectionFactory { // padrão singleton
    static $connection;

    
    public static function getConnection() {
        if (!isset(self::$connection)) {
            $host = "localhost";
            $dbName = 'microbio';
            $user = "root";
            $pass = "";
            $port = 3306;

            
            try {
                self::$connection = new PDO( "mysql:host=$host;dbname=$dbName;port=$port",$user,$pass);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                 echo("Conectado com sucesso!!");
            } catch (PDOException $ex) {
                die("ERRO ao conectar no banco de dados!<br>" . $ex->getMessage());
            }
        }

        return self::$connection;
    }

 }


    
            
/*          TESTE !!
            $host = "localhost";
            $dbName = 'microbio';
            $user = "root";
            $pass = "";
            $port = 3306;

            $conexao = new mysqli($host,$user,$pass,$dbName);

        if($conexao -> connect_errno){
            echo "Erro";

        }else{
            echo "Conexão efetuada com sucesso";
        }

    */
    
?>
