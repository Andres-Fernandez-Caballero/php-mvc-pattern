<?php

namespace App\Models;

use App\Database\MysqlConnector;

abstract class Model {
    protected MysqlConnector $connection;

    public function __construct()
    {
        $this->connection = new MysqlConnector();
    }
}