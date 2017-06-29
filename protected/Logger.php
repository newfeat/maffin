<?php

namespace App;

use App\Exceptions\DbException;

class Logger
{
    use Singleton;

    protected $logger;

    public function __construct()
    {
        $config = new Config();
        $this->logger = fopen($config->data['log']['error'], 'a');
    }

    public function log($error)
    {
        $log = 'Время: ' . date('Y-m-d H:i:s') . "\n" . 'Ошибка: ' .$error . "\n\n";
        fwrite($this->logger, $log);

    }
}