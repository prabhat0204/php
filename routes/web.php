<?php

use App\Controllers\UserController;

$router->get('/user/profile', [UserController::class, 'show']);
$router->post('/user/update', [UserController::class, 'update']);
