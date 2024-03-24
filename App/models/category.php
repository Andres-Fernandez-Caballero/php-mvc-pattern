<?php

namespace App\Models;

use App\Models\Model;

class Category extends Model {
    public function getAll() {
        return $this->connection->query('Select * FROM categories');
    }
}