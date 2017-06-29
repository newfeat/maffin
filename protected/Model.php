<?php

namespace App;

abstract class Model

{
    protected static $table = null;

    use MagicTrait;

    /**
     * @return array|bool
     */
    public static function findAll()
    {
        $sql = 'SELECT * FROM ' . static::$table;
        $db = Db::instance();
        return $db->query($sql, [], static::class);
    }

    /**
     * @param $id
     * @return mixed
     */
    public static function findById($id)
    {
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
        $db = Db::instance();
        $data = $db->query($sql, [':id' => $id], static::class);
        if (empty($data)) {
            return null;
        }
        return $data[0];
    }

    /**
     *
     */
    public function insert()
    {
        $cols = [];
        $binds = [];
        $vals = [];
        foreach ($this->data as $key => $val) {
            if ('id' == $key) {
                continue;
            }
            $cols[] = $key;
            $binds[] = ':' . $key;
            $vals[':' . $key] = $val;
        }

        $sql = 'INSERT INTO  ' . static::$table . '(' . implode(', ', $cols) . ') VALUES (' . implode(', ', $binds) . ')';
        $db = Db::instance();
        $db->execute($sql, $vals);
        $this->id = $db->lastInsertId();
    }

    /**
     * @return bool
     */
    public function update()
    {
        $cols = [];
        $vals = [];
        foreach ($this->data as $key => $val) {
            if ('id' !== $key) {
                $cols[] = $key . '=:' . $key;
            }
            $vals[':' . $key] = $val;
        }
        $db = Db::instance();
        $sql = 'UPDATE ' . static::$table . ' SET ' . implode(', ', $cols) . ' WHERE id=:id';
        return $db->execute($sql, $vals);
    }


    /**
     * @return bool
     */
    public function isNew()
    {
        return empty($this->id);
    }

    /**
     * @return bool|void
     */
    public function save()
    {
        if ($this->isNew()) {
            return $this->insert();
        } else {
            return $this->update();
        }
    }

    /**
     * @return bool
     */
    public function delete()
    {
        $sql = 'DELETE FROM ' . static::$table . ' WHERE id=:id';
        $db = Db::instance();
        $arg = [':id' => $this->id];
        return $db->execute($sql, $arg);
    }


    public function fill(array $data)
    {
        $err = new MultiException();
        foreach ($data as $key => $val) {
            try {
                $this->data[$key] = $val;
            } catch(\Exception $e) {
                $err->add($e);
            }
        }
        if (!$err->empty()) {
            throw $err;
        }
        return $this;
    }

}