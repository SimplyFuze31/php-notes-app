<?php

namespace Core;

use PDO;
class Database
{
    private $connection;
    private $statement;

    function __construct($config,$user, $pass)
    {
        $dsn = 'mysql:'.http_build_query($config,'',';');
        $this->connection = new PDO($dsn,$user,$pass, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }


    function query($query, $options = [])
    {
        $this->statement =  $this->connection->prepare($query);
        $this->statement->execute($options);
        return $this;
    }

    function get()
    {
        return $this->statement->fetch();
    }
    function getOrFail()
    {
        $result = $this->get();
        if (!$result){


            abort();

        }
        return $result;
    }
    function getAll()
    {
        return $this->statement->fetchAll();
    }
}