<?php

namespace App;

class Db
{
    use Singleton;

    protected $dbh;

    public function __construct()
    {
        $config = new Config();
        $dsn = 'mysql:host=' . $config->data['db']['host'] . ';dbname=' . $config->data['db']['dbname'];
        $user = $config->data['db']['user'];
        $password = $config->data['db']['password'];
        $this->dbh = new \PDO($dsn, $user, $password);
    }

    public function query($sql, $data = [], $class = \stdClass::class)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);

        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }

    public function execute($sql,$data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        return $res;
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }
}