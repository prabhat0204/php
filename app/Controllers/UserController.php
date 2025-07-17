<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function show()
    {
        $user = User::find(1); // dummy user
        include __DIR__ . '/../Views/profile.php';
    }

    public function update()
    {
        // Logic to update user
        echo json_encode(['status' => 'success', 'message' => 'User updated']);
    }
}
