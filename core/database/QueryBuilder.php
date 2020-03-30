<?php

class QueryBuilder {
    protected $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function selectAll($table) {
        $statement = $this->pdo->prepare("select * from ".$table);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $params) {
        $keys = implode(', ', array_keys($params));
        $values = ':'.implode(', :', array_keys($params));
        $sql = "insert into $table ($keys) values ($values)";
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($params);
        } catch (Exception $e) {
            var_dump('Woops, something gone wrong');
        }
        
    }
}