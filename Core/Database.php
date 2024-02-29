<?php

class Database
{
    private $connection;
    function __construct($config,$user, $pass)
    {
        $dsn = 'mysql:'.http_build_query($config,'',';');
        $this->connection = new PDO($dsn,$user,$pass, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }


    function query($query, $options = [])
    {
        $statement =  $this->connection->prepare($query,$options);
        $statement->execute();
        return $statement;
    }
}