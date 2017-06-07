<?php

class Db
{
    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=localhost;dbname=zemlyanikino','root','');
    }

    public function query($sql, $class)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        $data = $sth->fetchAll(PDO::FETCH_ASSOC);
        $ret = [];
        foreach ($data as $row) {
            $obj = new $class;
            foreach ($row as $key => $val) {
                $obj->$key = $val;
            }
            $ret[]=$obj;
        }
        return $obj;
    }

}