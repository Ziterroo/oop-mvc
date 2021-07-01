<?php


namespace App;

use PDO;

class Db
{
    protected object $dbh;

    public function __construct()
    {
        $config = (require __DIR__ . "/../config.php")['db'];
        $this->dbh = new PDO(
            'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'],
            $config['user'], $config['password']
        );
    }

    /**
     * @param string $sql
     * @param string $class
     * @param array $data
     * @return array
     */
    public function query(string $sql, string $class, array $data = []): array
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);
        $data = $sth->fetchAll();
        $ret = [];
        foreach ($data as $row) {
            $item = new $class;
            foreach ($row as $key => $value) {
                if (!is_numeric($key)) {
                    $item->$key = $value;
                }
            }
            $ret[] = $item;
        }
        return $ret;
    }
}
