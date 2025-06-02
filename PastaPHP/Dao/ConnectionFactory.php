<?php

 class ConnectionFactory { // padrão singleton  
    static $connection;

    public static function getConnection() {
        if (!isset(self::$connection)) {
            $host = "localhost";
            $dbName = 'micro';
            $user = "root";
            $pass = "";
            $port = 3306;

            try {
                self::$connection = new PDO( "mysql:host=$host;dbname=$dbName;port=$port",$user,$pass);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                 echo("Conectado com sucesso!!");


            } catch (PDOException $ex){
                die("ERRO ao conectar no banco de dados!<br>" . $ex->getMessage());
            }
        }

        return self::$connection;
    } 

 }



 /* class ConnectionFactory{    
    static $connection;

    public static function getConnection(){
        if(!isset($connection)){

            $port = 3306;         // porta do SGBD
            $dbName = "micr"; // Nome do banco de dados
            $user = "root";     // usuário do banco
            $host = "localhost";  // local de hospedagem do SGBD
            $pass = "";

            try{

                $connection = new PDO("mysql:host=$host;dbname=$dbName;port=$port",$user, $pass);
                echo "Conectado com sucesso !!";
                return $connection;

            }catch(PDOException $ex){

                echo "Error para conectar com o banco de dados" . $ex->getMessage();
            }
        }

        return $connection;

    }
 }
    */
?>
