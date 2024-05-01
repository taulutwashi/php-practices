<?php

class  Database
{
    public $connection;
    public function __construct($config)
    {
        $dsn = "mysql:".http_build_query($config,"",';');
        $this->connection = new PDO($dsn,'root','washi',[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    public function query($query, $params=[])
    {
        $statement = $this->connection->prepare($query);
        $statement->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, false);
        $statement->execute($params);
        return $statement;
    }
}

