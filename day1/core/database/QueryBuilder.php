<?php

class QueryBuilder {
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare('select * from ' . $table);

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insertTodo($table, $todo)
    {
        $sql = sprintf(
            "INSERT INTO %s (description, completed) VALUES ('%s', false)",
            $table, $todo
        );

        var_dump($sql);

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute();

            header('Location: /day1');

        } catch (Exception $e) {
            die('Oops, something went wrong');
        }

    }
}