<?php

class Database {
  public $connection;

  public function __connection($config, $username = 'root', $password = '') {
    $dsn = 'myaql:' . http_build_query($config, '', ';');

    $this->connection = new PDO($dsn, $username, $password, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }

  public function query($query){
    $statement = $this->connection->prepare($query);
    
    $statement->execute();

    return $statement;
  }
}