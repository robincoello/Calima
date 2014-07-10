<?php


class Cf_Basedatos{
    private $host      = DB_HOST;
    private $user      = DB_USER;
    private $pass      = DB_PASS;
    private $dbname    = DB_NAME;
 
    private $dbh;
    private $error;
 
    public function __construct(){
        // definimos el dsn
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        // Opciones para PDO
        $options = array(
            PDO::ATTR_PERSISTENT    => true,
            PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
        );
        // creamos una instancia de PDO
        try{
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        }
        // Catch any errors
        catch(PDOException $e){
            $this->error = $e->getMessage();
        }
    }
}