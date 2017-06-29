<?php

namespace App;

use App\Exceptions\DbException;

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

        try {
            $this->dbh = new \PDO($dsn, $user, $password);
        } catch (\PDOException $e){
            if (!empty($e->getMessage())){

                $error = new DbException('Нет соединения с базой данных');
                $l = Logger::instance();
                $l->log($error);
                throw $error;
            }
        }

    }

    public function query($sql, $data = [], $class = \stdClass::class)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);

        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return false;
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