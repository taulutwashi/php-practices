<?php

class  Database
{
    public $connection;
    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=php_practices;charset=UTF8";

        $this->connection = new PDO($dsn, 'root','washi');
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }
}

