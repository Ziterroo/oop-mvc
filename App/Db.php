<?php


namespace App;

use PDO;

class Db
{
    protected object $dbh;
    protected static ?object $instance = null;

    public static function instance(): object
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    protected function __construct()
    {
        $config = (require __DIR__ . "/../config.php")['db'];
        $this->dbh = new PDO(
            'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'],
            $config['user'], $config['password']
        );
    }


    public function query(string $sql, string $class, $params = []): array
    {
        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute($params);
        if (!$result) {
            throw new \Exception('Ошибка запроса: ' . $sql, 404);
        }
        return $sth->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function execute(string $sql, array $data): bool
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($data);
    }

    public function lastId(): string
    {
        return $this->dbh->lastInsertId();
    }
}