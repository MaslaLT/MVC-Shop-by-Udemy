<?php
/**
 * Created by PhpStorm.
 * User: lazeris
 * Date: 31/08/2018
 * Time: 10:01
 */

class Database
{
    private $host = DB_HOST;
    private $username = DB_USER;
    private $passwrod = DB_PASS;
    private $dbName = DB_NAME;

    private $dbHandler;
    private $statemnt;
    private $error;

    public function __construct()
    {
        // Set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        // Create PDO instance
        try {
            $this->dbHandler = new PDO($dsn, $this->username, $this->passwrod, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }
    // Prepare satement with query
    public function query($sql)
    {
        $this->statemnt = $this->dbHandler->prepare($sql);
    }

    // Bind values
    public function bind($param, $value, $type = null)
    {
        if(is_null($type)){
            switch(true){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->statemnt->bindValue($param, $value, $type);
    }

    // Execute prepared statement
    public function execute()
    {
        return $this->statemnt->execute();
    }
}