<?php

use router\Route;

Route::set('default', '(<controller>(/<action>(/<id>)))', [
    'controller' => 'Index',
    'action' => 'index'
]);

Route::set('users', 'users(:<action>(/<id>))', [
    'controller' => 'users'
]);

Route::set('stats', '<controller>(.<action>(.<id>))', [
    'action' => 'index'
]);

$app = new Application();

return $app;