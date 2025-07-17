<?php

namespace App\Models;

class User
{
    public static function find($id)
    {
        return [
            'id' => $id,
            'name' => 'John Doe',
            'email' => 'john@example.com'
        ];
    }
}
