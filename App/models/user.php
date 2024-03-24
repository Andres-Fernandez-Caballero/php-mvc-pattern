<?php

namespace App\Models;

use App\Models\Model;


class User extends Model {
    public function getAll(){
        return $this->connection->query("SELECT * FROM users");
    }
}